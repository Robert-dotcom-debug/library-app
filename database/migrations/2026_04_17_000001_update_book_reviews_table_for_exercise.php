<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('book_reviews', function (Blueprint $table) {
            $table->string('title', 255)->after('rating');
            $table->renameColumn('comment', 'body');
        });
    }

    public function down(): void
    {
        Schema::table('book_reviews', function (Blueprint $table) {
            $table->renameColumn('body', 'comment');
            $table->dropColumn('title');
        });
    }
};
