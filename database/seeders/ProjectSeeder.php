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
            'description' => 'A digital campus navigation system for Kolej Vokasional Sungai Buloh, built to help students and visitors locate campus facilities. The project included User Acceptance Testing, technical deployment, database integration, and network connectivity checks.',
            'status' => 'Final Year Project',
            'tech_stack' => 'Python Flask, JavaScript, HTML, CSS, Database Integration',
        ]);

        Project::create([
            'name' => 'Semester Projects',
            'description' => 'A growing collection of coursework projects completed across multiple semesters, spanning database management, Cisco networking labs, web development, server configuration, and system troubleshooting exercises.',
            'status' => 'Ongoing',
            'tech_stack' => 'Java, MySQL, HTML, WordPress, Cisco Packet Tracer, Linux',
        ]);
    }
}
