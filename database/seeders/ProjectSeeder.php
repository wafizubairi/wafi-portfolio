<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'name' => 'Navi-KV',
            'description' => 'A campus navigation web app designed exclusively for Kolej Vokasional Sungai Buloh. Built to help new students and visitors navigate the campus grounds with ease, featuring interactive routing and location-based guidance.',
            'status' => 'Final Year Project',
            'tech_stack' => 'HTML, CSS, JavaScript',
        ]);

        Project::create([
            'name' => 'Semester Projects',
            'description' => 'A growing collection of coursework projects completed across multiple semesters — spanning databases, networking labs, web development, and system configuration exercises.',
            'status' => 'Ongoing',
            'tech_stack' => 'Java, MySQL, HTML, WordPress',
        ]);
    }
}