<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Activity;
use App\Partner;
use App\News;
use App\Text;
use App\Album;
use App\Photo;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create()->each(function (User $u) {
            for($i = 0; $i < 10; $i++) {
                $u->activities()->save(factory(Activity::class)->create());
                $u->partners()->save(factory(Partner::class)->create());
                $u->news()->save(factory(News::class)->create());
                $u->texts()->save(factory(Text::class)->create());
                $u->albums()->save(factory(Album::class)->create());
                $u->photos()->save(factory(Photo::class)->create());
            }

        });
    }
}
