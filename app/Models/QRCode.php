<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'batch_number',
        'token',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scans()
    {
        return $this->hasMany(QRScan::class);
    }
}