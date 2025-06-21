<?php

namespace App\Filament\Resources\PembayaranResource\Pages;

use App\Filament\Resources\PembayaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

// Pastikan nama class di sini adalah EditPembayaran
class EditPembayaran extends EditRecord
{
    protected static string $resource = PembayaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
