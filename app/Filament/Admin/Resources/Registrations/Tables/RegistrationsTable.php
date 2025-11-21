<?php

namespace App\Filament\Admin\Resources\Registrations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class RegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event.name')
                    ->label('Event')
                    ->sortable()
                    ->searchable()
                    ->weight('bold')
                    ->wrap(),
                
                TextColumn::make('name')
                    ->label('Full Name')
                    ->searchable()
                    ->icon('heroicon-o-user'),
                
                TextColumn::make('email')
                    ->searchable()
                    ->icon('heroicon-o-envelope')
                    ->copyable()
                    ->copyMessage('Email copied!')
                    ->copyMessageDuration(1500),
                
                TextColumn::make('company')
                    ->searchable()
                    ->toggleable(),
                
                TextColumn::make('job_title')
                    ->label('Job Title')
                    ->searchable()
                    ->toggleable()
                    ->wrap(),
                
                TextColumn::make('registration_type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'delegate' => 'gray',
                        'sponsor' => 'success',
                        'speaker' => 'info',
                        'exhibitor' => 'warning',
                    }),
                
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    }),
                
                TextColumn::make('created_at')
                    ->label('Registered')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('event')
                    ->relationship('event', 'name')
                    ->preload()
                    ->searchable(),
                
                SelectFilter::make('registration_type')
                    ->label('Type')
                    ->options([
                        'delegate' => 'Delegate',
                        'sponsor' => 'Sponsor',
                        'speaker' => 'Speaker',
                        'exhibitor' => 'Exhibitor',
                    ]),
                
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
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
            ->defaultSort('created_at', 'desc');
    }
}