<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Video extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "videos";

    protected $fillable = [
        "titulo",
        "video",
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@gmail.com'); //&& $this->hasVerifiedEmail();
    }
}
