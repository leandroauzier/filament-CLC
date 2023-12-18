<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CompraDireta extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static string $view = 'filament.pages.compra-direta';

    protected static ?int $navigationSort = 5;
}
