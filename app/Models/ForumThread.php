<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumThread extends Model
{
    public function up(){
    Schema::create('forum_threads', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('body');
        $table->unsignedBigInteger('user_id');
        $table->timestamps();
        });
    }

}
