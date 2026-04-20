<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;


class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::updateOrCreate(
            ['slug' => 'ganesh-watve'],
            [
                'name' => 'Ganesh Watve, PMP®',
                'designation' => 'Founder, Director and Trainer',
                'image' => 'ganesh-watve.jpg',
                'email' => 'ganesh.watve@sarvashikshan.com',
                'phone' => '+91 98600 30545',
                'bio' => 'Ganesh Watve is the founder of SarvaShikshan® e-Learning and brings deep practical experience in project management, PMP®, and Agile Scrum training for working professionals.',
                'hero_title' => 'About Trainer',
                'highlights_title' => 'Professional Highlights',
                'highlights_empty_text' => 'No highlights available.',
                'meta_title' => 'Ganesh Watve, PMP® | Trainer at SarvaShikshan®',
                'meta_description' => 'Ganesh Watve, PMP®, is Founder, Director and Trainer at SarvaShikshan® e-Learning with extensive experience in PMP® and Agile training.',
                'og_title' => 'Ganesh Watve, PMP® | SarvaShikshan® Trainer',
                'og_description' => 'Ganesh Watve, PMP® - Founder, Director and Trainer at SarvaShikshan® e-Learning. Explore trainer profile and expertise.',
                'is_published' => true,
                'social_links' => [
                    'linkedin' => null,
                    'twitter' => null,
                    'youtube' => null,
                ],
                'highlights' => [
                    'Founder, Director and Trainer at SarvaShikshan® e-Learning, Pune',
                    'Contributor and Reviewer for PMBOK® Guide - Sixth & Seventh Edition',
                    'International Trainer for PMP® and Agile Scrum',
                    'Ex Joint Director at PMI Pune Deccan India Chapter',
                    '14+ years experience in Traditional and Scrum practices',
                    'PMP® Certified since 2007',
                    'SCRUMstudy® Certified Trainer',
                ],
            ]
        );
    }
}
