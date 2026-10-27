<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\InstructorCourse;
use App\Models\InstructorCourseOutline;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class TeacherFolderSeeder extends Seeder
{
    public function run(): void
    {
        $english = Category::firstOrCreate(
            ['title' => 'English Language'],
            [
                'description' => 'Grammar, writing, speaking, reading, and listening courses for every level.',
                'rating' => '5',
                'teachers' => '1 Teacher',
                'hours' => '40+',
                'image' => 'frontend/assets/media/courses/categories/c-1.png',
            ]
        );

        $islamic = Category::firstOrCreate(
            ['title' => 'Islamic Studies'],
            [
                'description' => 'Islamic history, ethics, principles, and related subjects taught by experienced instructors.',
                'rating' => '5',
                'teachers' => '1 Teacher',
                'hours' => '40+',
                'image' => 'frontend/assets/media/courses/categories/c-2.png',
            ]
        );

        $ansarullahImage = $this->copyTeacherImage(
            base_path('teacher/ANSARULLAH/WhatsApp Image 2026-10-27 at 11.41.45 PM.jpeg'),
            'ansarullah-sadat'
        );

        $asifImage = $this->copyTeacherImage(
            base_path('teacher/asif/asif.jpeg'),
            'm-asif'
        );

        $ansarullah = $this->upsertTeacher([
            'name' => 'Sayed Ansarullah Sadat',
            'email' => 'ansarullah.sadat@academy.local',
            'subject' => 'English Language',
            'rating' => '5',
            'hours' => '40+',
            'image' => $ansarullahImage,
            'description' => 'Dedicated English Language Instructor with 3–4 years of teaching experience, specializing in English grammar, academic writing, reading comprehension, speaking, and listening. Passionate about helping learners strengthen English proficiency through clear explanations, practical exercises, and constructive feedback.',
            'experience' => "English Language Instructor — Daneshmandan Private High School\n\n• Teaching English and Advanced English to students in Grades 5–11\n• Explaining grammar rules, sentence structures, and essential language concepts\n• Developing reading comprehension, writing, vocabulary, and communication skills\n• Preparing structured classroom lessons and practical language exercises\n• Supporting students in improving English proficiency and academic performance\n\nProfessional experience: approximately 3–4 years of English teaching.\nCore expertise: Grammar & Language Structure, Academic Writing, Reading Comprehension, Speaking & Communication, Listening Comprehension, Vocabulary & Proficiency.",
            'password' => 'Teacher@123',
            'courses' => [
                [
                    'title' => 'English Grammar Fundamentals',
                    'duration' => '08+ Hours',
                    'videos' => '24 Videos',
                    'price' => '$100',
                    'category' => $english,
                    'outlines' => [
                        'Parts of Speech and Sentence Structure',
                        'Tenses and Verb Forms',
                        'Active and Passive Voice',
                        'Direct and Indirect Speech',
                        'Clauses, Phrases, and Conditionals',
                        'Error Correction and Sentence Analysis',
                    ],
                ],
                [
                    'title' => 'Academic Writing & Composition',
                    'duration' => '10+ Hours',
                    'videos' => '28 Videos',
                    'price' => '$120',
                    'category' => $english,
                    'outlines' => [
                        'Paragraph and Essay Writing',
                        'Academic and Formal Writing',
                        'Grammar, Punctuation, and Vocabulary',
                        'Coherence, Cohesion, and Organization',
                        'Summarizing and Paraphrasing',
                        'Letter, Email, and Report Writing',
                    ],
                ],
                [
                    'title' => 'Conversational English & Speaking',
                    'duration' => '09+ Hours',
                    'videos' => '22 Videos',
                    'price' => '$110',
                    'category' => $english,
                    'outlines' => [
                        'Conversational English Practice',
                        'Pronunciation and Fluency Development',
                        'Everyday Communication Vocabulary',
                        'Discussion and Presentation Skills',
                        'Confidence-Building Communication Activities',
                    ],
                ],
                [
                    'title' => 'Reading & Listening Skills',
                    'duration' => '08+ Hours',
                    'videos' => '20 Videos',
                    'price' => '$105',
                    'category' => $english,
                    'outlines' => [
                        'Reading for Main Ideas and Details',
                        'Skimming and Scanning Techniques',
                        'Critical Reading and Text Analysis',
                        'Understanding Spoken English',
                        'Listening for Specific Information',
                    ],
                ],
            ],
        ]);

        $this->upsertTeacher([
            'name' => 'M. Asif',
            'email' => 'asif@academy.local',
            'subject' => 'Islamic Studies',
            'rating' => '5',
            'hours' => '60+',
            'image' => $asifImage,
            'description' => 'M. Asif holds a Master’s degree and brings 7 years of dedicated experience in teaching Islamic Studies. Fully equipped to teach all kinds of Islamic subjects, he is committed to fostering a deep understanding of Islamic history, ethics, and principles among his students through a comprehensive and engaging approach.',
            'experience' => "7 years of dedicated teaching experience in Islamic Studies.\n\n• Master’s degree holder\n• Experienced teaching a wide range of Islamic subjects\n• Focus on Islamic history, ethics, and core principles\n• Comprehensive and engaging classroom approach\n• Committed to building strong understanding and values in learners",
            'password' => 'Teacher@123',
            'courses' => [
                [
                    'title' => 'Islamic Studies Fundamentals',
                    'duration' => '10+ Hours',
                    'videos' => '26 Videos',
                    'price' => '$100',
                    'category' => $islamic,
                    'outlines' => [
                        'Introduction to Islamic Studies',
                        'Core Beliefs and Principles',
                        'Islamic Ethics and Character',
                        'Daily Practices and Guidance',
                        'Student Discussion and Reflection',
                    ],
                ],
                [
                    'title' => 'Islamic History & Ethics',
                    'duration' => '12+ Hours',
                    'videos' => '30 Videos',
                    'price' => '$115',
                    'category' => $islamic,
                    'outlines' => [
                        'Early Islamic History Overview',
                        'Key Historical Events and Lessons',
                        'Ethics in Personal and Social Life',
                        'Moral Values and Responsibility',
                        'Applied Learning Activities',
                    ],
                ],
                [
                    'title' => 'Islamic Principles for Students',
                    'duration' => '09+ Hours',
                    'videos' => '24 Videos',
                    'price' => '$120',
                    'category' => $islamic,
                    'outlines' => [
                        'Foundational Islamic Principles',
                        'Understanding Faith and Practice',
                        'Respect, Discipline, and Character Building',
                        'Guided Reading and Explanation',
                        'Assessment and Progress Review',
                    ],
                ],
            ],
        ]);

        $this->command?->info('Teachers imported: Sayed Ansarullah Sadat and M. Asif (courses from $100).');
        $this->command?->info('Instructor logins: ansarullah.sadat@academy.local / asif@academy.local — password: Teacher@123');

        unset($ansarullah);
    }

    private function upsertTeacher(array $data): Team
    {
        $user = User::updateOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['name'],
                'password' => Hash::make($data['password']),
                'role' => 'instructor',
                'status' => User::STATUS_APPROVED,
                'email_verified_at' => now(),
            ]
        );

        $team = Team::updateOrCreate(
            ['user_id' => $user->id],
            [
                'name' => $data['name'],
                'subject' => $data['subject'],
                'rating' => $data['rating'],
                'hours' => $data['hours'],
                'description' => $data['description'],
                'experience' => $data['experience'],
                'image' => $data['image'] ?? null,
            ]
        );

        foreach ($data['courses'] as $courseData) {
            $instructorCourse = InstructorCourse::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'title' => $courseData['title'],
                ],
                [
                    'duration' => $courseData['duration'],
                ]
            );

            $instructorCourse->outlines()->delete();
            foreach ($courseData['outlines'] as $index => $outline) {
                InstructorCourseOutline::create([
                    'instructor_course_id' => $instructorCourse->id,
                    'title' => $outline,
                    'sort_order' => $index + 1,
                ]);
            }

            Course::updateOrCreate(
                ['title' => $courseData['title']],
                [
                    'category_id' => $courseData['category']->id,
                    'category_name' => $courseData['category']->title,
                    'videos' => $courseData['videos'],
                    'hours' => $courseData['duration'],
                    'price' => $courseData['price'],
                    'author_name' => $data['name'],
                    'author_role' => $data['subject'].' Instructor',
                    'author_image' => $data['image'] ?? null,
                    'description' => $data['description'],
                    'icon' => Course::iconForTitle($courseData['title']),
                    'tag_image' => 'frontend/assets/media/courses/tag-1.png',
                ]
            );
        }

        return $team;
    }

    private function copyTeacherImage(string $source, string $slug): ?string
    {
        if (! is_file($source)) {
            return null;
        }

        $dir = public_path('upload/team');
        if (! is_dir($dir)) {
            File::makeDirectory($dir, 0755, true);
        }

        $extension = strtolower(pathinfo($source, PATHINFO_EXTENSION) ?: 'jpg');
        $filename = $slug.'.'.$extension;
        $destination = $dir.'/'.$filename;

        try {
            $manager = new ImageManager(new Driver());
            $manager->read($source)->scaleDown(width: 1200)->save($destination);
        } catch (\Throwable) {
            File::copy($source, $destination);
        }

        return 'upload/team/'.$filename;
    }
}
