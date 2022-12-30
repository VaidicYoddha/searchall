<?php

namespace App\Filament\Resources\IfscResource\Pages;

use App\Filament\Resources\IfscResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageIfscs extends ManageRecords
{
    protected static string $resource = IfscResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
