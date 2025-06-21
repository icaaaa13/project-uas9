<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArmadaResource\Pages;
use App\Models\Armada;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArmadaResource extends Resource
{
    protected static ?string $model = Armada::class;

    // --- PERUBAHAN DI SINI ---
    // Menentukan nama yang akan tampil di navigasi dan judul halaman.
    protected static ?string $modelLabel = 'Armada';
    protected static ?string $pluralModelLabel = 'Armada';
    // -------------------------

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    

    protected static ?string $recordTitleAttribute = 'merk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('jenis_kendaraan_id')
                            ->relationship('jenisKendaraan', 'nama')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('Jenis Kendaraan'),

                        Forms\Components\TextInput::make('merk')
                            ->required()
                            ->maxLength(30),

                        Forms\Components\TextInput::make('nopol')
                            ->required()
                            ->label('No. Polisi')
                            ->maxLength(20),

                        Forms\Components\TextInput::make('kapasitas_kursi')
                            ->required()
                            ->numeric()
                            ->label('Kapasitas Kursi'),

                        Forms\Components\TextInput::make('thn_beli')
                            ->required()
                            ->numeric()
                            ->label('Tahun Pembelian')
                            ->minValue(1980)
                            ->maxValue(date('Y')),

                        Forms\Components\TextInput::make('rating')
                            ->required()
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->helperText('Rating dari 1 sampai 5'),
                        
                        Forms\Components\Textarea::make('deskripsi')
                            ->required()
                            ->maxLength(200)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('merk')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('jenisKendaraan.nama')
                    ->label('Jenis Kendaraan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nopol')
                    ->label('No. Polisi')
                    ->searchable(),
                
                // Other columns...
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArmadas::route('/'),
            'create' => Pages\CreateArmadas::route('/create'),
            'edit' => Pages\EditArmadas::route('/{record}/edit'),
        ];
    }
}
