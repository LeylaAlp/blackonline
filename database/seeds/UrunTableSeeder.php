<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {

        Schema::disableForeignKeyConstraints();

        Urun::truncate();

        for ($i = 0; $i < 30; $i++) {
            $urun_adi=$faker->sentence(2);
            $urun=Urun::create([
               'urun_adi' => $urun_adi,
               'slug' => Str::slug($urun_adi),
               'aciklama' => $faker->sentence(30),
               'fiyati' => $faker->randomFloat(2,1,20)
            ]);

            $detay= $urun->detay()->create([
                'goster_slider' => rand(0,1),
                'goster_gunun_firsati' => rand(0,1),
                'goster_one_cikan' => rand(0,1),
                'goster_cok_satan' => rand(0,1),
                'goster_indirimli' => rand(0,1)

            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
