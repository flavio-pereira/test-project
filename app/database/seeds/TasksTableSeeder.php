<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		$tasks = array(
			['name' => 'Task 1', 'slug' => 'task-1', 'completed' => 0, 'project_id' => 1, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 2', 'slug' => 'task-2', 'completed' => 0, 'project_id' => 1, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 3', 'slug' => 'task-3', 'completed' => 0, 'project_id' => 1, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 4', 'slug' => 'task-4', 'completed' => 0, 'project_id' => 2, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 5', 'slug' => 'task-5', 'completed' => 0, 'project_id' => 2, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);
		DB::table('tasks')->insert($tasks);
	}

}