<?php

namespace App\Filament\Resources\JenisKendaraanResource\Pages;

use App\Filament\Resources\JenisKendaraanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJenisKendaraan extends CreateRecord
{
    protected static string $resource = JenisKendaraanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
