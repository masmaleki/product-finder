<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pf_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_question_id')->index();
            $table->foreign('pf_question_id')->references('id')->on('pf_questions')
                ->onDelete('cascade');
            $table->unsignedBigInteger('pf_type_option_id')->index();
            $table->foreign('pf_type_option_id')->references('id')
                ->on('pf_type_options')->onDelete('cascade');
            $table->jsonb('value')->nullable();
            $table->integer('point')->default(0);
            $table->string('tag')->nullable();
            $table->text('info')->nullable();
            $table->string('status', 100)->default('active');
            $table->timestamps();
        });
    }
};
