<?php

namespace App\Filament\Admin\Resources\Speakers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpeakerForm
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
                
                TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first')
                    ->minValue(0),

                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Dr. Ahmed Al-Mansoori'),
                
                TextInput::make('title')
                    ->label('Job Title/Position')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Chief Technology Officer'),
                
                TextInput::make('company')
                    ->label('Company/Organization')
                    ->maxLength(255)
                    ->placeholder('e.g., Emirates Technology Group'),
                
                TextInput::make('linkedin')
                    ->label('LinkedIn Profile URL')
                    ->url()
                    ->prefix('https://')
                    ->maxLength(255)
                    ->placeholder('linkedin.com/in/username'),

                FileUpload::make('photo')
                    ->label('Speaker Photo')
                    ->image()
                    ->disk('public')
                    ->directory('speakers')
                    ->visibility('public')
                    ->imageEditor()
                    ->circleCropper()
                    ->maxSize(2048)
                    ->helperText('Square image, at least 500x500px recommended')
                    ->columnSpanFull(),

                Textarea::make('bio')
                    ->label('Speaker Biography')
                    ->rows(5)
                    ->placeholder('Professional background, expertise, achievements...')
                    ->columnSpanFull(),
            ]);
    }
}