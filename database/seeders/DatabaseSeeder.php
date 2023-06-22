<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //to run a migration use migrate, then rollback one, then seed

        // \App\Models\User::factory(10)->create();
        \App\Models\Mahasiswa::factory(20)->create();
        $this->call([
            PostSeeder::class,
        ]);
        // $this->call([UserSeeder::class,]);
        Post::factory(100)->create();

        // langsung seeding userbaru, kelas seeder
        $this->call([UserBaruSeeder::class]);
        $this->call([KelasSeeder::class]);
        $this->call([UpdateMahasiswaSeeder::class]);
    }
}
