# Filament Laravel Survey

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tapp/filament-survey.svg?style=flat-square)](https://packagist.org/packages/tapp/filament-survey)
![Code Style Action Status - Pint](https://github.com/TappNetwork/filament-survey/actions/workflows/pint.yml/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tapp/filament-survey.svg?style=flat-square)](https://packagist.org/packages/tapp/filament-survey)

A Filament plugin for [Laravel Survey](https://github.com/matt-daneshvar/laravel-survey) package.

This package provides Filament resources for [Laravel Survey](https://github.com/matt-daneshvar/laravel-survey).

## Requirements
- PHP 8.1+
- Laravel 10.0+
- [Filament 3.0+](https://github.com/laravel-filament/filament)

## Dependencies
- [maatwebsite/excel](https://github.com/SpartnerNL/Laravel-Excel)
- [matt-daneshvar/laravel-survey](https://github.com/matt-daneshvar/laravel-survey)
- [spatie/eloquent-sortable](https://github.com/spatie/eloquent-sortable)

## Installation

### Installing the required package (Laravel Survey)


```bash
composer require matt-daneshvar/laravel-survey
```

Install it using Composer

```bash
composer update
```

Publish the package migrations

```bash
php artisan vendor:publish --provider="MattDaneshvar\Survey\SurveyServiceProvider" --tag="migrations"
```

Run the migrations

```bash
php artisan migrate
```

### Installing the Filament Survey plugin

Install the plugin via Composer:

```bash
composer require tapp/filament-survey:"^3.0"
```

> **Note** 
> For **Filament 2.x** check the **[2.x](https://github.com//TappNetwork/filament-survey/tree/2.x)** branch

#### Optional: Publish the plugin's views, translations, and config

You can publish the view file with:

```bash
php artisan vendor:publish --tag="filament-survey-views"
```

You can publish the translations files with:

```bash
php artisan vendor:publish --tag="filament-survey-translations"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-survey-config"
```

### Adding the plugin to a panel

Add this plugin to a panel on `plugins()` method (e.g. in `app/Providers/Filament/AdminPanelProvider.php`).

```php
use Tapp\FilamentSurvey\FilamentSurveyPlugin;
 
public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            FilamentSurveyPlugin::make(),
            //...
        ]);
}
```

That's it! Now the surveys, answers, and entries resources will be displayed in the left sidebar in your Filament admin panel. To enable dedicated resources for Sections, and Questions, publish the config and add QuestionResource and SectionResource to the 'resources' array.
