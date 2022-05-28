<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addusers', function (Blueprint $table) {
            $table->id();
            $table->string("employee_id")->nullable();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("email")->nullable();
            $table->string("mobile_no")->nullable();
            // $table->string("select_role_type")->nullable();
            $table->string("username")->nullable();
            $table->string("password")->nullable();
            $table->string("confirm_password")->nullable();
            $table->string("super_admin")->nullable();
            $table->string("admin")->nullable();
            $table->string("employee")->nullable();
            $table->string("hr")->nullable();
            $table->string("role")->nullable();
            $table->string("member")->nullable();
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
        Schema::dropIfExists('addusers');
    }
}
