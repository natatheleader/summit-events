<?php

namespace App\Filament\Admin\Resources\Events\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Basic Information
                TextInput::make('name')
                    ->label('Event Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => 
                        $set('slug', Str::slug($state))
                    )
                    ->columnSpanFull(),
                
                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->helperText('Auto-generated from name')
                    ->columnSpanFull(),
                
                TextInput::make('tagline')
                    ->label('Tagline')
                    ->maxLength(255)
                    ->placeholder('A catchy tagline for the event')
                    ->columnSpanFull(),
                
                Textarea::make('description')
                    ->label('Short Description')
                    ->required()
                    ->rows(4)
                    ->placeholder('Brief description of the event')
                    ->columnSpanFull(),
                
                RichEditor::make('overview')
                    ->label('Detailed Overview')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                    ])
                    ->placeholder('Detailed overview of the event')
                    ->columnSpanFull(),

                // Event Details
                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->required()
                    ->native(false),
                
                DatePicker::make('end_date')
                    ->label('End Date')
                    ->required()
                    ->native(false),
                
                TextInput::make('venue')
                    ->label('Venue')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Ritz-Carlton Hotel'),
                
                TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Dubai, UAE'),
                
                TextInput::make('website_url')
                    ->label('Event Website')
                    ->url()
                    ->maxLength(255)
                    ->placeholder('https://example.com')
                    ->prefix('https://'),

                // Branding
                ColorPicker::make('primary_color')
                    ->label('Primary Color')
                    ->default('#1a365d')
                    ->helperText('Main brand color for this event'),
                
                ColorPicker::make('secondary_color')
                    ->label('Secondary Color')
                    ->default('#00d4ff')
                    ->helperText('Accent color for highlights'),
                
                FileUpload::make('logo')
                    ->label('Event Logo')
                    ->image()
                    ->disk('public')
                    ->directory('events/logos')
                    ->visibility('public')
                    ->imageEditor()
                    ->maxSize(2048)
                    ->helperText('PNG with transparent background recommended')
                    ->columnSpanFull(),
                
                FileUpload::make('hero_image')
                    ->label('Hero Background Image')
                    ->image()
                    ->disk('public')
                    ->directory('events/heroes')
                    ->visibility('public')
                    ->imageEditor()
                    ->maxSize(5120)
                    ->helperText('1920x1080px landscape image recommended')
                    ->columnSpanFull(),

                // Statistics
                TextInput::make('expected_attendees')
                    ->label('Expected Attendees')
                    ->numeric()
                    ->placeholder('500'),
                
                TextInput::make('speakers_count')
                    ->label('Number of Speakers')
                    ->numeric()
                    ->placeholder('25'),
                
                TextInput::make('organizations_count')
                    ->label('Participating Organizations')
                    ->numeric()
                    ->placeholder('150'),
                
                KeyValue::make('stats')
                    ->label('Custom Statistics')
                    ->keyLabel('Stat Name')
                    ->valueLabel('Value')
                    ->addActionLabel('Add Stat')
                    ->helperText('e.g., "Networking Hours" => "12+"')
                    ->columnSpanFull(),

                // Content
                RichEditor::make('why_attend')
                    ->label('Why Attend Section')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                    ])
                    ->placeholder('Explain the benefits of attending...')
                    ->columnSpanFull(),
                
                RichEditor::make('why_sponsor')
                    ->label('Why Sponsor Section')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                    ])
                    ->placeholder('Explain sponsorship benefits...')
                    ->columnSpanFull(),

                // Industries
                CheckboxList::make('industries')
                    ->label('Industries Covered')
                    ->relationship('industries', 'name')
                    ->columns(3)
                    ->searchable()
                    ->bulkToggleable()
                    ->columnSpanFull(),

                // Contact
                TextInput::make('contact_email')
                    ->label('Contact Email')
                    ->email()
                    ->maxLength(255)
                    ->placeholder('info@event.com'),
                
                TextInput::make('contact_phone')
                    ->label('Contact Phone')
                    ->tel()
                    ->maxLength(255)
                    ->placeholder('+971 4 xxx xxxx'),

                // Settings
                Toggle::make('is_featured')
                    ->label('Featured Event')
                    ->helperText('Show on homepage')
                    ->default(false),
                
                Toggle::make('is_active')
                    ->label('Active/Published')
                    ->helperText('Make event visible on website')
                    ->default(true),
            ]);
    }
}