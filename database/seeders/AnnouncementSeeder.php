<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('announcements')->insert([
            
            'company' => 'PHILIPS',
            'role'=>'Boss',
            'description'=>'muito bem pago',
            'gallery'=>'https://marcas-logos.net/wp-content/uploads/2020/03/Philips-Logo-1-600x375.png'
            

            
        ]);
    }
}