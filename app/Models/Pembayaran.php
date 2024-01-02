<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;
    public function siswas(): BelongsTo
    {
        return $this->BelongsTo(Siswa::class, 'siswa_id', 'id');
    }

    protected $fillable = [
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
    ];

    public function getNextColumnName($currentColumn)
    {
        $fillableColumns = $this->getFillable();
        $currentIndex = array_search($currentColumn, $fillableColumns);

        if ($currentIndex !== false && isset($fillableColumns[$currentIndex + 1])) {
            return $fillableColumns[$currentIndex + 1];
        }

        return null;
    }
}
