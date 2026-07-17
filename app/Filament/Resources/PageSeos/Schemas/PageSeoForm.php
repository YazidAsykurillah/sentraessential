<?php

namespace App\Filament\Resources\PageSeos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class PageSeoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Page Information')
                    ->schema([
                        TextInput::make('page_name')
                            ->required(),
                        TextInput::make('page_key')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->disabled(fn (string $operation): bool => $operation === 'edit'),
                        TextInput::make('slug')
                            ->required(),
                    ])
                    ->columns(3),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title')
                            ->maxLength(255),
                        Textarea::make('seo_description')
                            ->rows(4),
                    ]),

                Section::make('Open Graph')
                    ->schema([
                        FileUpload::make('og_image')
                            ->image()
                            ->disk('public')
                            ->directory('seo'),
                    ]),

                Section::make('Status')
                    ->schema([
                        Toggle::make('is_active')
                            ->default(true),
                    ]),
            ]);
    }
}
