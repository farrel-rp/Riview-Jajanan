<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_jajanan',
        'kategori',
        'rating',
        'review'
    ];
}
