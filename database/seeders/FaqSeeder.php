<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
        [
            'question' => '1.Hoe print je een document vanaf je laptop?',
            'answer' => 'Verbind je laptop met HZ Wifi netwerk scan dan je pas bij printer en dan kan je printen.',
        ],
            [
            'question' => '2.Hoe scan je een document en verstuur je het naar je laptop?',
            'answer' => 'Je doet het zelfde als vorige vraag of mailed het door naar je zelf.',
                ],
        [
            'question' => '3.Wat moet je doen wanneer je ziek bent/corona symptomen heb.',
            'answer' => 'Beste om thuis te blijven als het erger word laat je testen.',
        ],
        [
            'question' => '4.Hoe kan je een project ruimte boeken?',
            'answer' => 'Je moet naar het HZ Portal gaan en daar kan je een ruimte boeken.',
        ],
        [
            'question' => '5.Wat zijn de instructies als je bij de HZ wil parkeren?',
            'answer' => 'Je moet langs de balie om te vragen en daarna kan je met je HZ pas het terrein op.',
        ]
        ]);
    }
}
