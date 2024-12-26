<?php

namespace Tapp\FilamentSurvey\Resources\SectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Tapp\FilamentSurvey\Resources\SectionResource;

class CreateSection extends CreateRecord
{

    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
