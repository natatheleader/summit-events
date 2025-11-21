<?php

namespace App\Filament\Admin\Resources\Sponsors\Pages;

use App\Filament\Admin\Resources\Sponsors\SponsorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSponsor extends EditRecord
{
    protected static string $resource = SponsorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
