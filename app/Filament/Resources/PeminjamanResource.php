<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $modelLabel = 'Peminjaman';
    protected static ?string $pluralModelLabel = 'Peminjaman';

    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationGroup = 'Transaksi'; // Masuk ke grup Transaksi

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Peminjaman')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('Nama Peminjam'),

                        Forms\Components\Select::make('armada_id')
                            ->relationship('armada', 'merk')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('Armada yang Dipinjam'),

                        Forms\Components\DatePicker::make('tanggal_mulai')
                            ->required(),

                        Forms\Components\DatePicker::make('tanggal_kembali')
                            ->required()
                            ->after('tanggal_mulai'),

                        Forms\Components\TextInput::make('total_biaya')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),
                        
                        Forms\Components\Select::make('status')
                            ->options([
                                'dipesan' => 'Dipesan',
                                'berjalan' => 'Berjalan',
                                'selesai' => 'Selesai',
                                'dibatalkan' => 'Dibatalkan',
                            ])
                            ->required()
                            ->default('dipesan'),

                        Forms\Components\Textarea::make('catatan')
                            ->nullable()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Peminjam')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('armada.merk')
                    ->label('Armada')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kembali')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_biaya')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'dipesan',
                        'primary' => 'berjalan',
                        'success' => 'selesai',
                        'danger' => 'dibatalkan',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'dipesan' => 'Dipesan',
                        'berjalan' => 'Berjalan',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ])
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeminjamen::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}
