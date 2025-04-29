<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\IndexPageResource\Pages;
use App\Filament\Admin\Resources\IndexPageResource\RelationManagers;
use App\Models\IndexPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndexPageResource extends Resource
{
    protected static ?string $model = IndexPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                RichEditor::make('description'),
                TextInput::make('buttonText'),
                FileUpload::make('image')
                    ->image()
                    ->directory('index'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListIndexPages::route('/'),
            'create' => Pages\CreateIndexPage::route('/create'),
            'edit' => Pages\EditIndexPage::route('/{record}/edit'),
        ];
    }
}
