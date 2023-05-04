<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pf_type_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_type_id')->index();
            $table->foreign('pf_type_id')->references('id')
                ->on('pf_types')->onDelete('cascade');
            $table->string('name');
            $table->jsonb('option');
            $table->string('status')->default('active');

            $table->timestamps();
        });
    }
};
