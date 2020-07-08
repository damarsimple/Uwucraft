<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Im not database engineer help pls
        Schema::create('chatsroom', function (Blueprint $table) {
            $table->id('roomid');
            $table->json('participantid'); //Store People ID thats in chats rooms
            $table->json('messageid'); //Store Message Data that people sends
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        Schema::create('chatsmessage', function (Blueprint $table) {
            $table->id('messageid');
            $table->integer('senderid'); //Store ID of messsage sender
            $table->integer('roomid'); //store ID of room sender message into
            $table->string('messages'); //Store Message
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        Schema::create('chatssubscribes', function (Blueprint $table) {
            $table->id();
            $table->json('chatssubscribe');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatsroom');
        Schema::dropIfExists('chatsmessage');
        Schema::dropIfExists('chatssubscribes');
    }
}
