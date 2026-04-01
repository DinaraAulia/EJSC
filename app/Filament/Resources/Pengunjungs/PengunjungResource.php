<?php

namespace App\Filament\Resources\Pengunjungs;

use App\Filament\Resources\Pengunjungs\Pages\CreatePengunjung;
use App\Filament\Resources\Pengunjungs\Pages\EditPengunjung;
use App\Filament\Resources\Pengunjungs\Pages\ListPengunjungs;
use App\Filament\Resources\Pengunjungs\Schemas\PengunjungForm;
use App\Filament\Resources\Pengunjungs\Tables\PengunjungsTable;
use App\Models\Pengunjung;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PengunjungResource extends Resource
{
    protected static ?string $model = Pengunjung::class;

protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    protected static string|\UnitEnum|null $navigationGroup = 'User & Network';
    protected static ?string $modelLabel = 'Workspace Visitor';
    protected static ?string $pluralModelLabel = 'Workspace Visitors';

    public static function form(Schema $schema): Schema
    {
        return PengunjungForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengunjungsTable::configure($table);
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
            'index' => ListPengunjungs::route('/'),
            'create' => CreatePengunjung::route('/create'),
            'edit' => EditPengunjung::route('/{record}/edit'),
        ];
    }
}

