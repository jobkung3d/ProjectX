<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('nickname');
            $table->string('address')->nullable(true);
            $table->string('birthday')->nullable(true);
            $table->string('bank_account')->nullable(true);
            $table->string('status_noti');
            $table->string('status');
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
        Schema::dropIfExists('friend');
    }
}
