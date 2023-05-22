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
        Schema::create('Blocks', function(Blueprint $table){
            $table -> increments('id');
            $table -> string('block_name', 50);
            $table -> string('info');
            $table -> integer('topicId') -> unsigned();
            $table -> foreign('topicId') -> references('id') -> on('Topics') -> onDelete('cascade');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Blocks');
    }
};
