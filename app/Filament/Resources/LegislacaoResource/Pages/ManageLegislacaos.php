<?php

namespace App\Filament\Resources\LegislacaoResource\Pages;

use App\Filament\Resources\LegislacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLegislacaos extends ManageRecords
{
    protected static string $resource = LegislacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
