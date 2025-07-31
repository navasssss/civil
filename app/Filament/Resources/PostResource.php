<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->fileAttachmentsDirectory('posts')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail_url')
                    ->label('Image')
                    ->columnSpanFull()
                    ->required(),
                // Is_published
                Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\FileUpload::make('image_url')
                            ->label('Image')
                            ->required()
                            ->columnSpanFull()
                            ->image(),
                        Forms\Components\TextArea::make('about')
                            // ->maxLength(255)
                            // ->cols(10)
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->native(false)
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'term')
                    ->createOptionForm([
                        TextInput::make('term')
                            ->label('Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true) // Trigger only on blur
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('scheme', Str::slug($state));
                            }),

                        TextInput::make('scheme')
                            ->label('Slug')
                            ->required()
                            ->readOnly()
                            ->maxLength(255),
                    ])
                    ->native(false)
                    ->searchable()
                    ->preload(),
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Post')
                    ->inline(false)
                    ->default(true)
                    ->required(),
                Forms\Components\Toggle::make('slide')
                    ->label('Featured')
                    ->inline(false)
                    ->default(false)
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->default(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('thumbnail_url')
                    ->label('Thumbnail'),
                Tables\Columns\ToggleColumn::make('is_published'),
                Tables\Columns\ToggleColumn::make('slide'),
                Tables\Columns\TextColumn::make('author.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.term')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
