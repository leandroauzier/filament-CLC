<?php

namespace App\Filament\Resources\PublicacaoResource\Pages;

use App\Filament\Resources\PublicacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicacao extends EditRecord
{
    protected static string $resource = PublicacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
