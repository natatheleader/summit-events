<?php

namespace App\Filament\Admin\Resources\Speakers\Pages;

use App\Filament\Admin\Resources\Speakers\SpeakerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSpeaker extends CreateRecord
{
    protected static string $resource = SpeakerResource::class;
}
