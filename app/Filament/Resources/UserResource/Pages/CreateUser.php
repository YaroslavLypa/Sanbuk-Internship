<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Filament\Resources\Form;
use App\Models\User;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function form(Form $form): Form
    {
        return $form->schema([
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
            Select::make('type')
                ->options(User::TYPE_LIST)
                ->required(),
            SpatieMediaLibraryFileUpload::make('avatar')->avatar()
                ->enableOpen()->enableDownload()
                ->imageResizeTargetWidth('300')
                ->imageResizeTargetHeight('300'),
            TextInput::make('password')
                ->minLength(5)
                ->maxLength(255)
                ->dehydrateStateUsing(fn($state) => Hash::make($state))
                ->password()
                ->required(),
        ]);
    }
}
