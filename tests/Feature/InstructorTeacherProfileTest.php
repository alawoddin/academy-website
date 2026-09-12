<?php

use App\Models\InstructorCourse;
use App\Models\Team;
use App\Models\User;

test('instructor can update teacher page information', function () {
    $instructor = User::factory()->create(['role' => 'instructor', 'name' => 'Elyas Khan']);

    $this->actingAs($instructor)
        ->post(route('instructor.teacher.store'), [
            'name' => 'Elyas Khan',
            'subject' => 'IT Teacher',
            'hours' => '60+',
            'description' => 'I teach network and IT courses.',
            'experience' => '5 years teaching Network+',
        ])
        ->assertRedirect(route('instructor.teacher'));

    $team = $instructor->fresh()->team;

    expect($team)->not->toBeNull()
        ->and($team->subject)->toBe('IT Teacher')
        ->and($team->experience)->toBe('5 years teaching Network+');

    $this->get(route('team.detail', $team->id))
        ->assertOk()
        ->assertSee('Elyas Khan')
        ->assertSee('IT Teacher')
        ->assertSee('5 years teaching Network+');
});

test('instructor can add a course outline that shows on teacher detail', function () {
    $instructor = User::factory()->create(['role' => 'instructor', 'name' => 'Elyas Khan']);
    $team = $instructor->ensureTeam();

    $this->actingAs($instructor)
        ->post(route('instructor.course.store'), [
            'title' => 'Network+',
            'duration' => '10H in 2 months',
            'outline' => [
                'Intro the network',
                'How network',
            ],
        ])
        ->assertRedirect(route('instructor.courses'));

    $this->assertDatabaseHas('instructor_courses', [
        'user_id' => $instructor->id,
        'title' => 'Network+',
        'duration' => '10H in 2 months',
    ]);

    $this->get(route('team.detail', $team->id))
        ->assertOk()
        ->assertSee('Network+')
        ->assertSee('10H in 2 months')
        ->assertSee('Intro the network')
        ->assertSee('How network');
});

test('instructor cannot edit another instructor course', function () {
    $owner = User::factory()->create(['role' => 'instructor']);
    $other = User::factory()->create(['role' => 'instructor']);
    $course = InstructorCourse::create([
        'user_id' => $owner->id,
        'title' => 'Network+',
        'duration' => '10H',
    ]);

    $this->actingAs($other)
        ->get(route('instructor.course.edit', $course->id))
        ->assertNotFound();
});

test('accepting an instructor creates a public teacher page', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $instructor = User::factory()->pending()->create(['name' => 'Elyas Khan']);

    $this->actingAs($admin)
        ->get(route('accept.instructor', $instructor->id))
        ->assertRedirect(route('all.instructor'));

    expect(Team::where('user_id', $instructor->id)->exists())->toBeTrue();
});
