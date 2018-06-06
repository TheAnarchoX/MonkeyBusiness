<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\Photo;
use Faker\Generator as Faker;
class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker();
        $albums = Album::all();


        $sync = function (Album $album, $id) {
            $album->photos()->syncWithoutDetaching($id);
        };

        foreach ($albums as $album) {
            if ($faker->boolean = true) {
                for ($i = 0; $i < mt_rand(1, Photo::all()->count()); $i++) {
                    $id = mt_rand(1, Photo::all()->count());
                    $sync($album, $id);
                }
            }
        }
    }
}
