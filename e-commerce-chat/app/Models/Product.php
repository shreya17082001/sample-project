<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //connecting the users details table to model users
    protected $table = 'products';

    //Adding in fillable array for adding, updating details in vendor table by post and put Request
    protected $fillable = ['id', 'catogeries_id', 'name', 'price', 'description'];

}
