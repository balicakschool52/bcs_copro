<?php

namespace App\Filament\Resources\CodeReferals\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use App\Models\CodeReferal;
use Filament\Support\RawJs;
use Illuminate\Validation\Rules\Unique;

class CodeReferalsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required()
                    ->maxLength(30)
                    ->unique(
                        table: CodeReferal::class,
                        column: 'code',
                        ignorable: fn(?CodeReferal $record) => $record,
                        modifyRuleUsing: fn(Unique $rule) => $rule->whereNull('deleted_at'),
                    ),
                Select::make('discount_type')
                    ->options([1 => 'Percent', 2 => 'Fixed'])
                    ->required()
                    ->rules(['integer', 'in:1,2'])
                    ->native(false),
                TextInput::make('discount_value')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->reactive()
                    ->prefix(fn(Get $get) => $get('discount_type') == '2' ? 'Rp' : null)
                    ->suffix(fn(Get $get) => $get('discount_type') == '1' ? '%' : null)
                    ->rules([
                        fn(Get $get) => $get('discount_type') == '1' ? 'max:100' : null,
                    ])
                    ->mask(fn(Get $get) => $get('discount_type') == '2'
                        ? RawJs::make('$money($input)')
                        : null)
                    ->stripCharacters(',')
                    ->helperText('Percent max 100'),
                DatePicker::make('start_at')
                    ->native(false)
                    ->required(),
                DatePicker::make('end_at')
                    ->native(false)
                    ->required()
                    ->after('start_at'),
                TextInput::make('quota')
                    ->numeric()
                    ->minValue(0),
                TextInput::make('used_count')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->default(0),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
