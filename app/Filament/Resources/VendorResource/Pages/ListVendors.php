<?php

namespace App\Filament\Resources\VendorResource\Pages;

use App\Filament\Resources\VendorResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class ListVendors extends ListRecords
{
    protected static string $resource = VendorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return User::query()->where('type', User::TYPE_VENDOR);
    }

    protected function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                SpatieMediaLibraryImageColumn::make('avatar')->circular(),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
                BadgeColumn::make('status')
                    ->enum(User::STATUS_LIST)
                    ->colors([
                        'danger' => User::STATUS_INACTIVE,
                        'success' => User::STATUS_ACTIVE,
                    ]),
                BadgeColumn::make('type')
                    ->enum(User::TYPE_LIST)
                    ->colors([
                        'success' => User::TYPE_VENDOR,
                    ]),
            ])
            ->filters([
                //
            ]);
    }
}
