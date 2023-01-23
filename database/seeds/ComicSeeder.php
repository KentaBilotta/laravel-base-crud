<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comicElement) {
            $comic = new Comic();
            $comic->title = $comicElement['title'];
            $comic->description = $comicElement['description'];
            $comic->thumb = $comicElement['thumb'];
            $comic->price = $comicElement['price'];
            $comic->series = $comicElement['series'];
            $comic->sale_date = $comicElement['sale_date'];
            $comic->type = $comicElement['type'];

            $comic->save();
        }
    }
}
