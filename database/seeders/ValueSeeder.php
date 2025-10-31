<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Building Trust',
                'description' => 'By embodying ethical business practices, we weave trustworthiness and integrity into every connection we forge. This commitment paves the way for enduring and rewarding partnerships',
            ],
            [
                'title' => 'Future Forward',
                'description' => 'Innovation isnt just a buzzword for us its the heartbeat of global change. Were not just in the business of providing solutions—were in the business of breaking barriers, exploring bold ideas, and redefining the future for our clients.',
            ],
            [
                'title' => 'Accountability Matters',
                'description' => 'We embrace accountability for every decision and action, whether taken individually or as a team. This core value fuels our strength and integrity, driving us forward with purpose and confidence. Let’s make every act count, together.',
            ],
            [
                'title' => 'Sustainable Success',
                'description' => 'Were committed to creating a legacy of sustainability and success. Our approach goes beyond financial gains; we prioritize the well-being of people, society, and the environment.',
            ],
        ];

        foreach ($datas as $data) {
            Value::create($data);
        }
    }
}
