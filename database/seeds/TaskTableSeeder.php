<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task([
        	'newTask' => 'This is the first task'
        ]);

        $task->save();

        $task = new Task([
        	'newTask' => 'This is the second task'
        ]);

        $task->save();

        $task = new Task([
        	'newTask' => 'This is the third task'
        ]);

        $task->save();
    }
}
