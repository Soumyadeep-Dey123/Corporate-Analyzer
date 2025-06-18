<?php

namespace App\Filament\Resources\DemoSurveysResource\Pages;

use App\Filament\Resources\DemoSurveysResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemoSurveys extends EditRecord
{
    protected static string $resource = DemoSurveysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
