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
        Schema::create('konten_master', function (Blueprint $table) {
            $table->id('id_master_page');
            $table->tinyInteger('page_kategori'); // As per your diagram (tinyint)
            $table->text('konten');
            $table->timestamps(); // Adds created_at and updated_at
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konten_master');
    }
};
