<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    const EXCERPT_LENGTH = 250;
	

    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function excerpt(){
        return Str::limit($this->body,Post::EXCERPT_LENGTH);
    }

}
