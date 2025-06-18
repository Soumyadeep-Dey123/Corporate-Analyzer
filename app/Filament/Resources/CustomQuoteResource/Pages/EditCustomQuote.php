<?php

namespace App\Filament\Resources\CustomQuoteResource\Pages;

use App\Filament\Resources\CustomQuoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomQuote extends EditRecord
{
    protected static string $resource = CustomQuoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
