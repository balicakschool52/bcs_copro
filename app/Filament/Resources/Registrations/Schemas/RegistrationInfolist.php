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
                Section::make('Student Registration')
                    ->icon('heroicon-m-user')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Full Name'),

                        TextEntry::make('address')
                            ->columnSpanFull(),


                        TextEntry::make('studyProgram.name')
                            ->label('Study Program')
                            ->badge(),

                        TextEntry::make('reference')
                            ->label('Reference'),

                        TextEntry::make('status')
                            ->label('Status')
                            ->formatStateUsing(fn($state) => $state === '1' ? 'Verified' : 'Process')
                            ->badge()
                            ->color(fn($state) => $state === '1' ? 'success' : 'warning'),
                    ]),
                Section::make('Student Information')
                    ->icon('heroicon-m-identification')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('place_of_birth')
                            ->label('Place of birth')
                            ->icon('heroicon-m-map-pin'),
                        TextEntry::make('date_of_birth')
                            ->label('Date of birth')
                            ->date('d M Y')
                            ->icon('heroicon-m-calendar'),
                        TextEntry::make('phone_number')
                            ->label('Phone number')
                            ->icon('heroicon-m-phone'),
                        TextEntry::make('email')
                            ->label('Email address')
                            ->icon('heroicon-m-envelope'),
                        TextEntry::make('previous_school')
                            ->label('Previous school')
                            ->icon('heroicon-m-academic-cap'),

                        TextEntry::make('graduation_year')
                            ->label('Graduation year')
                            ->icon('heroicon-m-bookmark'),
                    ])
                    ->extraAttributes([
                        'class' => 'border rounded-lg p-4 bg-gray-50'
                    ]),

                Section::make('Payment Info')
                    ->icon('heroicon-m-credit-card')
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
