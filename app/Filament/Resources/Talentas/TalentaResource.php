<?php

namespace App\Filament\Resources\Talentas;

use App\Filament\Resources\Talentas\Pages\CreateTalenta;
use App\Filament\Resources\Talentas\Pages\EditTalenta;
use App\Filament\Resources\Talentas\Pages\ListTalentas;
use App\Filament\Resources\Talentas\Schemas\TalentaForm;
use App\Filament\Resources\Talentas\Tables\TalentasTable;
use App\Models\Talenta;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TalentaResource extends Resource
{
    protected static ?string $model = Talenta::class;

protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    protected static string|\UnitEnum|null $navigationGroup = 'User & Network';
    protected static ?string $modelLabel = 'Local Talent';
    protected static ?string $pluralModelLabel = 'Local Talents';

    public static function form(Schema $schema): Schema
    {
        return TalentaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TalentasTable::configure($table);
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
            'index' => ListTalentas::route('/'),
            'create' => CreateTalenta::route('/create'),
            'edit' => EditTalenta::route('/{record}/edit'),
        ];
    }
}

