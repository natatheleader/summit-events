<?php

namespace App\Filament\Admin\Resources\Sponsors;

use App\Filament\Admin\Resources\Sponsors\Pages\CreateSponsor;
use App\Filament\Admin\Resources\Sponsors\Pages\EditSponsor;
use App\Filament\Admin\Resources\Sponsors\Pages\ListSponsors;
use App\Filament\Admin\Resources\Sponsors\Schemas\SponsorForm;
use App\Filament\Admin\Resources\Sponsors\Tables\SponsorsTable;
use App\Models\Sponsor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SponsorResource extends Resource
{
    protected static ?string $model = Sponsor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice;

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return SponsorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SponsorsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSponsors::route('/'),
            'create' => CreateSponsor::route('/create'),
            'edit' => EditSponsor::route('/{record}/edit'),
        ];
    }
}