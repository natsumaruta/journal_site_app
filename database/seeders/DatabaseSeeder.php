<?php

namespace Database\Seeders;

  // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ArticleSeeder（シーダークラス）の呼び出し
        if (config('app.env') == 'local') {
            $this->call(ArticleSeeder::class);
        }
    }
}
