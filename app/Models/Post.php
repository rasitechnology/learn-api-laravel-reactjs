<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
    
     /**
     * image
     *
     * @var return Attribute
     */

     protected function image(): Attribute
     {
        return Attribute::make(
            get: fn($image) => asset('storage/post/'. $image),
        );
     }

     public function toArray()
    {
        $data = parent::toArray();
        unset($data['created_at']);
        unset($data['updated_at']);
        return $data;
    }
}
