<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ten cua khoan tiet kiem');
            $table->text('summary')->comment('chi tiet cua khoan tiet kiem');
            $table->float('money')->comment('tien cua khoan tiet kiem');
            $table->integer('user_id')->comment('ten cua nguoi tao khoan tiet kiem');
            $table->timestamps();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earnings');
    }
}
