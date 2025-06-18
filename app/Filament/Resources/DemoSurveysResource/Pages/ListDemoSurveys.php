<?php

namespace App\Filament\Resources\DemoSurveysResource\Pages;

use App\Filament\Resources\DemoSurveysResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemoSurveys extends ListRecords
{
    protected static string $resource = DemoSurveysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
