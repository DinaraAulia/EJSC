<?php

namespace App\Filament\Resources\GaleriFotos;

use App\Filament\Resources\GaleriFotos\Pages\CreateGaleriFoto;
use App\Filament\Resources\GaleriFotos\Pages\EditGaleriFoto;
use App\Filament\Resources\GaleriFotos\Pages\ListGaleriFotos;
use App\Filament\Resources\GaleriFotos\Schemas\GaleriFotoForm;
use App\Filament\Resources\GaleriFotos\Tables\GaleriFotosTable;
use App\Models\GaleriFoto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GaleriFotoResource extends Resource
{
    protected static ?string $model = GaleriFoto::class;

protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-camera';
    protected static string|\UnitEnum|null $navigationGroup = 'Content Management';
    protected static ?string $modelLabel = 'Gallery Photo';
    protected static ?string $pluralModelLabel = 'Gallery Photos';

    public static function form(Schema $schema): Schema
    {
        return GaleriFotoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GaleriFotosTable::configure($table);
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
            'index' => ListGaleriFotos::route('/'),
            'create' => CreateGaleriFoto::route('/create'),
            'edit' => EditGaleriFoto::route('/{record}/edit'),
        ];
    }
}

