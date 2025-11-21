<?php

namespace App\Filament\Admin\Resources\Registrations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RegistrationForm
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
                
                Select::make('registration_type')
                    ->label('Registration Type')
                    ->options([
                        'delegate' => 'Delegate',
                        'sponsor' => 'Sponsor',
                        'speaker' => 'Speaker',
                        'exhibitor' => 'Exhibitor',
                    ])
                    ->default('delegate')
                    ->required(),
                
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending Review',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->default('pending')
                    ->required()
                    ->native(false),

                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->tel()
                    ->maxLength(255),

                TextInput::make('company')
                    ->label('Company/Organization')
                    ->maxLength(255),
                
                TextInput::make('job_title')
                    ->label('Job Title')
                    ->maxLength(255),
                
                Textarea::make('message')
                    ->label('Additional Message')
                    ->rows(4)
                    ->placeholder('Any special requests or information...')
                    ->columnSpanFull(),
            ]);
    }
}