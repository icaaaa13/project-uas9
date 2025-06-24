<x-filament-panels::page>
<div class="grid grid-cols-3 gap-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-sm text-gray-500">Jumlah Mobil</p>
            <p class="text-3xl font-bold">{{ $carCount }}</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-sm text-gray-500">Jumlah Peminjaman</p>
            <p class="text-3xl font-bold">{{ $orderCount }}</p>
        </div>

    </div>
</x-filament-panels::page>
