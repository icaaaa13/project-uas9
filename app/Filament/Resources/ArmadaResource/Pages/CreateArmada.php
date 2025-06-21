<?php

namespace App\Filament\Resources\ArmadaResource\Pages;

use App\Filament\Resources\ArmadaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArmadas extends CreateRecord
{
    /**
     * Mengaitkan halaman ini dengan Resource utamanya.
     */
    protected static string $resource = ArmadaResource::class;

    /**
     * (Opsional) Mengarahkan pengguna ke halaman daftar (index)
     * setelah berhasil membuat record baru. Ini adalah perilaku
     * yang lebih baik daripada tetap di halaman pembuatan.
     *
     * @return string
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
