<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pf_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_question_id')->index();
            $table->foreign('pf_question_id')->references('id')
                ->on('pf_questions')->onDelete('cascade');
            $table->unsignedBigInteger('pf_form_id')->index();
            $table->foreign('pf_form_id')->references('id')
                ->on('pf_forms')->onDelete('cascade');

            $table->string('tag')->nullable();
            $table->jsonb('value')->nullable();
            $table->text('info')->nullable();

            $table->timestamps();
        });
    }
};
