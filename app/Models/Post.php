<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ======== SOME OF THE MODEL METHODS ========
// 1. All()
// 2. Find()
// 3. Create()
// 4. Update()
// 5. Delete()

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];
}
