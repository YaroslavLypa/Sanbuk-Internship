<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function form(Form $form): Form
    {
        return $form->schema([
            SpatieMediaLibraryFileUpload::make('avatar')->avatar()
                ->enableOpen()->enableDownload()
                ->imageResizeTargetWidth('300')
                ->imageResizeTargetHeight('300'),
            TextInput::make('first_name')
                ->minLength(2)
                ->maxLength(255)
                ->required(),
            TextInput::make('last_name')
                ->minLength(2)
                ->maxLength(255)
                ->required(),
            TextInput::make('email')
                ->minLength(5)
                ->maxLength(255)
                ->unique(ignorable: fn($record) => $record)
                ->required(),
            Select::make('status')
                ->options(User::STATUS_LIST)
                ->required(),
            TextInput::make('password')
                ->minLength(8)
                ->maxLength(20)
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->required()
        ]);
    }
}
