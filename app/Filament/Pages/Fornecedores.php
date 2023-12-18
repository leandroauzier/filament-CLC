<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Fornecedores extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static string $view = 'filament.pages.fornecedores';

    public static ?string $title = 'Fornecedores';

    protected static ?string $slug = 'fornecedores';

    protected static ?int $navigationSort = 3;
}
