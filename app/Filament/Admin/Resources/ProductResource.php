<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        TextInput::make('name')
                            ->label('Название товара')
                            ->columnSpanFull(),
                        TextInput::make('description')
                            ->label('Описание товара'),
                        TextInput::make('price')
                            ->label('Цена товара')
                            ->integer(),
                        FileUpload::make('image')
                            ->label('Загрузка изображений')
                            ->directory('/product')
                            ->image(),
                        Fieldset::make('Опции')->schema([
                            Toggle::make('is_active')
                                ->label('Активный товар')
                                ->helperText('Активные товары отображаются на сайте'),
                            Toggle::make('is_new')
                                ->label('Новинка')
                        ]),
                    ])->columnSpan(2),
                    Section::make()->schema([
                        Select::make('category_id')
                        ->preload()
                        ->searchable()
                        ->label('Категория')
                        ->relationship('category', 'name')
                        ->required(),
                    ])->columnSpan(1)
                ])->columns(3)->columnSpanFull()
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
