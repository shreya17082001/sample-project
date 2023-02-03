<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    //connecting the chats details table to model chats
    protected $table = 'chats';

    //Adding in fillable array for adding, updating details in vendor table by post and put Request
    protected $fillable = ['id', 'from_user_id', 'to_user_id', 'product_id', 'message'];

}
