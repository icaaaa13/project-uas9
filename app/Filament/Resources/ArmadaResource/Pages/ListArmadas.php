<?php

namespace App\Filament\Resources\ArmadaResource\Pages;

use App\Filament\Resources\ArmadaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArmadas extends ListRecords
{
    /**
     * Mengaitkan halaman ini dengan Resource utamanya.
     */
    protected static string $resource = ArmadaResource::class;

    /**
     * Mendefinisikan aksi yang tersedia di header halaman.
     * Secara default, ini adalah tombol untuk membuat record baru.
     *
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
