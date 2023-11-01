<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicacaoResource\Pages;
use App\Filament\Resources\PublicacaoResource\RelationManagers;
use App\Models\Publicacao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicacaoResource extends Resource
{
    protected static ?string $model = Publicacao::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('publicacao')
                    ->required()
                    ->maxDate(now()),
                Forms\Components\Select::make('categoria')
                    ->options([
                        'certidao' => 'Certidão',
                        'organograma' => 'Organograma',
                        'outro' => 'Outro',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('arquivo')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf']),
                Forms\Components\Toggle::make('ativo')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('publicacao')
                    ->dateTime("d/m/Y H:i:s")
                    ->sortable(),
                Tables\Columns\TextColumn::make('categoria')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('arquivo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ativo')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublicacaos::route('/'),
            'create' => Pages\CreatePublicacao::route('/create'),
            'edit' => Pages\EditPublicacao::route('/{record}/edit'),
        ];
    }    
}
