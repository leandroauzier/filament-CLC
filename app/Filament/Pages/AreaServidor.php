<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use filament\Panel;
use App\Filament\Roles;

class AreaServidor extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static string $view = 'filament.pages.area-servidor';
    protected static ?string $pluralModelLabel = 'Área dos Servidores';
    public static ?string $title = 'Área do Servidor';

    protected static ?string $slug = 'area-servidor';

    protected static ?int $navigationSort = 2;

}
