<?php

namespace App\Filament\Resources\PageSeos;

use App\Filament\Resources\PageSeos\Pages\CreatePageSeo;
use App\Filament\Resources\PageSeos\Pages\EditPageSeo;
use App\Filament\Resources\PageSeos\Pages\ListPageSeos;
use App\Filament\Resources\PageSeos\Schemas\PageSeoForm;
use App\Filament\Resources\PageSeos\Tables\PageSeosTable;
use App\Models\PageSeo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageSeoResource extends Resource
{
    protected static ?string $model = PageSeo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|\UnitEnum|null $navigationGroup = 'Website';
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return PageSeoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageSeosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPageSeos::route('/'),
            'create' => CreatePageSeo::route('/create'),
            'edit' => EditPageSeo::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->can('view page seo');
    }

    public static function canCreate(): bool
    {
        return auth()->user()->can('create page seo');
    }

    public static function canEdit($record): bool
    {
        return auth()->user()->can('edit page seo');
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->can('delete page seo');
    }

}
