<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Activity;
use App\Partner;
use App\News;
use App\Text;
use App\Album;
use App\Photo;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        App\User::create([
            'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'SuperAdmin',
            'email' => 'SuperAdmin@cronesteyn.test',
            'password' => bcrypt('wachtwoord'), //wachtwoord: wachtwoord
            'admin' => 'superAdmin',
        ]);
        App\User::create([
            'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'admin',
            'email' => 'admin@cronesteyn.test',
            'password' => bcrypt('wachtwoord'), //wachtwoord: wachtwoord
            'admin' => 'admin',
        ]);
        App\User::create([
            'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'contributor',
            'email' => 'contributor@cronesteyn.test',
            'password' => bcrypt('wachtwoord'), //wachtwoord: wachtwoord
            'admin' => 'contributor',
        ]);
        App\User::create([
            'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'test',
            'email' => 'test@cronesteyn.test',
            'password' => bcrypt('wachtwoord'), //wachtwoord: wachtwoord
            'admin' => 'test',
        ]);
        factory(App\User::class, 10)->create()->each(function (User $u) {
            for ($i = 0; $i < 10; $i++) {
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
