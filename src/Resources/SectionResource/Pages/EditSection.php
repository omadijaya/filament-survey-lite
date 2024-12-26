<?php

namespace Tapp\FilamentSurvey\Resources\SectionResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Tapp\FilamentSurvey\Resources\SectionResource;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
