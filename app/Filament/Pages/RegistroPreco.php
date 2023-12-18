<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RegistroPrecoResource;
use Filament\Actions\Action;
use Filament\Pages\Page;

class RegistroPreco extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.registro-preco';
    protected static ?string $navigationGroup = 'Acervo';

    public static ?string $title = 'Registro de Preço';

}
