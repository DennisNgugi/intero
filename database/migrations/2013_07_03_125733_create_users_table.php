<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('name_slug');
          $table->string('email')->unique();
          $table->string('company_name')->nullable();
          $table->string('company_slug')->nullable();
          $table->string('contact')->nullable();
          $table->longText('about')->nullable();
          $table->text('location')->nullable();
          $table->string('website')->nullable();
          $table->text('services_offered')->nullable();
          $table->string('profile_image')->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
