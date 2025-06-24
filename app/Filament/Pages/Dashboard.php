<?php
// Lokasi: app/Filament/Pages/Dashboard.php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Models\Armada;      // Pastikan ini di-import
use App\Models\Peminjaman; // Pastikan ini di-import

class Dashboard extends BaseDashboard
{
<<<<<<< HEAD
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
=======
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
>>>>>>> 9cbd7d17933ac6268f7b1ff6c5634faff3954376
