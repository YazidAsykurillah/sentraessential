<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('indonesian_name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn (Set $set, ?string $state) =>
                        $set('slug', Str::slug($state ?? ''))
                    ),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('english_name')
                    ->required(),
                TextInput::make('botanical_name'),
                Textarea::make('short_description')
                    ->rows(3)
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->directory('products'),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('published')
                    ->required(),
                Toggle::make('is_featured'),
                TextInput::make('meta_title'),
                Textarea::make('meta_description')
                    ->rows(2)
                    ->columnSpanFull(),
            ]);
    }
}
