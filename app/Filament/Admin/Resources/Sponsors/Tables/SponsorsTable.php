<?php

namespace App\Filament\Admin\Resources\Sponsors\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SponsorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->size(80)
                    ->extraImgAttributes(['loading' => 'lazy']),
                
                TextColumn::make('name')
                    ->label('Sponsor Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                
                TextColumn::make('event.name')
                    ->label('Event')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                
                TextColumn::make('tier')
                    ->label('Tier')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'platinum' => 'gray',
                        'gold' => 'warning',
                        'silver' => 'info',
                        'bronze' => 'danger',
                        'partner' => 'success',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'platinum' => 'Platinum',
                        'gold' => 'Gold',
                        'silver' => 'Silver',
                        'bronze' => 'Bronze',
                        'partner' => 'Partner',
                    }),
                
                TextColumn::make('website')
                    ->label('Website')
                    ->url(fn ($record) => $record->website)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-link')
                    ->toggleable(),
                
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
                
                SelectFilter::make('tier')
                    ->label('Sponsorship Tier')
                    ->options([
                        'platinum' => 'Platinum',
                        'gold' => 'Gold',
                        'silver' => 'Silver',
                        'bronze' => 'Bronze',
                        'partner' => 'Partner',
                    ]),
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