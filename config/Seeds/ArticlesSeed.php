<?php
declare(strict_types=1);

// config/Seeds/ArticlesSeed.php
use Migrations\BaseSeed;

class ArticlesSeed extends BaseSeed
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'First Post',
                'slug' => 'first-post',
                'body' => 'This is my first blog post!',
                'published' => true,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Second Post',
                'slug' => 'second-post',
                'body' => 'Another great article.',
                'published' => true,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}