<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesResource\Pages;
use App\Filament\Resources\ArticlesResource\RelationManagers;
use App\Models\Articles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticlesResource extends Resource
{
    protected static ?string $model = Articles::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $label = 'Artikel';
    protected static ?string $pluralLabel = 'Artikel';
    protected static ?int $navigationSort = 2; // Urutan menu


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Kategori
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Pilih Kategori')
                    ->columnSpan(2), // Grid 1 kolom untuk mobile, bisa berubah sesuai kebutuhan

                // Judul Artikel
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive() // Memastikan input diperbarui secara real-time
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', \Illuminate\Support\Str::slug($state))
                    )
                    ->columnSpan(1), // Grid 1 kolom untuk mobile

                // Slug Artikel
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->readOnly() // Opsional: Membuat slug tidak bisa diedit secara manual
                    ->hint('Slug akan dibuat secara otomatis berdasarkan nama.')
                    ->columnSpan(1), // Grid 1 kolom untuk mobile

                // Konten Artikel
                Forms\Components\RichEditor::make('content')
                    ->label('Konten')
                    ->required()
                    ->columnSpan('full') // Lebar penuh pada desktop
                    ->disableToolbarButtons(['attachFiles']) // Menonaktifkan upload gambar
                    ->extraAttributes([
                        'class' => 'w-full', // Memastikan lebar penuh pada mobile
                    ]),

                // Gambar Artikel
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('uploads/images')
                    ->columnSpan(2), // Grid 2 kolom untuk desktop, 1 kolom untuk mobile

                // Penulis Artikel
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1), // Grid 1 kolom untuk mobile
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('category.name')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('author')->searchable(),
            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('category')
                ->relationship('category', 'name') // Menggunakan relasi kategori
                ->label('Filter Kategori'),

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticles::route('/create'),
            'view' => Pages\ViewArticles::route('/{record}'),
            'edit' => Pages\EditArticles::route('/{record}/edit'),
        ];
    }
}
