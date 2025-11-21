<?php

namespace App\Filament\Admin\Resources\Sponsors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SponsorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('event_id')
                    ->label('Event')
                    ->relationship('event', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                
                TextInput::make('name')
                    ->label('Sponsor/Partner Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Microsoft Azure'),
                
                TextInput::make('website')
                    ->label('Website URL')
                    ->url()
                    ->maxLength(255)
                    ->prefix('https://')
                    ->placeholder('www.company.com'),
                
                Select::make('tier')
                    ->label('Sponsorship Tier')
                    ->options([
                        'platinum' => 'Platinum Sponsor',
                        'gold' => 'Gold Sponsor',
                        'silver' => 'Silver Sponsor',
                        'bronze' => 'Bronze Sponsor',
                        'partner' => 'Official Partner',
                    ])
                    ->default('partner')
                    ->required()
                    ->native(false),
                
                TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first within tier')
                    ->minValue(0),

                FileUpload::make('logo')
                    ->label('Company Logo')
                    ->image()
                    ->disk('public')
                    ->directory('sponsors')
                    ->visibility('public')
                    ->imageEditor()
                    ->maxSize(2048)
                    ->required()
                    ->helperText('PNG with transparent background, at least 300px wide')
                    ->columnSpanFull(),
            ]);
    }
}