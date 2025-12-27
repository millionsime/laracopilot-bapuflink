<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'formulation',
        'application_rate',
        'manufacturing_location',
        'status',
    ];

    public function qrCodes()
    {
        return $this->hasMany(QRCode::class);
    }
}