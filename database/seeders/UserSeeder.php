<?php

namespace Database\Seeders;

use App\Enums\JobTypeEnum;
use App\Models\Image;
use App\Models\SocialMedia;
use App\Models\User;
use App\Models\UserEducation;
use App\Models\UserWorkExperience;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            // Managers
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Iman",
                'last_name'             => "Nasr Esfahani",
                'email'                 => "iman.nasr.esfhan@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Iman Nasr has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "advisor",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'iman-nasr.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip',
                ],
                "user_documents"        => [],
                "role"                  => "advisor",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/iman-nasr-esfahan",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/iman.nasr.esfahani?igshid=MDM4ZDc5MmU=",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/profile.php?id=100090810848190",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://ir.linkedin.com/in/iman-nasr-esfahani-b798a8184",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Regional Planning",
                        "university" => "University of tehran",
                        "degree"     => "Master's degree",
                        "from"       => "2012",
                        "to"         => "2015",
                        "location"   => "Iran",
                        "about"      => ""
                    ],
                    [
                        "title"      => "",
                        "university" => "Tehran University",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2007",
                        "to"         => "2011",
                        "location"   => "Iran",
                        "about"      => "",
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title"        => "Founder",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2021",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Melale",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2019",
                        "to"           => "2022"
                    ]
                ],
            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Fatemeh",
                'last_name'             => "Safi",
                'email'                 => "fatemesafi21@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Fatemeh Safi has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "provider",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'fateme-safi.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip',
                ],
                "user_documents"        => [],
                "role"                  => "provider",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fatemesafi_?igshid=MDM4ZDc5MmU=",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title"        => "Founder",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2021",
                        "to"           => null
                    ],
                ],
            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Fahimeh",
                'last_name'             => "Sajadi",
                'email'                 => "fahimehsjd77@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Fahimeh Sajadi has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "provider",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'fahimeh-sajadi.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "provider",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineer",
                        "university" => "University of Shahre-kord",
                        "degree"     => "",
                        "from"       => "2017",
                        "to"         => "2021",
                        "location"   => "Iran",
                        "about"      => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2023",
                        "to"           => null
                    ],
                    [
                        "company_name" => "University Isfahan",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => "2023"
                    ],
                    [
                        "company_name" => "Isfahan Hub",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2019",
                        "to"           => "2022"
                    ],
                ],

            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Lida",
                'last_name'             => "Parvizi",
                'email'                 => "lida.parvizi.business@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Lida has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "seeker",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'lida-parvizi.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Hardware Engineering",
                        "university" => "Sepahan University",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2007",
                        "to"         => "2011",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "irimmigration",
                        "title"        => "assistant",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2021",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Forough Roshan Pasargad",
                        "title"        => "Office affairs",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2021",
                        "to"           => null
                    ]
                ],
            ],
            // Admins
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Ehsan",
                'last_name'             => "Aliakbari",
                'email'                 => "ehsanaliakbari.landa@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Ehsan Aliakbari has a long background on digital marketing and now he focused on effect of new technologies on the old and vintage industries.",
                "label"                 => "teaching",
                "role_is"               => "admin",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'ehsan-aliakbari.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "admin",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/in/ehsan-aliakbari/",
                    ],
                ],
                "user_education"        => [

                    [
                        "title"      => "Graphic",
                        "university" => "Payame Noor University",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2015",
                        "to"         => "2019",
                        "location"   => "Iran",
                        "about"      => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Freelance",
                        "title"        => "Graphic Designer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2010",
                        "to"           => null
                    ],

                ],
            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Pedram",
                'last_name'             => "Najafi",
                'email'                 => "pedram_najafi@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Pedram has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "admin",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'pedram-najafi.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "admin",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [

                    [
                        "title"      => "",
                        "university" => "",
                        "degree"     => "",
                        "from"       => "",
                        "to"         => "",
                        "location"   => "",
                        "about"      => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "",
                        "title"        => "",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "",
                        "to"           => ""
                    ],

                ],
            ],
            // Seekers
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Maryam",
                'last_name'             => "Eskandari",
                'email'                 => "maryameskandari.landa@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Maryam eskandari acts as a copy writer and content creater who is interested in the field of new technologies in renovation of the old methods and increasing the productivity of businesses.",
                "label"                 => "teaching",
                "role_is"               => "seeker",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'maryam-eskandari.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/real_minee?igshid=MzNlNGNkZWQ4Mg==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/in/maryam-eskandari-62136a265/",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "science ",
                        "university" => "saremiye2",
                        "degree"     => "diploma",
                        "from"       => "2017",
                        "to"         => "2020",
                        "location"   => "Iran",
                        "about"      => ""
                    ], [
                        "title"      => "master of psychology",
                        "university" => "Azad university of Isfahan",
                        "degree"     => "master",
                        "from"       => "2020",
                        "to"         => null,
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title"        => "Content Creator",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2023",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Diaco Center",
                        "title"        => "Content Creator",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2023",
                        "to"           => null
                    ]
                ],

            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Matin",
                'last_name'             => "Janghorban",
                'email'                 => "matin.jn2007@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Matin has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "seeker",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'matin-janghorban.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [

                    [
                        "title"      => "",
                        "university" => "",
                        "degree"     => "",
                        "from"       => "",
                        "to"         => "",
                        "location"   => "",
                        "about"      => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "",
                        "title"        => "",
                        "location"     => "",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "",
                        "to"           => ""
                    ],

                ],
            ],
            // Providers
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Ali",
                'last_name'             => "Khavari",
                'email'                 => "sdyarash@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Ali Khavari has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "provider",
                "location"              => 1,
                "profile"               => [

                    'url'        => 'ali-khavari.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "provider",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [

                    [
                        "title"      => "Bussines management",
                        "university" => "University of Isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2019",
                        "to"         => null,
                        "location"   => "Iran",
                        "about"      => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Startup school",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::onSite,
                        "title"        => "Intern",
                        "description"  => "",
                        "from"         => "2021",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Accounting",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],

                ],
            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Mohammad",
                'last_name'             => "Asgarian",
                'email'                 => "asgarianm17@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Mohammad has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "provider",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'mohammad-asgarian.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "provider",
                "social_media"          => [
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "IT",
                        "university" => "Najaf Abad University",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2019",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Arshia",
                'last_name'             => "Nasiri",
                'email'                 => "marshian03@gmail.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Arshia has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "label"                 => "teaching",
                "role_is"               => "seeker",
                "location"              => 1,
                "profile"               => [
                    'url'        => 'arshia-nasiri.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/marshian03?igshid=MzRlODBiNWFlZA==",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/in/mohammad-arshia-nasiri-2058361a9/",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ],
            [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Ardakan Glass Factory",
                'last_name'             => "",
                'email'                 => "Info@ardakanglass.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Having the largest glass melting furnace in the Middle East, owning vast mines of high grade raw materials, Offering more than 100 different products; Ardakan Glass Corporation is one of the most perfect glass manufacturers in West Asia with the capability of manufacturing A Grade products",
                "label"                 => [' factory', 'glass '],
                "role_is"               => "seeker",
                "location"              => 'No. 5, Hoseini Dead end, Golzar St., North Sayyad Highway, Artesh Highway, Tehran, Iran',
                "profile"               => [
                    'url'        => 'ardakan.png',
                    'image_type' => 'profile',
                    'alt'        => 'ardakan.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "http://www.instagram.com/ardakanglassco",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/profile.php?id=100072362634291",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Isfahan municipality",
                'last_name'             => "",
                'email'                 => "pr@isfahan.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "We are a non-governmental organization dedicated to the administration and management of Isfahan city. Isfahan, as one of the important and historical cities in Iran, requires strong urban management to handle various city affairs effectively.",
                "label"                 => ['Municipality of Isfahan', 'Urban Management', 'Isfahan City Administration'],
                "role_is"               => "seeker",
                "location"              => 'Isfahan, Imam Hossein Square, Central Municipality of Isfahan',
                "profile"               => [
                    'url'        => 'shahrdari-isfahan.png',
                    'image_type' => 'profile',
                    'alt'        => 'shahrdari-isfahan.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "http://www.instagram.com/ardakanglassco",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/profile.php?id=100072362634291",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Gilan Provincial Environmental Organization",
                'last_name'             => "",
                'email'                 => "publicrelations.gilan@doe.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "We, the Environmental Organization of Gilan Province, are dedicated to the protection and preservation of the environment in this region. Our mission is to enhance sustainability and preserve the natural beauty of Gilan",
                "label"                 => ['Environment', 'Gilan Province', 'Environmental Protection', 'Eco-friendly'],
                "role_is"               => "seeker",
                "location"              => 'Rasht - Resalat Boulevard - Gilan Environmental Protection General Directorate',
                "profile"               => [
                    'url'        => 'mohit-zist-gilan.png',
                    'image_type' => 'profile',
                    'alt'        => 'mohit-zist-gilan.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "http://www.instagram.com/ardakanglassco",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/profile.php?id=100072362634291",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "National Environmental Agency",
                'last_name'             => "",
                'email'                 => "info@doe.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "We are committed to safeguarding the natural ecosystems of our country and rectifying past environmental damage. Our mission revolves around the prevention and mitigation of environmental destruction and pollution. We assess the environmental carrying capacity, ensuring the sustainable and rational utilization of environmental resources through continuous monitoring.
Moreover, we take proactive steps to address critical environmental issues, including pollution that exceeds the environment's carrying capacity. Our dedication lies in the protection and preservation of our natural heritage, ensuring a cleaner, greener, and more sustainable future for all.
",
                "label"                 => ['Environmental Protection', 'Pollution Prevention', 'Ecological Conservation', 'Environmental Stewardship'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, North side of Hakim Highway, between Sheikh Fazlollah and Yadegar Imam, Pardisan Nature Park, Environmental Protection Organization',
                "profile"               => [
                    'url'        => 'mohit-zist-keshvar.png',
                    'image_type' => 'profile',
                    'alt'        => 'mohit-zist-keshvar.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Tehran municipality",
                'last_name'             => "",
                'email'                 => "info@tehran.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Tehran Municipality, with over a century of experience in urban management, serves the citizens of Tehran as a leading organization in creating a green, vibrant, and smart city. Our mission is to establish a fresh and sustainable environment for all residents of Tehran.
We are dedicated to enhancing the quality of life for our citizens by providing exceptional urban services, developing green spaces and parks, preserving the city's history and culture, and advancing urban development projects. We continually strive for the ongoing improvement of Tehran.
",
                "label"                 => ['Urban Management', 'Tehran Municipality', 'Citizen Services', 'Cultural Heritage'],
                "role_is"               => "seeker",
                "location"              => 'Tehran - South side of City Park - Behesht Street - Central Municipality Building',
                "profile"               => [
                    'url'        => 'shahrdari-tehran.png',
                    'image_type' => 'profile',
                    'alt'        => 'shahrdari-tehran.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "The Specialized Organization for New Cities in Iran",
                'last_name'             => "",
                'email'                 => "info@ntdc.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "The New Cities Construction Company, hereinafter referred to as the Company, is a state-owned enterprise affiliated with the Ministry of Housing and Urban Development, headquartered in Tehran, with subsidiary companies (subsidiaries). It may, when necessary and as required, establish or create subsidiary companies, following the relevant regulations, with the approval of the general assembly, for the purpose of developing new cities in the country through the legal establishment process or by establishing branches or representatives.",
                "label"                 => ['New City Construction', 'Urban Development', 'Housing and Urban Planning', 'Legal Establishment'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, Valiasr Street, North of Vanak Square, Khodami Street, No. 25',
                "profile"               => [
                    'url'        => 'madar-shahr-jadid.svg',
                    'image_type' => 'profile',
                    'alt'        => 'madar-shahr-jadid.svg'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "The Organization of Industrial Estates of the Country",
                'last_name'             => "",
                'email'                 => "info@isipo.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "The Organization of Industrial Townships of the Country, as an experienced organization with a strong emphasis on strategic objectives, is dedicated to achieving significant and long-term results in the development of the country's industries. Our mission in all organization activities is centered on the question: How can we realize the overarching goals of creating development and progress for the country in future periods?",
                "label"                 => ['National Progress', 'Knowledge-Driven Organization', 'Economic Growth', 'Knowledge-Driven Organization'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, Kurdistan Highway, Attar Street, Law Enforcement Street, No. 10',
                "profile"               => [
                    'url'        => 'shahrak-sanati-iran.png',
                    'image_type' => 'profile',
                    'alt'        => 'shahrak-sanati-iran.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Dade Pardazi of iran",
                'last_name'             => "",
                'email'                 => "mahdavi.h@dpi.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Iran Data Processing Company, with over five decades of stable, successful, and effective presence in the country's information technology industry, defines its core activity as supporting and assisting all information technology users as its customers. Throughout its many years of operation, the company has strived to be at the forefront of offering innovative products and services based on market needs, ensuring the fulfillment of software and hardware requirements from a diverse range of sources rather than being limited to a specific supplier. Over the course of half a century of activity, the company has been able to provide satisfactory technical and economic performance and continues to thrive in the professional and business domains of the country with even more strength.",
                "label"                 => ['Technology Solutions', 'Professional Expertise', 'Information Technology', 'Industry Integrity'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, Dr. Nijatollahi Street, Kolantry Intersection, Corner of Lbaf Street, No. 164',
                "profile"               => [
                    'url'        => 'dadepardazi-iran.png',
                    'image_type' => 'profile',
                    'alt'        => 'dadepardazi-iran.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Snap Company",
                'last_name'             => "",
                'email'                 => "info@snapp.cab",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "IdeaGozin Romak Communications Company, operating under the brand name Snapp, was launched in the year 1393 (Persian calendar, equivalent to 2014). Snapp is a dynamic, data-driven company that draws its strength from the creative minds of Iranian youth. The company started its activities with a small team and, in less than a few years, transformed into the largest intelligent transportation system in Iran. Dr. Eyad Alkassar and Dr. Mahmoud Foz are the co-founders of this company. Snapp's application, after four years of operation, evolved into a super-app, and it now offers a wide range of services. In the Snapp app, you can request various transportation options, such as cars, motorcycles, and vans, order food, access online medical services and counseling, book affordable hotels and accommodations, purchase airplane and bus tickets, and more, all in one comprehensive platform",
                "label"                 => ['Intelligent Transportation', 'Ride-hailing', 'Mobility Services', 'Medical Services'],
                "role_is"               => "seeker",
                "location"              => '2 Falahi Street, Zafaraniyeh, Tehran, Iran, at the intersection of Moqaddas Ardabili Street.',
                "profile"               => [
                    'url'        => 'snappTextLogo.svg',
                    'image_type' => 'profile',
                    'alt'        => 'snappTextLogo.svg'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://instagram.com/snapp_team",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/snapp_team",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address"            => " https://linkedin.com/company/snapp.ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "The Ministry of Information and Communication Technology of the Country",
                'last_name'             => "",
                'email'                 => "info@ict.gov.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "The Ministry of Communications and Information Technology is one of the 19 government ministries in Iran, responsible for the planning, support, and development of Iran's national telecommunications and information capabilities. This ministry commenced its operations on March 11, 2017, and has gone through several name changes, including the Ministry of Posts, Telegraph, and Telephone, and later, the Ministry of Communications and Information Technology (ICT).",
                "label"                 => ['Information Technology', 'Ministry of Communications', 'Technology Development', 'Iranian Telecommunications'],
                "role_is"               => "seeker",
                "location"              => 'Shariati Street, above Qods (Qasr) Intersection, Entrance Number 4 - Central Building of the Ministry.',
                "profile"               => [
                    'url'        => '39537_orig.png',
                    'image_type' => 'profile',
                    'alt'        => '39537_orig.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/doe.ir",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => "https://twitter.com/doe_ir",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Pardis Tiles",
                'last_name'             => "",
                'email'                 => "tavakoli@tileiran.co",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Engineer Naser Yaghoobzadeh, your servant and owner of the Namaad and Kashiran brand With consideration of the cultural shift in Iranian society,Established the first and most extensive online tile store in Iran.",
                "label"                 => ['Wholesale tiles', 'Ceramic products', 'Global tile comparisons', 'Tile technology'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, above Sadeghiyeh Metro Station, Valiasr Street, beginning of East Etemadian Street, Number 27',
                "profile"               => [
                    'url'        => 'kashiran.svg',
                    'image_type' => 'profile',
                    'alt'        => 'kashiran.svg'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/tileiran_co/",
                    ],
//                    [
//                        "social_media_title" => "twitter",
//                        "address"            => "https://twitter.com/doe_ir",
//                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "The National Refineries Company",
                'last_name'             => "",
                'email'                 => "info@mop.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "The National Iranian Oil Refining and Distribution Company is one of the four principal companies under the Iranian Ministry of Petroleum, itself comprising six subsidiary companies. Additionally, it oversees the operations of nine refineries in Iran (which have been privatized since 2011). The National Iranian Oil Refining and Distribution Company employs a workforce of 20,000 individuals.
This company was established by the Iranian Ministry of Petroleum in 1991, following the principle of separating the activities of downstream companies from those of the higher-level petroleum companies.
",
                "label"                 => ['National Iranian Oil Refining', 'Petroleum Company Iran', 'Ministry of Petroleum', 'Downstream Oil Industry'],
                "role_is"               => "seeker",
                "location"              => 'Tehran, Taleghani Street, at the intersection of Hafez Street, Ministry of Petroleum Building.',
                "profile"               => [
                    'url'        => 'Sherkate-meli-palayesh.jpg',
                    'image_type' => 'profile',
                    'alt'        => 'Sherkate-meli-palayesh.jpg'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "linkedin",
                        "address"            => "https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fwww.mop.ir%2Ffa-IR%2FPortal%2F4924%2Fnews%2Fview%2F14616%2F6899%2FStaging%2F%D8%A7%D8%B1%D8%AA%D8%A8%D8%A7%D8%B7-%D8%A8%D8%A7-%D9%85%D8%A7",
                    ],
//                    [
//                        "social_media_title" => "twitter",
//                        "address"            => "https://twitter.com/doe_ir",
//                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "Iran Polymer Company",
                'last_name'             => "",
                'email'                 => "info@polymer.ir",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "Iran Polymer Company was established in 1994 with the goal of producing polymer products, and it currently offers a wide range of polymer products to the market with an annual production capacity of 20,000 tons. The company utilizes advanced knowledge and technology, emphasizing the needs and satisfaction of its customers to deliver high-quality products in markets related to paints and coatings, textiles, composites, and electrical insulators.
Among the latest achievements in introducing new products to the market by Iran Polymer are product groups such as Poly Anamels, a line of enameled wire products, basic water-based products for various industries, and a special group of UV Cure products.
With an experienced technical team and a commitment to being a reliable supplier, Iran Polymer is ready to design products tailored to specific customer needs, fostering long-term collaborations with its business partners.
",
                "label"                 => ['Reliable supplier', 'Water-based products', 'Composites', 'Paints and coatings'],
                "role_is"               => "seeker",
                "location"              => 'Isfahan - Saadi Garden Street - Across from IRIB (Islamic Republic of Iran Broadcasting) - Reif Group',
                "profile"               => [
                    'url'        => 'polimer-iran.png',
                    'image_type' => 'profile',
                    'alt'        => 'polimer-iran.png'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/tileiran_co/",
                    ],
//                    [
//                        "social_media_title" => "twitter",
//                        "address"            => "https://twitter.com/doe_ir",
//                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "The Calculators Company",
                'last_name'             => "",
                'email'                 => "info@mohaseban.org",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "In 2008, Mojtaba and Mehdi, students majoring in accounting at the undergraduate level, came to the realization that accounting students face a serious issue of insufficient experience and mental preparedness upon completing their education to enter the professional working environment. Consequently, in the same year, shortly after being accepted into the Master's degree program, they decided to establish the Afagh Spadana Accountants Institute, a specialized accounting education center in Isfahan, Iran.",
                "label"                 => ['Educational center', 'Accounting students', 'Professional preparedness', 'Accounting education'],
                "role_is"               => "seeker",
                "location"              => 'Isfahan, Palestine Street, Alley Number 1 (Adel).',
                "profile"               => [
                    'url'        => 'mohaseban.png',
                    'image_type' => 'profile',
                    'alt'        => 'admin of Landa Trip'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "instagram",
                        "address"            => "https://www.instagram.com/mohasebanacc/",
                    ],
//                    [
//                        "social_media_title" => "twitter",
//                        "address"            => "https://twitter.com/doe_ir",
//                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ], [
                'header_pic'            => [
                    'url'        => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt'        => ' - Landa Trip'
                ],
                'thumbnail_pic'         => [
                    'url'        => '',
                    'image_type' => 'thumbnail',
                    'alt'        => ' - Landa Trip'
                ],
                'first_name'            => "picturethisai",
                'last_name'             => "",
                'email'                 => ": support@picturethisai.com",
                'email_verified_at'     => Carbon::now(),
                'password'              => bcrypt("diacotest123"),
                "about_me"              => "PictureThis offers a powerful plant identifier to identify flowers, leaves, trees, herbs, and more in seconds! You'll also develop your green thumb, get personalized gardening tips, and become a gardening expert! ",
                "label"                 => ['Plant identifier', 'Gardening tips', 'Herb recognition', 'Plant identification tool'],
                "role_is"               => "seeker",
                "location"              => 'Isfahan, Palestine Street, Alley Number 1 (Adel).',
                "profile"               => [
                    'url'        => 'picture-this.webp',
                    'image_type' => 'profile',
                    'alt'        => 'picture-this.webp'
                ],
                "user_documents"        => [],
                "role"                  => "seeker",
                "social_media"          => [
                    [
                        "social_media_title" => "facebook",
                        "address"            => "https://www.facebook.com/PictureThisAI",
                    ],
                    [
                        "social_media_title" => "twitter",
                        "address"            => ": https://twitter.com/i/flow/login?redirect_after_login=%2Fpicturethisai%2F",
                    ],
                ],
                "user_education"        => [
                    [
                        "title"      => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree"     => "Bachelor's degree",
                        "from"       => "2018",
                        "to"         => "2022",
                        "location"   => "Iran",
                        "about"      => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title"        => "Web developer",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2022",
                        "to"           => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title"        => "Programming intern",
                        "location"     => "Iran",
                        "job_type"     => JobTypeEnum::hybrid,
                        "description"  => "",
                        "from"         => "2011",
                        "to"           => null
                    ]
                ],
            ]
        ];

        foreach ($items as $item) {
            $userObj = new User($item);
            unset($userObj["header_pic"], $userObj["thumbnail_pic"], $userObj["profile"], $userObj["social_media"], $userObj["role"], $userObj["user_documents"], $userObj["user_education"], $userObj["user_work_experiences"]);
            $userObj->save();

            $userObj->addRole($item["role"]);

            if ($item["profile"]) {
                $imageObj = new Image($item["profile"]);
                $userObj->images()->save($imageObj);
            }
            // User Education - Educational Background
            foreach ($item["user_education"] as $education) {
                $userEducation = new UserEducation($education);
                $userObj->userEducations()->save($userEducation);
            }

            // User Company - Work Experiment
            foreach ($item["user_work_experiences"] as $company) {
                $userCompany = new UserWorkExperience($company);
                $userObj->userExperience()->save($userCompany);
            }

            if (array_key_exists("social_media", $item)) {
                foreach ($item["social_media"] as $socialMediaRecord) {
                    $socialMediaObj = SocialMedia::where("title", "like", $socialMediaRecord["social_media_title"])->first();
                    if ($socialMediaObj) {
                        $socialMediaObj->users()->attach($userObj, [
                            "address" => $socialMediaRecord["address"]
                        ]);
                    }
                }
            }
        }
    }
}
