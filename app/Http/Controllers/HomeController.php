<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'title' => 'Advanced Analytics',
                'description' => 'Get deep insights into your business performance with real-time analytics and custom reports.',
                'icon' => 'chart-line',
                'color' => 'blue'
            ],
            [
                'title' => 'Enterprise Security',
                'description' => 'Comprehensive security solution with encryption and threat detection.',
                'icon' => 'shield-check',
                'color' => 'green'
            ],
            [
                'title' => 'Customer Support',
                'description' => '24/7 customer support with live chat and ticketing system.',
                'icon' => 'headset',
                'color' => 'purple'
            ],
            [
                'title' => 'API Integration',
                'description' => 'Seamless integration with third-party services and applications.',
                'icon' => 'puzzle-piece',
                'color' => 'orange'
            ]
        ];

        $testimonials = [
            [
                'name' => 'John Smith',
                'position' => 'CEO, TechCorp',
                'quote' => 'This platform has transformed our business operations and increased our productivity significantly.',
                'image' => 'https://randomuser.me/api/portraits/men/32.jpg'
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Marketing Director, Global Solutions',
                'quote' => 'The analytics tools provided have given us unprecedented insights into our customer behavior.',
                'image' => 'https://randomuser.me/api/portraits/women/44.jpg'
            ],
            [
                'name' => 'Michael Brown',
                'position' => 'CTO, Innovatech',
                'quote' => 'The security features have given us peace of mind knowing our data is protected.',
                'image' => 'https://randomuser.me/api/portraits/men/65.jpg'
            ]
        ];

        return view('welcome', compact('features', 'testimonials'));
    }
}