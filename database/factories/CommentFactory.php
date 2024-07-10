<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     * @var string
     * @return array<string, mixed>
     */
    
    protected $model = Comment::class;



    public function definition(): array
    {
        return [
            'Título' => $this ->faker->word,
            'comment_text' => $this ->faker->text(500),
        ];
    }
}
