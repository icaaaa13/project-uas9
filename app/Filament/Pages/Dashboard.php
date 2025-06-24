<?php
// Lokasi: app/Filament/Pages/Dashboard.php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Models\Armada;
use App\Models\Peminjaman;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.dashboard';

    public int $carCount = 0;
    public int $orderCount = 0;

    // Metode ini akan dijalankan untuk mengisi data
    public function mount(): void
    {
        $this->carCount = Armada::count();
        $this->orderCount = Peminjaman::count();
    }

    protected function getViewData(): array
    {
        return [
            'carCount' => $this->carCount,
            'orderCount' => $this->orderCount,
        ];
    }
}