<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    use HasFactory;
    //connecting the mappings details table to model mappings
    protected $table = 'mappings';

    //Adding in fillable array for adding, updating details in vendor table by post and put Request
    protected $fillable = ['id', 'user_id', 'friend_user_id'];

}
