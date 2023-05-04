<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pf_steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_wizard_id')->index();
            $table->foreign('pf_wizard_id')->references('id')
                ->on('pf_wizards')->onDelete('cascade');
            $table->string('title', 255)->nullable();
            $table->integer('order')->default(0);
            $table->longtext('desc')->nullable();
            $table->string('status', 100)->default('active');
            $table->timestamps();
        });
    }
};
