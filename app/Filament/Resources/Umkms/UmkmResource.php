<?php

namespace App\Filament\Resources\Umkms;

use App\Filament\Resources\Umkms\Pages\CreateUmkm;
use App\Filament\Resources\Umkms\Pages\EditUmkm;
use App\Filament\Resources\Umkms\Pages\ListUmkms;
use App\Filament\Resources\Umkms\Schemas\UmkmForm;
use App\Filament\Resources\Umkms\Tables\UmkmsTable;
use App\Models\Umkm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-storefront';
    protected static string|\UnitEnum|null $navigationGroup = 'User & Network';
    protected static ?string $modelLabel = 'Partner SME';
    protected static ?string $pluralModelLabel = 'Partner SMEs';

    public static function form(Schema $schema): Schema
    {
        return UmkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmkmsTable::configure($table);
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
            'index' => ListUmkms::route('/'),
            'create' => CreateUmkm::route('/create'),
            'edit' => EditUmkm::route('/{record}/edit'),
        ];
    }
}

