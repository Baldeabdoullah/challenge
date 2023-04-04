<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Challenge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Challenge::create(
            [
                'title' => 'html',
                'subtitle' => 'Challenge1',
                'content' => 'developper un tableau en utilisant le html',
                'tags' => 'html'
            ]
        );

        Challenge::create([
            'title' => 'css',
            'subtitle' => 'challenge2',
            'content' => 'developper un site vitrine en utilisant le html et le css',
            'tags' => 'css'

        ]);

        Challenge::create([
            'title' => 'javascript',
            'subtitle' => 'challenge3',
            'content' => 'developper un carousel en utilisant lejavascript',
            'tags' => 'javascript'

        ]);

        Challenge::create([
            'title' => 'php',
            'subtitle' => 'challenge3',
            'content' => 'developper un site e-cmmerce en utilisant le html et le css',
            'tags' => 'php'

        ]);

        Challenge::create([
            'title' => 'nodejs',
            'subtitle' => 'challenge2',
            'content' => 'developper une application crud en utilisant nodejs',
            'tags' => 'nodejs'

        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
