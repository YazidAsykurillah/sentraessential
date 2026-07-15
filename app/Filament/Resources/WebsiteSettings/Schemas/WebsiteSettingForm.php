<?php

namespace App\Filament\Resources\WebsiteSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;


class WebsiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('General')
                    ->schema([

                        TextInput::make('site_name')
                            ->required(),

                        TextInput::make('site_tagline'),

                        TextInput::make('company_name'),

                    ])
                    ->columns(2),

                Section::make('Branding')
                    ->schema([

                        FileUpload::make('logo')
                            ->image()
                            ->disk('public')
                            ->directory('settings'),

                        FileUpload::make('favicon')
                            ->image()
                            ->disk('public')
                            ->directory('settings'),

                    ])
                    ->columns(2),

                Section::make('Contact')
                    ->schema([

                        TextInput::make('email')
                            ->email(),

                        TextInput::make('phone')
                            ->tel(),

                        TextInput::make('whatsapp'),

                        Textarea::make('address')
                            ->columnSpanFull(),

                        TextInput::make('google_maps_url')
                            ->url(),

                    ])
                    ->columns(2),

                Section::make('Social Media')
                    ->schema([

                        TextInput::make('facebook_url')
                            ->url(),

                        TextInput::make('instagram_url')
                            ->url(),

                        TextInput::make('linkedin_url')
                            ->url(),

                        TextInput::make('youtube_url')
                            ->url(),

                    ])
                    ->columns(2),

                Section::make('SEO')
                    ->schema([

                        TextInput::make('default_seo_title'),

                        Textarea::make('default_seo_description')
                            ->columnSpanFull(),

                    ])
                    ->columns(1),

                Section::make('System')
                    ->schema([

                        Toggle::make('maintenance_mode'),

                    ]),
            ]);
    }
}
