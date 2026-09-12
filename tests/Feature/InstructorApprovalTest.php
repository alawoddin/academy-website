<?php

use App\Models\User;

test('new instructor registration stays pending and cannot open the dashboard', function () {
    $response = $this->post('/register', [
        'first_name' => 'Pending',
        'last_name' => 'Teacher',
        'email' => 'pending.teacher@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('instructor.pending', absolute: false));

    $this->assertDatabaseHas('users', [
        'email' => 'pending.teacher@example.com',
        'role' => 'instructor',
        'status' => User::STATUS_PENDING,
    ]);

    $this->get(route('instructor.dashboard'))->assertRedirect(route('instructor.pending'));
});

test('pending instructor can login only to the pending page', function () {
    $user = User::factory()->pending()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertRedirect(route('instructor.pending', absolute: false));

    $this->assertAuthenticated();
    $this->get(route('instructor.dashboard'))->assertRedirect(route('instructor.pending'));
    $this->get(route('instructor.pending'))->assertOk()->assertSee('Pending Approval');
});

test('rejected instructor cannot login', function () {
    $user = User::factory()->rejected()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])->assertSessionHasErrors('email');

    $this->assertGuest();
});

test('admin can accept a pending instructor', function () {
    $admin = User::factory()->create(['role' => 'admin', 'status' => User::STATUS_APPROVED]);
    $instructor = User::factory()->pending()->create();

    $this->actingAs($admin)
        ->get(route('accept.instructor', $instructor->id))
        ->assertRedirect(route('all.instructor'));

    expect($instructor->fresh()->isApproved())->toBeTrue();

    $this->post('/logout');

    $this->post('/login', [
        'email' => $instructor->email,
        'password' => 'password',
    ])->assertRedirect(route('instructor.dashboard', absolute: false));
});

test('admin can add an instructor who can login and manage their own teacher page', function () {
    $admin = User::factory()->create(['role' => 'admin', 'status' => User::STATUS_APPROVED]);

    $this->actingAs($admin)
        ->post(route('store.instructor'), [
            'name' => 'Elyas Khan',
            'email' => 'elyas.khan@example.com',
            'phone' => '0799000000',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->assertRedirect(route('all.instructor'));

    $instructor = User::where('email', 'elyas.khan@example.com')->first();

    expect($instructor)->not->toBeNull()
        ->and($instructor->isApproved())->toBeTrue()
        ->and($instructor->team)->not->toBeNull();

    $this->post('/logout');

    $this->post('/login', [
        'email' => 'elyas.khan@example.com',
        'password' => 'password',
    ])->assertRedirect(route('instructor.dashboard', absolute: false));

    $this->get(route('instructor.teacher'))->assertOk()->assertSee('Public Teacher Information');
    $this->get(route('instructor.courses'))->assertOk()->assertSee('Course Outlines');
});

test('admin can reject a pending instructor', function () {
    $admin = User::factory()->create(['role' => 'admin', 'status' => User::STATUS_APPROVED]);
    $instructor = User::factory()->pending()->create();

    $this->actingAs($admin)
        ->get(route('reject.instructor', $instructor->id))
        ->assertRedirect(route('all.instructor'));

    expect($instructor->fresh()->isRejected())->toBeTrue();
});
