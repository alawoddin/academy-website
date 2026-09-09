<?php

use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\JoinPage;

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

if (Faq::count() === 0) {
    $faqs = [
        ['How do I create an account on this platform?', 'Register from the Register page, then log in to access your dashboard and enroll in courses.'],
        ['What courses and subjects are available on this platform?', 'We offer Network, Artificial Intelligence, Web Design, SQL Injection, and Cyber Security courses. More subjects are added from the admin panel.'],
        ['Can I access course materials on mobile devices?', 'Yes. You can open lessons and course pages from a phone, tablet, or computer.'],
        ['Is there a certificate of completion for courses?', 'Certificates can be issued after you finish a course. Contact the academy team for details.'],
        ['Can I interact with instructors and fellow learners during the course?', 'Yes. You can contact instructors from the teacher pages and send questions through the FAQ or Contact forms.'],
    ];

    foreach ($faqs as [$question, $answer]) {
        Faq::create(compact('question', 'answer'));
    }
}

if (Gallery::count() === 0) {
    for ($i = 1; $i <= 8; $i++) {
        Gallery::create([
            'caption' => 'polaroid # '.$i,
            'image' => 'frontend/assets/media/gallery/g-'.$i.'.png',
        ]);
    }
}

if (JoinPage::count() === 0) {
    JoinPage::create([
        'subtitle' => 'Apply Info',
        'title' => 'Want to Become A Teacher?<br> Drop Us <span class="fm-sec">Your CV!</span>',
        'description' => 'Share your teaching experience and we will review your application.',
        'rules_title' => 'Rules & Regulations',
        'rules_text' => 'Please follow academy teaching standards and keep student communication professional.',
        'rules' => "Submit a complete CV and contact details.\nHave subject knowledge for the course you want to teach.\nBe available for scheduled online classes.",
        'qualification_title' => 'Qualification Requirement',
        'qualification_text' => 'Teaching experience, clear communication, and knowledge of the subject you want to teach.',
    ]);
}

$contact = Contact::latest()->first();
if ($contact) {
    $contact->update([
        'address' => $contact->address ?: '123 Main Street, Anytown, USA.',
        'email' => $contact->email ?: 'info@tawanatechnology.com',
    ]);
}

echo "Frontend pages imported.\n";
echo 'FAQs: '.Faq::count().PHP_EOL;
echo 'Gallery: '.Gallery::count().PHP_EOL;
echo 'Join: '.JoinPage::count().PHP_EOL;
