<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class Publicacao extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "publicacao";

    protected $fillable = [
        'publicacao',
        'categoria',
        'titulo',
        'arquivo',
        'ativo',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'publicacao' => 'datetime',
        'categoria'=> 'string',
        'titulo' => 'string',
        'arquivo'=> 'string',
        'ativo' => 'boolean',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@gmail.com'); //&& $this->hasVerifiedEmail();
    }
}
