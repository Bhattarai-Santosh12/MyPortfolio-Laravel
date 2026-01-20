<?php

namespace App\Filament\Resources\Aboutuses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class AboutusesTable
{
    public static function configure(Table $table): Table
    {
        return $table
           ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->circular()
                    ->height(50),
                TextColumn::make('description')
                    ->html()
                    ->label('Description')
                    ->getStateUsing(function ($record) {
                        $words = explode(' ', strip_tags($record->description));
                        $firstWords = array_slice($words, 0, 10);
                        $text = implode(' ', $firstWords);
                        if (count($words) > 10) {
                            $text .= '...';
                        }
                        return $text;
                }),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
