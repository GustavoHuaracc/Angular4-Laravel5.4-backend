<?php

use Illuminate\Database\Seeder;
use App\Image;
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imageLinks=array(
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        	"http://linhd.es/wp-content/uploads/2014/03/inicio2-300x200",
        );
        foreach ($imageLinks as $imageLink) {
        	Image::create([
        		'title'=>$faker->text(80),
        		'description'=>$content=$faker->paragraph(18),
        		'imageLink'=>$imageLink.".jpg",
        		'user_id'=>$faker->numberBetween($min=1,$max=5),
        	]);
        }
    }
}
