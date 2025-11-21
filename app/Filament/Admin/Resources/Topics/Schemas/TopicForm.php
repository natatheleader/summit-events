<?php

namespace App\Filament\Admin\Resources\Topics\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TopicForm
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
                    ->preload()
                    ->columnSpanFull(),
                
                TextInput::make('title')
                    ->label('Topic Title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., AI-Powered Digital Transformation')
                    ->columnSpanFull(),
                
                Textarea::make('description')
                    ->label('Topic Description')
                    ->rows(4)
                    ->placeholder('Brief description of what will be covered...')
                    ->columnSpanFull(),
                
                TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower numbers appear first')
                    ->minValue(0),
            ]);
    }
}