<?php

use Illuminate\Database\Seeder;
use App\Entities\Ticket;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tickets =
        [
            [
                'title'     => 'Title 01',
                'contact'   => 'Contact 01',
                'status'    => 'Status 01',
                'issue'     => 'Issue 01'
            ],
            [
                'title'     => 'Title 02',
                'contact'   => 'Contact 02',
                'status'    => 'Status 02',
                'issue'     => 'Issue 02'
            ],
            [
                'title'     => 'Title 03',
                'contact'   => 'Contact 03',
                'status'    => 'Status 03',
                'issue'     => 'Issue 03'
            ]
        ];
    
        foreach ($tickets as $ticket)
        {
            Ticket::create($ticket);
        }
    }
}