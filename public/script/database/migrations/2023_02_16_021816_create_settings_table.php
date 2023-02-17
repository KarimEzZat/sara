<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('favicon')->nullable();
            $table->string('site_name');
            $table->string('skill_title');
            $table->text('skill_description');
            $table->string('service_main_title');
            $table->string('service_up_title');
            $table->string('hire_title');
            $table->string('contact_title');
            $table->string('contact_image');
            $table->string('phone');
            $table->string('email');
            $table->string('web_site');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
