<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Comment :: factory()->count(30)->create();
      //  DB::table('comments')->insert( [
      //      'Título'=> 'Comentario uno',
      //     'comment_text' => 'Comentario texto uno'
      //]);
    }
}
