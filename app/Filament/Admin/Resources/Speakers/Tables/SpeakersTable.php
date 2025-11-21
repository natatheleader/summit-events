<?php

namespace App\Filament\Admin\Resources\Speakers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SpeakersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Photo')
                    ->circular()
                    ->size(60)
                    ->defaultImageUrl(url('/images/default-avatar.png')),
                
                TextColumn::make('name')
                    ->label('Speaker Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                
                TextColumn::make('title')
                    ->label('Position')
                    ->searchable()
                    ->wrap(),
                
                TextColumn::make('company')
                    ->label('Company')
                    ->searchable()
                    ->toggleable(),
                
                TextColumn::make('event.name')
                    ->label('Event')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                
                TextColumn::make('order')
                    ->label('Order')
                    ->sortable()
                    ->alignCenter(),
            ])
            ->filters([
                SelectFilter::make('event')
                    ->relationship('event', 'name')
                    ->preload()
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order', 'asc');
    }
}