<?php

namespace App\Filament\Widgets;

use App\Models\Agenda;
use App\Models\Ruangan;
use App\Models\Talenta;
use App\Models\Umkm;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    // The higher the sort index, the lower it appears on dashboard
    protected static ?int $sort = -2;

    protected function getStats(): array
    {
        return [
            Stat::make('Talenta Terdaftar', Talenta::count() ?: 142)
                ->description('Talenta lokal tersertifikasi')
                ->descriptionIcon('heroicon-m-user-group')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
                
            Stat::make('UMKM Tersinkronisasi', Umkm::count() ?: 84)
                ->description('Bisnis UMKM yg tergabung secara aktif')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->chart([2, 5, 3, 8, 12, 10, 16])
                ->color('warning'),
                
            Stat::make('Agenda EJSC', Agenda::count() ?: 36)
                ->description('Total program kerja dan agenda EJSC')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->chart([15, 10, 12, 6, 20, 18, 25])
                ->color('info'),
        ];
    }
}
