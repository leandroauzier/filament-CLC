<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArquivoResource\Pages;
use App\Filament\Resources\ArquivoResource\RelationManagers;
use App\Models\Arquivo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Redirect;

class ArquivoResource extends Resource
{
    protected static ?string $model = Arquivo::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $navigationGroup = 'Acervo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('nome')
                                    ->label("Nome do arquivo")
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\FileUpload::make('arquivo')
                                ->label("Arquivo")
                                ->required()
                                ->preserveFilenames()
                                ->acceptedFileTypes(['application/pdf'])
                                ->downloadable()
                                ->openable(),
                            ])->columns(1)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ 
                Tables\Columns\TextColumn::make('nome')
                    ->label("Nome do arquivo"),
                Tables\Columns\TextColumn::make('arquivo')
                    ->label("Arquivo")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                /*
                Tables\Actions\Action::make('pdf')
                    ->label('Visualizar arquivo')
                    //->url("/storage/arquivo", true)
                    ->button(),
                */
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
            'index' => Pages\ListArquivos::route('/'),
            'create' => Pages\CreateArquivo::route('/create'),
            'edit' => Pages\EditArquivo::route('/{record}/edit'),
        ];
    }    
}
