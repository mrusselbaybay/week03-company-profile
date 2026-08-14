<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        $featuredServices = [
            [
                'icon' => '💻',
                'title' => 'Web Development',
                'description' => 'Custom, scalable websites and web applications built with modern frameworks.',
            ],
            [
                'icon' => '📱',
                'title' => 'Mobile Development',
                'description' => 'Native and cross-platform mobile apps that deliver seamless user experiences.',
            ],
            [
                'icon' => '🎨',
                'title' => 'UI/UX Design',
                'description' => 'User-centered design that turns ideas into intuitive, engaging products.',
            ],
        ];

        return view('pages.home', compact('featuredServices'));
    }

    public function about()
    {
        $coreValues = [
            [
                'title' => 'Integrity',
                'description' => 'We do the right thing, even when no one is watching.',
            ],
            [
                'title' => 'Innovation',
                'description' => 'We constantly explore new ideas and technologies to stay ahead.',
            ],
            [
                'title' => 'Collaboration',
                'description' => 'We believe great work happens when great minds work together.',
            ],
            [
                'title' => 'Excellence',
                'description' => 'We hold ourselves to the highest standards in everything we deliver.',
            ],
        ];

        $team = [
            ['name' => 'Maria Santos', 'role' => 'Chief Executive Officer', 'initials' => 'MS'],
            ['name' => 'John Reyes', 'role' => 'Chief Technology Officer', 'initials' => 'JR'],
            ['name' => 'Angela Cruz', 'role' => 'Head of Design', 'initials' => 'AC'],
            ['name' => 'Marco Dela Peña', 'role' => 'Lead Developer', 'initials' => 'MD'],
        ];

        return view('pages.about', compact('coreValues', 'team'));
    }

    public function services()
    {
        $services = [
            [
                'icon' => '💻',
                'title' => 'Web Development',
                'description' => 'We build fast, secure, and scalable websites and web applications tailored to your business needs, using modern frameworks like Laravel, React, and Vue.',
            ],
            [
                'icon' => '📱',
                'title' => 'Mobile Development',
                'description' => 'From concept to launch, we design and develop native and cross-platform mobile apps for iOS and Android that keep your users engaged.',
            ],
            [
                'icon' => '🎨',
                'title' => 'UI/UX Design',
                'description' => 'Our design team crafts intuitive, accessible, and visually compelling interfaces that improve usability and delight your customers.',
            ],
            [
                'icon' => '☁️',
                'title' => 'Cloud Solutions',
                'description' => 'We help you migrate, deploy, and manage your infrastructure on AWS, Azure, or Google Cloud for better scalability and reliability.',
            ],
            [
                'icon' => '🔒',
                'title' => 'Cybersecurity',
                'description' => 'Protect your business with our security audits, penetration testing, and managed security services designed to keep threats at bay.',
            ],
            [
                'icon' => '🧭',
                'title' => 'IT Consulting',
                'description' => 'Our experts guide your digital transformation strategy, helping you choose the right technology stack and processes to grow efficiently.',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        $companyInfo = [
            'address' => '123 Innovation Avenue, Ortigas Center, Pasig City, Metro Manila, Philippines',
            'email' => 'novatech@gmail.com',
            'phone' => '+63 555 364 117',
            'social' => [
                'facebook' => 'https://facebook.com/yourcompany',
                'twitter' => 'https://twitter.com/yourcompany',
                'linkedin' => 'https://linkedin.com/company/yourcompany',
                'instagram' => 'https://instagram.com/yourcompany',
            ],
        ];

        return view('pages.contact', compact('companyInfo'));
    }
}