<?php

namespace App\Filament\Admin\Resources\Events\Tables;

use App\Models\Event;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->circular()
                    ->size(50)
                    ->defaultImageUrl(url('/images/verve-logo.png')),
                
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->wrap(),
                
                TextColumn::make('location')
                    ->searchable()
                    ->icon('heroicon-o-map-pin')
                    ->color('gray'),
                
                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->date('M d, Y')
                    ->sortable(),
                
                TextColumn::make('end_date')
                    ->label('End Date')
                    ->date('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('expected_attendees')
                    ->label('Attendees')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                
                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-star')
                    ->trueColor('warning')
                    ->falseColor('gray'),
                
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                
                TextColumn::make('registrations_count')
                    ->counts('registrations')
                    ->label('Registrations')
                    ->badge()
                    ->color('success'),
            ])
            ->filters([
                TernaryFilter::make('is_featured')
                    ->label('Featured Events')
                    ->placeholder('All events')
                    ->trueLabel('Featured only')
                    ->falseLabel('Not featured'),
                
                TernaryFilter::make('is_active')
                    ->label('Active Events')
                    ->placeholder('All events')
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only'),
                
                SelectFilter::make('industries')
                    ->relationship('industries', 'name')
                    ->multiple()
                    ->preload(),
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('view')
                    ->label('View on Site')
                    ->url(fn (Event $record): string => route('events.show', $record->slug))
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-eye')
                    ->color('info'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('start_date', 'desc')
            ->poll('30s');
    }
}