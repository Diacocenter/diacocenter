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
                    'url'        => 'ardakan-glass-factory-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Ardakan Glass Factory",
                'language_id'          => 1,
                'title'                => 'Glass Dust and Dirt Protection Coating',
                'start_date'           => '2024/1/19',
                'end_date'             => '2024/5/19',
                'label'               => ['Advance materials',' Chemistry'],
                'status'               => 1,
                'description'          => 'With structural modifications in the production of raw materials or the development of a coating for plain, patterned, and reflective glass, it is possible to achieve the capability of repelling dust and dirt particles from the glass. These modifications should be environmentally friendly and feasible for implementation within the current glass ',
                'includes'             => [
                    [
                        'title' => 'Project Manager',
                    ],
                    [
                        'title' => 'Mechanical and Electrical Engineers',
                    ],
                    [
                        'title' => 'Software Developers and Data Analysts',
                    ],
                    [
                        'title' => 'IoT Specialists',
                    ],
                    [
                        'title' => 'Environmental Engineers',
                    ],
                    [
                        'title' => 'Agronomists or Horticulturists',
                    ],
                    [
                        'title' => 'Automation and Control Engineers',
                    ],
                    [
                        'title' => 'Water Resource Managers',
                    ]
                ],
//                'excludes'             => [
//                    [
//                        'title' => 'Departure taxes from Iran'
//                    ],
//                    [
//                        'title' => 'Imam Khomeini airport transportation'
//                    ]
//                ],
                'gallery'              => [
                    [
                        "url"        => "ardakan-glass-factory-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "ardakan-glass-factory-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "ardakan-glass-factory-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "ardakan-glass-factory-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
//                'terms_and_conditions' => [
//                    [
//                        'question' => 'How much is the insurance for the travel for each person?',
//                        'answer'   => 'about 100 billion rials (3,000 US dollars) for injured and bodily disabilities. And 2x more of that for accidental death.'
//                    ],
//                    [
//                        'question' => 'What documents are essential for this tour package?',
//                        'answer'   => 'Although a passport is the only official document for your travel, having 5-year executive management is necessary for participation.'
//                    ],
//                    [
//                        'question' => 'How can I cancel my travel course?',
//                        'answer'   => 'You should cancel your travel at least 12 days before departure. In this condition, you can pay back 70% of your payment. After this date, unfortunately, it isn’t possible to return any payment.'
//                    ],
//                    [
//                        'question' => 'Can I travel with my husband/wife? Or my children?',
//                        'answer'   => 'Yes. It’s possible to have fellow–travelers with you. But please check with Landa trip for accommodation, an airplane ticket, and so on.'
//                    ]
//                ],
            ],
            [
                'header_pic'   => [
                    'url'        => 'concrete-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Isfahan municipality",
                'language_id'  => 1,
                'title'        => 'Self-healing Concrete for Existing Urban Structures',
                'start_date'   => '2023/11/18',
                'end_date'     => '2024/5/20',
                'label'       => ['Advance materials', 'Chemistry', 'civil'],
                'status'       => 2,
                'description'  => 'For the repair of exposed concrete elements of Azar and Ghadir bridges in Isfahan city, we require a concrete repair technology for non-structural cracks. These repairs need to be completed in less than three months during the summer of 2024, considering the flow of the river. Additionally, these repairs must adhere to the cities health and environmental codes due to the urban environment',
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
                'gallery'              => [
                    [
                        "url"        => "concrete-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "concrete-02.jpeg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "concrete-03.jpeg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "concrete-04.jpeg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "concrete-05.jpeg",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'seperation-shells-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Gilan Provincial Environmental Organization",
                'language_id'          => 1,
                'title'                => 'Separation of shells and living organisms from the litter on the shores of Gilan Province.',
                'start_date'           => '2023/11/20',
                'end_date'             => '2024/8/2',
                'label'               => ['Civil', 'Environment', 'AI'],
                'status'               => 1,
                'description'          => 'Create a versatile robotic arm capable of precise and efficient material handling tasks in industrial settings, enhancing production processes and reducing human labor.',
                'includes'             => [
                    [
                        'title' => 'Project Management and Planning',
                    ],
                    [
                        'title' => 'Mechanical and Electrical Engineers',
                    ],
                    [
                        'title' => 'Robotics and Automation Software Developers',
                    ],
                    [
                        'title' => 'Manufacturing and Fabrication',
                    ],
                    [
                        'title' => 'Sensors and Actuators',
                    ],
                    [
                        'title' => 'IoT Connectivity and Control Systems',
                    ]
                ],
                'gallery'              => [
                    [
                        "url"        => "seperation-shells-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "seperation-shells-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "seperation-shells-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "seperation-shells-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "seperation-shells-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "seperation-shells-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'improvementoflocalplantspecies-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "National Environmental Agency",
                'language_id'          => 1,
                'title'                => 'Improvement of Local Plant Species for Cultivation in Low-Water Regions',
                'start_date'           => '2024/1/6',
                'end_date'             => '2024/10/10',
                'label'               => ['Environment ', 'chemistry'],
                'status'               => 3,
                'description'          => 'In order to prevent desertification and control drifting sands, there is a need to modify existing plant species for greater climate adaptability and reduced water consumption, allowing a maximum of four irrigations per year and the ability to tolerate saline and acidic soil conditions (with a pH of 4). Priority will be given to providers who can also serve as project implementers',
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
                'gallery'              => [
                    [
                        "url"        => "improvementoflocalplantspecies-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-07.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "improvementoflocalplantspecies-08.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'smart-pedestria-crossing-lights-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Tehran municipality",
                'language_id'          => 1,
                'title'                => 'Smart Pedestrian Crossing Lights for Urban Traffic Optimization',
                'start_date'           => '2023/12/10',
                'end_date'             => '2024/12/20',
                'label'               => ['Civil', 'AI', 'Electronics'],
                'status'               => 2,
                'description'          => 'In order to reduce urban traffic congestion and increase the average vehicle speed on city streets, we need smart pedestrian crossing lights equipped with pedestrian detection capabilities using machine vision technology. This system should be equipped with environmental processing and offline functionality. Additionally, the cameras should perform optimally in both daytime and nighttime lighting conditions.',
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
                'gallery'              => [
                    [
                        "url"        => "smart-pedestria-crossing-lights-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "smart-pedestria-crossing-lights-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "smart-pedestria-crossing-lights-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "smart-pedestria-crossing-lights-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "smart-pedestria-crossing-lights-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'urban-perimeter-highways-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "The Specialized Organization for New Cities in Iran",
                'language_id'          => 1,
                'title'                => 'The Mobile Island of Urban Perimeter Highways in the Country',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Civil', 'AI', 'Electronics', 'IT'],
                'status'               => 1,
                'description'        => 'For the urban highways in major Iranian cities, especially Tehran, Isfahan, Mashhad, and Tabriz, there is a need for changes in the number of traffic lanes during peak traffic hours. This system should be implemented while adhering to the principles of traffic guidance and driving standards set by the national highway authority. It should have the capability to intelligently and centrally detect traffic volume and obstacles during lane changes.',
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
                'gallery'              => [
                    [
                        "url"        => "urban-perimeter-highways-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "urban-perimeter-highways-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "urban-perimeter-highways-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "urban-perimeter-highways-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "urban-perimeter-highways-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "urban-perimeter-highways-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'removalof-heavy-metals-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "The Organization of Industrial Estates of the Country",
                'language_id'          => 1,
                'title'                => 'Removal of Heavy Metals from Industrial Estate Wastewater',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Electronics' , 'Chemistry', 'Environment'],
                'status'               => 1,
                'description'        => 'We require a high-precision technology for the separation of heavy metals and mercury from industrial estate wastewater in order to reduce environmental impacts and existing pollution in the industrial estates of the country. This technology should handle a maximum input volume of 100 liters per second. It should be scalable on a national level and compatible with the diverse climatic conditions across different regions of Iran.',
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
                'gallery'              => [
                    [
                        "url"        => "removalof-heavy-metals-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "removalof-heavy-metals-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "removalof-heavy-metals-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "removalof-heavy-metals-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "removalof-heavy-metals-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "removalof-heavy-metals-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'figma01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Dade Pardazi of iran",
                'language_id'          => 1,
                'title'                => 'Figma to Code Conversion Plugin with Library Selection Capability',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['AI','IT'],
                'status'               => 1,
                'description'        => 'This plugin should be written in JavaScript and should seamlessly integrate with the Figma design platform. It should interpret auto layout principles and, based on the users selection from libraries like Bootstrap, Tailwind, Material UI, and more, deliver the required front-end code output. Furthermore, the conversion of Figma designs into WordPress templates will be conducted in later phases of the project.',
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
                'gallery'              => [
                    [
                        "url"        => "figma01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma07.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma08.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "figma09.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'personal-car-navigation-software-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Snap Company",
                'language_id'          => 1,
                'title'                => 'Personal Car Navigation Software',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Civil', 'AI', 'Electronics', 'IT',],
                'status'               => 1,
                'description'        => 'This software, in accordance with the users specified schedule in a calendar application, daily hours, dietary preferences, available fuel levels, and user preferences, finds the best driving route, parking options, and city restaurants. This application utilizes hardware features such as GPS, mobile internet, and more.',
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
                'gallery'              => [
                    [
                        "url"        => "personal-car-navigation-software-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "personal-car-navigation-software-07.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'it-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "The Ministry of Information and Communication Technology of the Country",
                'language_id'          => 1,
                'title'                => 'High-Frequency Electromagnetic Wave Insulating Ceramic Tiles',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Advance Material', 'Chemistry', 'Environment',],
                'status'               => 2,
                'description'        => 'These tiles should be capable of significantly reducing the penetration of electromagnetic waves when installed on the walls of specific locations, including technical and telecommunications laboratories.',
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
                'gallery'              => [
                    [
                        "url"        => "it-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "it-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "it-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "it-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "it-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'kashi-pardis-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Pardis Tiles",
                'language_id'          => 1,
                'title'                => 'Fluid or Paste Ceramic with State-changing Capabilities into Solid',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Advance Material', 'Polymer', 'Oil', 'Chemistry'],
                'status'               => 1,
                'description'        => 'This ceramic is produced in liquid or paste form, and it is applied to the desired location with a brush, spray, or spatula. Subsequently, it transforms into a solid, seamless material without cracks or gaps, either through the addition of additives or with the passage of time. This ceramic serves as a competitor to building polymeric insulators.',
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
                'gallery'              => [
                    [
                        "url"        => "kashi-pardis-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "kashi-pardis-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "kashi-pardis-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "kashi-pardis-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "kashi-pardis-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'palayeshgah-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "The National Refineries Company",
                'language_id'          => 1,
                'title'                => 'Disposal or Conversion of Excess Sulfates in the Oil Purification Process',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Environment', 'Polymer', 'Oil', 'Chemistry'],
                'status'               => 2,
                'description'        => 'In the oil and gas purification process at the countrys refineries, a substantial amount of excess sulfate is generated, which is currently stored environmentally, leading to environmental pollution. Therefore, ideas are being considered for its conversion into a useful industrial substance or for its proper disposal.',
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
                'gallery'              => [
                    [
                        "url"        => "palayeshgah-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "palayeshgah-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "palayeshgah-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "palayeshgah-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "palayeshgah-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "palayeshgah-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'polymer-iran-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "Iran Polymer Company",
                'language_id'          => 1,
                'title'                => 'Manufacturing Polymer Tiles with Waterproof and Wear-Resistant Properties.',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Environment', 'Polymer', 'Oil', 'Chemistry'],
                'status'               => 1,
                'description'        => 'These tile components feature a polymer coating designed to absorb floor impacts and sound, making them highly useful. They are typically used in damp environments, such as poolside areas and recreational spaces.',
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
                'gallery'              => [
                    [
                        "url"        => "polymer-iran-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "polymer-iran-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "polymer-iran-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "polymer-iran-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "polymer-iran-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "polymer-iran-06.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'mohaseban-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "The Calculators Company",
                'language_id'          => 1,
                'title'                => 'Intelligent Tax and Investment Calculation System',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['AI', 'IT'],
                'status'               => 2,
                'description'        => 'This system can calculate the immediate impact of each transaction made with credit and debit cards on an individuals projected annual tax. It also suggests the best investment opportunities within a given time frame based on spending patterns.',
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
                'gallery'              => [
                    [
                        "url"        => "mohaseban-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "mohaseban-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "mohaseban-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "mohaseban-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "mohaseban-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
            [
                'header_pic'           => [
                    'url'        => 'plant-01.webp',
                    'image_type' => 'header',
                    'alt'        => 'discover'
                ],
                'user'                 => "picturethisai",
                'language_id'          => 1,
                'title'                => 'Artificial Intelligence-Based App for Identifying Potential Plant Diseases',
                'start_date'       => '2023/10/15',
                'end_date'                 => '2024/6/18',
                'label'             => ['Environment', 'AI', 'IT', 'Chemistry'],
                'status'               => 1,
                'description'        => 'This app should be able to recognize the specific plant and, after capturing images of its leaves and overall dimensions, identify potential issues or diseases affecting the plant. These issues could range from various types of fungi to mineral and environmental deficiencies.',
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
                'gallery'              => [
                    [
                        "url"        => "plant-01.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "plant-02.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "plant-03.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "plant-04.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                    [
                        "url"        => "plant-05.webp",
                        "alt"        => "",
                        "image_type" => ""
                    ],
                ],
            ],
        ];

        foreach ($items as $item) {
            $projectObj = new Project($item);
            unset($projectObj['itineraries'], $projectObj['includes'], $projectObj['gallery'], $projectObj['header_pic'], $projectObj['user']);

            if(array_key_exists("user", $item)) {
                $userObj = User::where("first_name", "like", $item["user"])->first();
                $projectObj->user()->associate($userObj);
            } else {
                $randomUser = User::whereHasRole("seeker")->inRandomOrder()->first();
                $projectObj->user()->associate($randomUser);
            }
            $randomPrice = mt_rand(100, 200)*100;
            $projectObj->price = $randomPrice;
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

//            foreach ($item['excludes'] as $exclude) {
//                $excludeObj = new ProjectExclude($exclude);
//                $projectObj->projectExclude()->save($excludeObj);
//            }

            if ($item['gallery']) {
                foreach ($item['gallery'] as $gallery) {
                    $galleryObj = new ProjectGallery($gallery);
                    $projectObj->gallery()->save($galleryObj);
                }
            }

//            foreach ($item['terms_and_conditions'] as $term) {
//                $termObj = new TermAndConditions($term);
//                $projectObj->termAndConditions()->save($termObj);
//            }

            $languageObj = Language::find($item['language_id']);

//            $randUsers = User::whereHasRole('provider')->inRandomOrder()->limit(random_int(1, 2))->get();
//            foreach ($randUsers as $randUser) {
//                $projectObj->user()->attach($randUser, ["status" => array_rand(ProjectStatusEnum::getValues())]);
//            }

        }
    }
}
