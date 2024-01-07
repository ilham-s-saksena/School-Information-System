<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Siswa extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;
    
    protected $table = 'siswas';

    public function pembayaran(): HasMany
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function getAuthPassword()
    {
        return $this->getAttribute('password'); 
    }

    public function kehadiran(): HasMany
    {
        return $this->hasMany(Kehadiransiswa::class);
    }
}
