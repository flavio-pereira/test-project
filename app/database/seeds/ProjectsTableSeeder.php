<?php

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$projects = array(
			['name' => 'Project 1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Project 2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Project 3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);
			DB::table('projects')->insert($projects);
	}

}