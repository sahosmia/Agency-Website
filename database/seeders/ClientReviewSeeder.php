<?php

namespace Database\Seeders;

use App\Models\ClientReview;
use App\Models\Project;
use App\Models\Service;
use App\Models\Software;
use Illuminate\Database\Seeder;

class ClientReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Harper Jackson',
                'designation' => 'Founder & CEO & Dcode agency',
                'avatar' => 'avatars/john_doe.jpg',
                'rating' => '5',
                'review' => 'Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.',
                'is_active' => true,
            ],
            [
                'name' => 'Mason Carter',
                'designation' => 'Creative Director, PixelForge',
                'avatar' => 'avatars/sarah_smith.jpg',
                'rating' => '4.5',
                'review' => 'The team is incredibly skilled and communicative. They understood our requirements perfectly and delivered a website that not only looks amazing but also performs flawlessly.',
                'is_active' => true,
            ],
            [
                'name' => 'Liam Hayes',
                'designation' => 'Product Manager, NexTech& CEO & Dcode agency',
                'avatar' => 'avatars/michael_johnson.jpg',
                'rating' => '4',
                'review' => 'Their expertise in UI/UX design and digital marketing helped us stand out in a competitive market.',
                'is_active' => true,
            ],
            [
                'name' => 'Emily Davis',
                'designation' => 'Founder, Creative Minds',
                'avatar' => 'avatars/emily_davis.jpg',
                'rating' => '5',
                'review' => 'Outstanding work! Highly recommended for anyone looking for top-notch services.',
                'is_active' => true,
            ],
            [
                'name' => 'David Brown',
                'designation' => 'Project Manager, WebTech',
                'avatar' => 'avatars/david_brown.jpg',
                'rating' => '4.8',
                'review' => 'Very professional and delivered the project on time. Will work with them again!',
                'is_active' => true,
            ],
        ];

        foreach ($datas as $data) {
            ClientReview::updateOrCreate(['name' => $data['name']], $data);
        }

        $services = Service::all();
        $projects = Project::all();
        $softwares = Software::all();

        if ($services->count() > 0) {
            ClientReview::first()->update([
                'reviewable_id' => $services->first()->id,
                'reviewable_type' => Service::class,
            ]);
        }

        if ($projects->count() > 0) {
            ClientReview::find(2)->update([
                'reviewable_id' => $projects->first()->id,
                'reviewable_type' => Project::class,
            ]);
        }

        if ($softwares->count() > 0) {
            ClientReview::find(3)->update([
                'reviewable_id' => $softwares->first()->id,
                'reviewable_type' => Software::class,
            ]);
        }
    }
}
