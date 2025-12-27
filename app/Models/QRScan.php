<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRScan extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_code_id',
        'batch_number',
        'ip_address',
        'location',
        'is_suspicious',
    ];

    public function qrCode()
    {
        return $this->belongsTo(QRCode::class);
    }
}