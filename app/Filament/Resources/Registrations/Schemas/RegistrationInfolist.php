<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;

class RegistrationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Full name'),

                        TextEntry::make('address')
                            ->columnSpanFull(),

                        Section::make('Student Information')
                            ->columnSpanFull()
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextEntry::make('place_of_birth')
                                            ->label('Place of birth')
                                            ->icon('heroicon-m-map-pin'),

                                        TextEntry::make('date_of_birth')
                                            ->label('Date of birth')
                                            ->date('d M Y')
                                            ->icon('heroicon-m-calendar'),
                                    ]),
                                Grid::make(2)
                                    ->schema([
                                        TextEntry::make('phone_number')
                                            ->label('Phone number'),

                                        TextEntry::make('email')
                                            ->label('Email address'),
                                    ]),

                                Grid::make(2)
                                    ->schema([
                                        TextEntry::make('previous_school')
                                            ->label('Previous school'),

                                        TextEntry::make('graduation_year')
                                            ->label('Graduation year'),
                                    ]),
                            ])
                            ->extraAttributes([
                                'class' => 'border rounded-lg p-4 bg-gray-50'
                            ]),
                        // Grid::make(2)
                        //     ->schema([
                        //         TextEntry::make('place_of_birth')
                        //             ->label('Place of birth')
                        //             ->icon('heroicon-m-map-pin'),

                        //         TextEntry::make('date_of_birth')
                        //             ->label('Date of birth')
                        //             ->date('d M Y')
                        //             ->icon('heroicon-m-calendar'),
                        //     ]),

                        // Grid::make(2)
                        //     ->schema([
                        //         TextEntry::make('phone_number')
                        //             ->label('Phone number'),

                        //         TextEntry::make('email')
                        //             ->label('Email address'),
                        //     ]),

                        // Grid::make(2)
                        //     ->schema([
                        //         TextEntry::make('previous_school')
                        //             ->label('Previous school'),

                        //         TextEntry::make('graduation_year')
                        //             ->label('Graduation year'),
                        //     ]),

                        TextEntry::make('studyProgram.name')
                            ->label('Study program')
                            ->badge(),

                        TextEntry::make('reference')
                            ->label('Reference'),

                        TextEntry::make('status')
                            ->label('Status')
                            ->formatStateUsing(fn($state) => $state === '1' ? 'Verified' : 'Process')
                            ->badge()
                            ->color(fn($state) => $state === '1' ? 'success' : 'warning'),
                    ]),

                Section::make('Payment')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('codeReferal.code')
                            ->label('Referral code')
                            ->badge()
                            ->color('success'),

                        TextEntry::make('registration_fee')
                            ->label('Registration fee')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format((float) $state, 0, ',', '.')),

                        TextEntry::make('discount_amount')
                            ->label('Discount')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format((float) $state, 0, ',', '.')),

                        TextEntry::make('final_amount')
                            ->label('Final amount')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format((float) $state, 0, ',', '.')),

                        ImageEntry::make('payment_proof')
                            ->label('Payment proof')
                            ->disk('public')
                            ->height(200)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
