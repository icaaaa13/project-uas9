<?php

namespace App\Filament\Resources\ArmadaResource\Pages;

use App\Filament\Resources\ArmadaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArmadas extends EditRecord
{
    /**
     * Mengaitkan halaman ini dengan Resource utamanya.
     */
    protected static string $resource = ArmadaResource::class;

    /**
     * Mendefinisikan aksi yang tersedia di header halaman.
     * Di halaman edit, biasanya ada aksi untuk menghapus record.
     *
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
