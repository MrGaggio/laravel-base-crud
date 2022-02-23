<?php

//il faker si utilizza in sostituzione dei dati reali quando questi ancora non sono disponibili.
use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //usa Faker e salva i dati in $fakers
    public function run(Faker $faker)
    {

        // a ogni ciclo crea i dati fake per 25 volte
        for ($i=0; $i < 25; $i++) { 
            $comic = new Comic();
            $comic->author = $faker->word(2);
            $comic->publisher = $faker->word(2);
            $comic->page_number = $faker->randomFloat(1, 59, 200);
            $comic->relase = 'monthly';
            $comic->price = $faker->randomFloat(1, 3, 10);
            $comic->photo = $faker->imageUrl(640, 480, 'comics', true);

            $comic->save();

            //dopo andiamo sul file DatabaseSeeder.php e passiamo $this->call(ComicSeeder::class);. Passo successivo sul terminale: php artisan db:seed
        }
    }
}
