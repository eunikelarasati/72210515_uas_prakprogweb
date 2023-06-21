<?php

use Illuminate\Database\Seeder;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_artikel')->insert ([
            'article_title'=>'Jadwal MAsuk UKDW',
            'article_date'=>'2023-08-19',
            'article_text'=>'UKDW masuk liburan akhir semester di UKDW mulai tanggal 19 Agustus 2023'
        ]);
            
    }
}
