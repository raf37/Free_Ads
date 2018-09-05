<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['user_id', 'created_at', 'updated_at', 'title', 'content', 'price', 'picture'];
    protected $table = 'annonces';
}
