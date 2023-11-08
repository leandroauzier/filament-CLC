<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $modelLabel = 'Usuários';

    protected static ?string $slug = 'usuario';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label("Nome"),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->label("Email"),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label("Email verificado em"),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->maxLength(255)
                    ->label("Senha"),
                Forms\Components\Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name', fn(Builder $query)=>
                    auth()->user()->hasRole('Admin') ? null : $query->where("name", "!=", "Admin")
                    )
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label("Nome"),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label("Email"),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->label("Email Verificado em"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime("d/m/Y H:i")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label("Criado em"),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime("d/m/Y H:i")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label("Atualizado em"),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return auth()->user()->hasRole("Admin") 
        ? parent::getEloquentQuery()
        : parent::getEloquentQuery()->whereHas(
            "roles", fn(Builder $query) => $query->where("name", "!=", "Admin")
        );
    }
    
}
