<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CmsStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Posts', Post::count())
                ->description('Total posts'),

            Stat::make('Categories', Category::count())
                ->description('Total categories'),

            Stat::make('Tags', Tag::count())
                ->description('Total tags'),

            Stat::make('Messages', ContactMessage::count())
                ->description('Contact messages'),
        ];
    }
}