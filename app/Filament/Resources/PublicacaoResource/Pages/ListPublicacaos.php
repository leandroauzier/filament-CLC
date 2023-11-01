<?php

namespace App\Filament\Resources\PublicacaoResource\Pages;

use App\Filament\Resources\PublicacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicacaos extends ListRecords
{
    protected static string $resource = PublicacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
