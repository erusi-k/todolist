<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\todolist;

class TodoListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        todolist::factory()->count(3)->create();
    }
}
