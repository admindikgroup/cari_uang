<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Note: The primary key in your diagram is id_blog_video, which seems unusual.
        // If it's a one-to-one relationship, this is okay.
        // If not, you might want a separate primary key like id().
        Schema::create('broadcast_message', function (Blueprint $table) {
            $table->id('id_broadcast_message');
            $table->string('title');
            $table->text('konten_broadcast');
            $table->timestamps(); // Adds created_at and updated_at
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            // Assuming this relates to the blog_video table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcast_message');
    }
};
