<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;
use Carbon\Carbon;





class AppointmentsCalendar extends LivewireCalendar
{
    //

    public function events() : Collection
    {
        return collect([
            [
                'id' => 0,
                'title' => 'SLHA Game Night',
                'description' => 'Meet at clubhouse for snacks and fun',
                'date' => Carbon::parse('third Thursday of July 2021'),
            ],
            [
                'id' => 1,
                'title' => 'SLHA Board Meeting',
                'description' => 'Monthly Board Meeting - open to members',
                'date' => Carbon::parse('second Thursday of July 2021'),
            ],
            [
                'id' => 2,
                'title' => 'Reminder: Bulky Item',
                'description' => 'First trash pickup day',
                'date' => Carbon::parse('first Friday of July 2021'),
            ],


            [
                'id' => 5,
                'title' => 'Reminder: Trash Day',
                'description' => '',
                'date' => Carbon::now()->endOfWeek(-2),
            ],
            [
                'id' => 5,
                'title' => 'Reminder: Trash Day',
                'description' => '',
                'date' => Carbon::now()->endOfWeek(-2)->addDays(7),
            ],
            [
                'id' => 5,
                'title' => 'Reminder: Trash Day',
                'description' => '',
                'date' => Carbon::now()->endOfWeek(-2)->addDays(14),
            ],
            [
                'id' => 5,
                'title' => 'Reminder: Trash Day',
                'description' => '',
                'date' => Carbon::now()->endOfWeek(-2)->addDays(21),
            ],

        ]);
    }
}
