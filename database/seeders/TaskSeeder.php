<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Task::create([
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'completed' => false,
        ]);
        
        Task::create([
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'completed' => true,
        ]);

      
    }
}
