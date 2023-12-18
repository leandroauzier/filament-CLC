<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Acervo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->label("Titulo do Vídeo"),
                Forms\Components\TextInput::make('video')
                    ->label("Link para o vídeo")
                    ->required()
                    ->hint("Insira o link do video aqui")
                    ->live(onBlur:true)
                    ->afterStateUpdated(function(string $operation, $state, Forms\Set $set){
                        if($operation !== "create"){
                            return;
                        }
                        $set(url("link"), $state);
                    })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("titulo")
                    ->label("Título do Vídeo")
                    ->searchable(),
                Tables\Columns\TextColumn::make("video")
                    ->label("Link para o vídeo")
                    ->searchable()
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ButtonAction::make("link")
                    ->label("Abrir em nova aba")
                    ->url(fn (Video $record): string => url($record->video))
                    ->openUrlInNewTab(true),
                    
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVideos::route('/'),
        ];
    }    
}
