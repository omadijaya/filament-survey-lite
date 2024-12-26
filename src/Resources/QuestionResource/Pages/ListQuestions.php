<?php

namespace Tapp\FilamentSurvey\Resources\QuestionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Tapp\FilamentSurvey\Resources\QuestionResource;

class ListQuestions extends ListRecords
{

    protected static string $resource = QuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
