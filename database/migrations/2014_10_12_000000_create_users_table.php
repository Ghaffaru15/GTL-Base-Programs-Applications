<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('hub_name');
            $table->string('application_registered');
            $table->string('project_lead_name');
            $table->string('project_lead_phone_number');
            $table->string('project_lead_email');
            $table->string('logo');
            $table->string('training_room');
            $table->string('laptops');
            $table->string('committed');
            $table->string('incubation');
            $table->string('internship_provision');
            $table->text('internship_places')->nullable();
            $table->string('provide_trainers');
            $table->string('reports');
            $table->string('business_lead');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('residence');
            // $table->string('region');
            // $table->string('sex');
            // $table->string('question'); 
            // $table->string('approved')->default('No');
            // $table->string('password');
            // $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
