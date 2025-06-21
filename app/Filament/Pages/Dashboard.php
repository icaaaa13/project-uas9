<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.dashboard';

    protected function getViewData(): array
    {
        return [
            'carCount' => \App\Models\Armada::count(),
            'orderCount' => \App\Models\Peminjaman::count(),
        ];
    }
}
