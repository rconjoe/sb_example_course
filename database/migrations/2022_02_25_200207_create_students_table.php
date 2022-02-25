<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */

  public function up()
  {
    Schema::create('students', function (Blueprint $table) {
      $table->bigInteger('studentId');
      $table->string('firstName');
      $table->string('lastName');
      $table->string('email');
      $table->boolean('present');
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
    Schema::dropIfExists('students');
  }
};
