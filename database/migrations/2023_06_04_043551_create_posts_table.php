<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("posts", function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id");
            $table->string("title");
            $table->text("excerpt"); //buat yg tulisan kecil 'read more'
            $table->text("body");
            $table->timestamp("published_at")->nullable();
            $table->timestamps(); //klo yg ini buat CRUD nya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("posts");
    }
};
