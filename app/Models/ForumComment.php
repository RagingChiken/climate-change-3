<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    public function up(){
    Schema::create('forum_comments', function (Blueprint $table) {
        $table->id();
        $table->text('comment');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('thread_id');
        $table->timestamps();
        });
    }
}

