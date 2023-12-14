<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;

/**
 */
class CommentSeeder extends Seeder
{
    use TruncateTable,
        DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('comments');
        Comment::factory(3)
            //->for(Post::factory(1), 'post')
            ->create();
        $this->enableForeignKeys();
    }
}
