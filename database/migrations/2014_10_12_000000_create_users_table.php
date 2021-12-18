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
            $table->id();
            $table->string('user_id')->unique();
            $table->string('name');
            $table->string('unit');
            $table->string('email');
            $table->string('alamat');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_hp');
            $table->string('gender');
            $table->enum('status', ['Lainnya', 'Panitia', 'Admin', 'Pejabat', 'Sekretaris']);
            $table->rememberToken();
            $table->timestamps();;
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
