<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCodeScan extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_code_id',
        'scan_time',
        'ip_address',
        'user_agent',
    ];

    public function qrCode()
    {
        return $this->belongsTo(QRCode::class);
    }
}