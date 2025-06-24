<?php
// Lokasi: app/Filament/Pages/Dashboard.php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Models\Armada;      // Pastikan ini di-import
use App\Models\Peminjaman; // Pastikan ini di-import

class Dashboard extends BaseDashboard
{
    // Properti public ini akan otomatis tersedia di file view Blade
    public int $carCount = 0;
    public int $orderCount = 0;

    // Metode ini akan dijalankan untuk mengisi data
    public function mount(): void
    {
        $this->carCount = Armada::count();
        $this->orderCount = Peminjaman::count();
    }
}