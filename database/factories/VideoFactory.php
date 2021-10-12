<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dic = ['uploads/oIcFgzgZ-1920.jpg','uploads/Untitled-2.jpg','uploads/Frame_01.png'];
        return [
            'name'=>$this->faker->name(),
            'thumbnail'=>$dic[random_int(0,2)],
            'src'=>"https://cdn.jwplayer.com/videos/oIcFgzgZ-Z6GU38TD.mp4",
            'category_id'=>random_int(1,4)
        ];
    }
}
