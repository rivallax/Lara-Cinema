<?php



namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'name' => 'The Batman',
            'genre_id' => 1,
            'image' => 'the-batman.jpeg',
            'minutes' => 148,
            'director' => 'Jon Watts',
            'studio_name' => 'Warner Bros. Pictures',
            'studio_capacity' => 96
        ]);

        Movie::create([
            'name' => 'The Conjuring',
            'genre_id' => 4,
            'image' => 'konjurig.jpg',
            'minutes' => 124,
            'director' => 'James Wan',
            'studio_name' => 'Awesome Studio',
            'studio_capacity' => 72
        ]);

        Movie::create([
            'name' => 'Kung Fu Panda',
            'genre_id' => 2,
            'image' => 'kungfu-panda.jpg',
            'minutes' => 132,
            'director' => 'Bong Joon Ho',
            'studio_name' => 'picturology studio',
            'studio_capacity' => 96
        ]);

        Movie::create([
            'name' => 'Fast And Furious',
            'genre_id' => 1,
            'image' => 'fast-and-furious.jpg',
            'minutes' => 178,
            'director' => 'Todd Phillips',
            'studio_name' => 'rewind Studio',
            'studio_capacity' => 96
        ]);

        Movie::create([
            'name' => 'Transformers',
            'genre_id' => 1,
            'image' => 'transformers.jpg',
            'minutes' => 187,
            'director' => 'Steven Soderbergh',
            'studio_name' => 'Lily',
            'studio_capacity' => 84
        ]);

        Movie::create([
            'name' => 'Godzilla vs. Kong',
            'genre_id' => 1,
            'image' => 'godzilla.webp',
            'minutes' => 160,
            'director' => 'Steven Caple Jr',
            'studio_name' => 'Langit Studio',
            'studio_capacity' => 84
        ]);

        Genre::create([
            "name" => "Action"
        ]);

        Genre::create([
            "name" => "Drama"
        ]);

        Genre::create([
            "name" => "Horror"
        ]);

        Genre::create([
            "name" => "Romance"
        ]);

        Genre::create([
            "name" => "Comedy"
        ]);

        Genre::create([
            "name" => "Thriller"
        ]);
    }
}
