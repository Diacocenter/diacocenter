<?php

namespace Database\Seeders;

use App\Enums\ProjectStatusEnum;
use App\Models\Image;
use App\Models\Language;
use App\Models\Project;
use App\Models\ProjectExclude;
use App\Models\ProjectGallery;
use App\Models\ProjectRequirement;
use App\Models\TermAndConditions;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // English
            [
                'header_pic'           => [
                    'url'        => 'discover.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'          => 1,
                'title'                => 'Automated Greenhouse Irrigation System',
                'start_date'           => 20,
                'end_date'             => '2024/01/19',
                'skills'               => ['Agriculture and Automation'],
                'status'               => 0,
                'description'          => 'Develop an automated irrigation system using sensors and actuators to optimize water usage and promote plant growth in a greenhouse environment.',
                'includes'             => [
                    [
                        'title' => 'Airplane ticket (two ways)',
                    ],
                    [
                        'title' => 'Accommodation in 4 stars hotel',
                    ],
                    [
                        'title' => 'Airport transportation',
                    ],
                    [
                        'title' => '4 breakfasts',
                    ],
                    [
                        'title' => '2 lunches',
                    ],
                    [
                        'title' => '1 dinner',
                    ],
                    [
                        'title' => 'Course and certifications',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => 'Departure taxes from Iran'
                    ],
                    [
                        'title' => 'Imam Khomeini airport transportation'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (14).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (13).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (12).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (11).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (6).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (7).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (8).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (9).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (10).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'about 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
            [
                'header_pic'   => [
                    'url'        => 'discover4.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'  => 1,
                'title'        => 'Solar-Powered Electric Bike Conversion Kit',
                'start_date'   => 20,
                'end_date'     => '2023/11/18',
                'skills'       => ['Renewable Energy and Transportation', 'ey eyy Ey'],
                'status'       => 2,
                'description'  => 'Design a kit that converts regular bicycles into electric ones by harnessing solar energy to charge the battery and extend the range of electric propulsion.',

                'includes'             => [
                    [
                        'title' => 'Airplane ticket (two ways)',
                    ],
                    [
                        'title' => 'Accommodation in 4 stars hotel',
                    ],
                    [
                        'title' => 'Airport transportation',
                    ],
                    [
                        'title' => '4 breakfasts',
                    ],
                    [
                        'title' => '2 lunches',
                    ],
                    [
                        'title' => '1 dinner',
                    ],
                    [
                        'title' => 'Course and certifications',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => '•	The airport transportation'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover1.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (4).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'About 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'discover9.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'          => 1,
                'title'                => 'Robotic Arm for Industrial Material Handling',
                'start_date'           => 20,
                'end_date'             => '2023/11/20',
                'skills'               => ['Robotics and Manufacturing'],
                'status'               => 1,
                'description'          => 'Create a versatile robotic arm capable of precise and efficient material handling tasks in industrial settings, enhancing production processes and reducing human labor.',
                'includes'             => [
                    [
                        'title' => 'Airplane ticket (two ways)',
                    ],
                    [
                        'title' => 'Accommodation in 3 stars hotel',
                    ],
                    [
                        'title' => 'Airport transportation',
                    ],
                    [
                        'title' => '14 breakfasts',
                    ],
                    [
                        'title' => 'Course and certifications',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => 'The airport transportation in Iran'
                    ],
                    [
                        'title' => 'Education materials'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover2.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (3).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'About 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'discover10.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'          => 1,
                'title'                => 'Smart Home HVAC Energy Optimization',
                'start_date'           => 20,
                'end_date'             => '2023/10/6',
                'skills'               => [' Home Automation and Energy Efficiency'],
                'status'               => 3,
                'description'          => 'Develop a system that intelligently controls the heating, ventilation, and air conditioning (HVAC) systems in a home to optimize energy consumption while maintaining comfort levels.',
                'includes'             => [
                    [
                        'title' => 'Charter bus',
                    ],
                    [
                        'title' => 'Accommodation in Ecotourism',
                    ],
                    [
                        'title' => '2 breakfasts, 1 dinner, 2 lunch',
                    ],
                    [
                        'title' => 'Course and certification',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => 'Camera and equipment'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover3.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (2).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'About 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'discover8.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'          => 1,
                'title'                => 'Design and Fabrication of a Wind Turbine Prototype',
                'start_date'           => 20,
                'end_date'             => '2023/12/20',
                'skills'               => ['Renewable Energy and Engineering'],
                'status'               => 2,
                'description'          => 'Construct a small-scale wind turbine prototype that generates electricity using wind power, aiming to explore its feasibility for localized energy generation.',
                'includes'             => [
                    [
                        'title' => 'Accommodation in the ecolodge',
                    ],
                    [
                        'title' => 'One breakfast',
                    ],
                    [
                        'title' => 'One lunch',
                    ],
                    [
                        'title' => 'One Dinner',
                    ],
                    [
                        'title' => 'Certifications',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => 'Transportation'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover4.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "test (1).jpg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'About 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'discover5.png',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'language_id'          => 1,
                'title'                => 'Efficient Hydraulic Jack for Automobiles',
                'start_date'       => 20,
                'end_date'                 => '2023/10/15',
                'skills'             => ['Automotive Tools and Equipment'],
                'status'               => 1,
                'description'        => 'Create a compact and efficient hydraulic jack design that allows for easy lifting of vehicles during maintenance and repairs, with improved stability and user-friendly features.',
                'includes'             => [
                    [
                        'title' => 'Airport and daily transfer followed the itinerary',
                    ],
                    [
                        'title' => 'Accommodation in 4-star hotel',
                    ],
                    [
                        'title' => '6 breakfasts, 1 dinner',
                    ],
                    [
                        'title' => 'Insurance',
                    ]
                ],
                'excludes'             => [
                    [
                        'title' => 'Local translator'
                    ],
                    [
                        'title' => 'Law and legal consultant'
                    ],
                    [
                        'title' => 'Financial and business consultant'
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "discover5.png",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
                'terms_and_conditions' => [
                    [
                        'question' => 'How much is the insurance for the travel for each person?',
                        'answer'   => 'About 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
                    ],
                    [
                        'question' => 'What documents are essential for this tour package?',
                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
                    ],
                    [
                        'question' => 'How can I cancel my travel course?',
                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
                    ],
                    [
                        'question' => 'Can I travel with my husband/wife? Or my children?',
                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
                    ]
                ],
            ],
        ];

        foreach ($items as $item) {
            $projectObj = new Project($item);
            unset($projectObj['itineraries'], $projectObj['includes'], $projectObj['excludes'], $projectObj['gallery'], $projectObj['header_pic'], $projectObj['terms_and_conditions']);

            $randomUser = User::whereHasRole("seeker")->inRandomOrder()->first();
            $projectObj->user()->associate($randomUser);

            $projectObj->withoutEvents(function () use ($projectObj) {
                $projectObj->slug = $projectObj::makeSlug($projectObj->title);
                $projectObj->save();
            });

//            if ($item['thumbnail']) {
//                foreach ($item['thumbnail'] as $gallery) {
//                    $galleryObj = new ProjectGallery($gallery);
//                    $projectObj->gallery()->save($galleryObj);
//                }
//            }

            if ($item['header_pic']) {
                $galleryObj = new Image($item['header_pic']);
                $projectObj->headerImage()->save($galleryObj);
            }

            foreach ($item['includes'] as $include) {
                $includeObj = new ProjectRequirement($include);
                $projectObj->projectRequirements()->save($includeObj);
            }

            foreach ($item['excludes'] as $exclude) {
                $excludeObj = new ProjectExclude($exclude);
                $projectObj->projectExclude()->save($excludeObj);
            }

            if ($item['gallery']) {
                foreach ($item['gallery'] as $gallery) {
                    $galleryObj = new ProjectGallery($gallery);
                    $projectObj->gallery()->save($galleryObj);
                }
            }

            foreach ($item['terms_and_conditions'] as $term) {
                $termObj = new TermAndConditions($term);
                $projectObj->termAndConditions()->save($termObj);
            }

            $languageObj = Language::find($item['language_id']);

//            $randUsers = User::whereHasRole('provider')->inRandomOrder()->limit(random_int(1, 2))->get();
//            foreach ($randUsers as $randUser) {
//                $projectObj->user()->attach($randUser, ["status" => array_rand(ProjectStatusEnum::getValues())]);
//            }

        }
    }
}
