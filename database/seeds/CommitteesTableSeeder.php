<?php

use Illuminate\Database\Seeder;


class CommitteesTableSeeder extends Seeder
{

    public function run()
    {
        $committees = ['Linux', 'Projects', 'Web', 'CCC', 'Artwork', 'English Heroes', 'Blender', 'HR', 'PR', 'FR', 'LR'];
        foreach (range(0, count($committees) - 1) as $index) {
            \App\Committee::create([
                'name' => $committees[$index],
            ]);
        }
    }
}
