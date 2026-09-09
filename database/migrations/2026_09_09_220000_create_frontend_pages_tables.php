<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
        });

        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('caption')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('rules_title')->nullable();
            $table->text('rules_text')->nullable();
            $table->text('rules')->nullable();
            $table->string('qualification_title')->nullable();
            $table->text('qualification_text')->nullable();
            $table->timestamps();
        });

        Schema::create('join_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cv')->nullable();
            $table->timestamps();
        });

        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });

        Schema::create('faq_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->string('address')->nullable()->after('phone');
            $table->string('email')->nullable()->after('address');
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->text('description')->nullable()->after('author_role');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['address', 'email']);
        });

        Schema::dropIfExists('faq_messages');
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('join_applications');
        Schema::dropIfExists('joins');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('faqs');
    }
};
