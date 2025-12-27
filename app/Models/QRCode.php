<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'token',
        'status',
        'scan_count',
        'first_scan_time',
        'first_scan_location',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function scans()
    {
        return $this->hasMany(QRCodeScan::class);
    }
}