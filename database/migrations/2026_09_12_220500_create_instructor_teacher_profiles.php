<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('teams')) {
            Schema::table('teams', function (Blueprint $table) {
                if (! Schema::hasColumn('teams', 'user_id')) {
                    $table->foreignId('user_id')->nullable()->after('id')->constrained()->nullOnDelete();
                }
                if (! Schema::hasColumn('teams', 'experience')) {
                    $table->text('experience')->nullable()->after('description');
                }
            });
        }

        Schema::create('instructor_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('duration')->nullable();
            $table->timestamps();
        });

        Schema::create('instructor_course_outlines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_course_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructor_course_outlines');
        Schema::dropIfExists('instructor_courses');

        if (Schema::hasTable('teams')) {
            Schema::table('teams', function (Blueprint $table) {
                if (Schema::hasColumn('teams', 'user_id')) {
                    $table->dropConstrainedForeignId('user_id');
                }
                if (Schema::hasColumn('teams', 'experience')) {
                    $table->dropColumn('experience');
                }
            });
        }
    }
};
