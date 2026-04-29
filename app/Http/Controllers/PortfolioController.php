<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = new Collection([
            (object) [
                'name' => 'Navi-KV',
                'description' => 'A digital campus navigation system for Kolej Vokasional Sungai Buloh, built to help students and visitors locate campus facilities. The project included User Acceptance Testing, technical deployment, database integration, and network connectivity checks.',
                'status' => 'Final Year Project',
                'tech_stack' => 'Python Flask, JavaScript, HTML, CSS, Database Integration',
            ],
            (object) [
                'name' => 'Coursework & Lab Projects',
                'description' => 'A collection of practical coursework covering database management, Cisco networking labs, web development, server configuration, Linux basics, and system troubleshooting exercises.',
                'status' => 'Academic Portfolio',
                'tech_stack' => 'Java, MySQL, HTML, WordPress, Cisco Packet Tracer, Linux',
            ],
            (object) [
                'name' => 'QA, UAT & Technical Documentation',
                'description' => 'Internship work focused on testing systems before launch, preparing UAT documents, producing user manuals, analyzing Excel data, and tracking bug-fix progress with the development team.',
                'status' => 'Internship Experience',
                'tech_stack' => 'UAT, Technical Support, Microsoft Excel, Documentation, Bug Tracking',
            ],
        ]);

        return view('portfolio', compact('projects'));
    }
}
