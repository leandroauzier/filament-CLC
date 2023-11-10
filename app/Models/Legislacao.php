<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;

use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class legislacao extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = "Legislacoes";

    protected $fillable = [
        'nome',
        'arquivo',
    ];
    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@gmail.com'); //&& $this->hasVerifiedEmail();
    }
}
