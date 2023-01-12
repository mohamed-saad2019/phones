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
            $table->string('full_name',100);
            $table->string('username',100);
            $table->string('email',150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('phone',15)->unique();
            $table->string('password');
            $table->string('memberShip')->nullable();
            $table->string('companyName')->nullable();
            $table->string('rocognitionName')->nullable();
            $table->string('identifictionNumber')->nullable();
            $table->date('birthday');
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
