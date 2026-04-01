<?php

namespace App\Filament\Resources\Fasilitas;

use App\Filament\Resources\Fasilitas\Pages\CreateFasilitas;
use App\Filament\Resources\Fasilitas\Pages\EditFasilitas;
use App\Filament\Resources\Fasilitas\Pages\ListFasilitas;
use App\Filament\Resources\Fasilitas\Schemas\FasilitasForm;
use App\Filament\Resources\Fasilitas\Tables\FasilitasTable;
use App\Models\Fasilitas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;

protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-squares-plus';
    protected static string|\UnitEnum|null $navigationGroup = 'Space & Facilities';
    protected static ?string $modelLabel = 'Facility';
    protected static ?string $pluralModelLabel = 'Facilities';

    public static function form(Schema $schema): Schema
    {
        return FasilitasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FasilitasTable::configure($table);
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
            'index' => ListFasilitas::route('/'),
            'create' => CreateFasilitas::route('/create'),
            'edit' => EditFasilitas::route('/{record}/edit'),
        ];
    }
}

