<?php

use App\Models\User;

test('instructor can view profile page', function () {
    $user = User::factory()->create(['role' => 'instructor']);

    $this->actingAs($user)
        ->get(route('instructor.profile'))
        ->assertOk()
        ->assertSee('Update Profile')
        ->assertSee($user->name);
});

test('instructor can update profile details', function () {
    $user = User::factory()->create([
        'role' => 'instructor',
        'name' => 'Old Name',
        'phone' => '111',
        'address' => 'Old Address',
    ]);

    $this->actingAs($user)
        ->post(route('instructor.profile.store'), [
            'name' => 'New Instructor',
            'email' => $user->email,
            'phone' => '0799000000',
            'address' => 'Kabul',
        ])
        ->assertRedirect(route('instructor.profile'));

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'New Instructor',
        'phone' => '0799000000',
        'address' => 'Kabul',
    ]);
});

test('instructor can logout from instructor logout route', function () {
    $user = User::factory()->create(['role' => 'instructor']);

    $this->actingAs($user)
        ->get(route('instructor.logout'))
        ->assertRedirect('/login');

    $this->assertGuest();
});

test('sidebar logout must not use breeze post logout as a get link', function () {
    $html = file_get_contents(resource_path('views/instructor/body/sidebar.blade.php'));

    expect($html)->toContain("route('instructor.logout')")
        ->and($html)->not->toContain("route('logout')")
        ->and($html)->toContain("route('instructor.profile')")
        ->and($html)->not->toContain('profile.html');
});
