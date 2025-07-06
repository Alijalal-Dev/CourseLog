<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create();

        $courses = [
            [
                'name' => 'Laravel Mastery',
                'platform' => 'Udemy',
                'payment_date' => now(),
                'note' => 'Complete web development course with Laravel',
                'payment' => 89.99,
                'category' => 'Development',
            ],
            [
                'name' => 'Python for Data Science',
                'platform' => 'Coursera',
                'payment_date' => now()->addDays(15),
                'note' => 'Data analysis and machine learning fundamentals',
                'payment' => 49.99,
                'category' => 'Data Science',
            ],
            [
                'name' => 'UI/UX Design Fundamentals',
                'platform' => 'Skillshare',
                'payment_date' => now()->addDays(30),
                'note' => 'Learn modern design principles',
                'payment' => 29.99,
                'category' => 'Design',
            ],
            [
                'name' => 'AWS Cloud Practitioner',
                'platform' => 'AWS Training',
                'payment_date' => now()->addDays(45),
                'note' => 'Cloud computing certification preparation',
                'payment' => 119.99,
                'category' => 'Cloud Computing',
            ],
            [
                'name' => 'Digital Marketing Essentials',
                'platform' => 'Google Digital Garage',
                'payment_date' => now()->addDays(60),
                'note' => 'Learn SEO, SEM, and social media marketing',
                'payment' => 0.00,
                'category' => 'Marketing',
            ],
            [
                'name' => 'JavaScript Advanced Concepts',
                'platform' => 'Frontend Masters',
                'payment_date' => now()->addDays(75),
                'note' => 'Deep dive into JS patterns and practices',
                'payment' => 39.99,
                'category' => 'Development',
            ],
            [
                'name' => 'Mobile App Development with Flutter',
                'platform' => 'Udacity',
                'payment_date' => now()->addDays(90),
                'note' => 'Cross-platform app development',
                'payment' => 199.99,
                'category' => 'Mobile Development',
            ],
            [
                'name' => 'Cybersecurity Fundamentals',
                'platform' => 'Pluralsight',
                'payment_date' => now()->addDays(105),
                'note' => 'Network security and ethical hacking',
                'payment' => 79.99,
                'category' => 'Security',
            ],
            [
                'name' => 'Blockchain Development',
                'platform' => 'Ethereum.org',
                'payment_date' => now()->addDays(120),
                'note' => 'Smart contract development with Solidity',
                'payment' => 149.99,
                'category' => 'Blockchain',
            ],
            [
                'name' => 'Project Management Professional',
                'platform' => 'PMI',
                'payment_date' => now()->addDays(135),
                'note' => 'PMP certification preparation',
                'payment' => 399.99,
                'category' => 'Management',
            ],
        ];

        foreach ($courses as $course) {
            Course::create(array_merge($course, ['user_id' => $user->id]));
        }
    }
}