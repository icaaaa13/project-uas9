<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembayaranResource\Pages;
use App\Models\Pembayaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $modelLabel = 'Pembayaran';
    protected static ?string $pluralModelLabel = 'Pembayaran';

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('Pelanggan'),

                        Forms\Components\Select::make('armada_id')
                            ->relationship('armada', 'merk')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('Armada'),

                        Forms\Components\DatePicker::make('tanggal_mulai')
                            ->required(),

                        Forms\Components\DatePicker::make('tanggal_selesai')
                            ->required(),

                        Forms\Components\TextInput::make('total_harga')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),

                        Forms\Components\Select::make('metode_pembayaran')
                            ->options([
                                'transfer_bank' => 'Transfer Bank',
                                'kartu_kredit' => 'Kartu Kredit',
                                'e_wallet' => 'E-Wallet',
                                'tunai' => 'Tunai',
                            ])
                            ->required(),

                        // Pastikan komponen FileUpload sudah benar
                        Forms\Components\FileUpload::make('bukti_pembayaran')
                            ->directory('bukti-pembayaran') // Folder penyimpanan
                            ->image()
                            ->imageEditor() // Tambahkan editor gambar (opsional)
                            ->label('Upload Bukti Pembayaran'),

                        Forms\Components\Select::make('status_pembayaran')
                            ->options([
                                'pending' => 'Pending',
                                'lunas' => 'Lunas',
                                'dibatalkan' => 'Dibatalkan',
                            ])
                            ->required()
                            ->default('pending'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pelanggan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('armada.merk')
                    ->label('Armada')
                    ->searchable(),
                
                // --- PERBAIKAN KOLOM GAMBAR ---
                Tables\Columns\ImageColumn::make('bukti_pembayaran')
                    ->label('Bukti Bayar')
                    ->circular() // Membuat gambar menjadi lingkaran
                    ->toggleable(),

                Tables\Columns\TextColumn::make('total_harga')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('status_pembayaran')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'lunas',
                        'danger' => 'dibatalkan',
                    ]),
            ])
            ->filters([
                // ... filters ...
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }
}
