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
            $table->string('name')->comment('ten cua user');
            $table->string('email')->unique()->comment('email duy nhat cua user');
            $table->string('phone')->comment('dien thoai cua user');
            $table->string('address')->comment('dia chi cua user');
            $table->integer('role_id')->comment('1: user thuong, 2: admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('password cua user');
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
