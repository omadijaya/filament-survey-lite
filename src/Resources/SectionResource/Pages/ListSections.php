<?php

namespace Tapp\FilamentSurvey\Resources\SectionResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Tapp\FilamentSurvey\Resources\SectionResource;

class ListSections extends ListRecords
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')
                ->url(SectionResource::getUrl('create')),
        ];
    }
}
