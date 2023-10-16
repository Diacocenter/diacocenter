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
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Iman",
                'last_name' => "Nasr Esfahani",
                'email' => "iman.nasr.esfhan@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Iman Nasr has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "advisor",
                "location" => 1,
                "profile" => [
                    'url' => 'iman-nasr.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip',
                ],
                "user_documents" => [],
                "role" => "advisor",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com/iman-nasr-esfahan",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/iman.nasr.esfahani?igshid=MDM4ZDc5MmU=",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com/profile.php?id=100090810848190",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://ir.linkedin.com/in/iman-nasr-esfahani-b798a8184",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "Regional Planning",
                        "university" => "University of tehran",
                        "degree" => "Master's degree",
                        "from" => "2012",
                        "to" => "2015",
                        "location" => "Iran",
                        "about" => ""
                    ],
                    [
                        "title" => "",
                        "university" => "Tehran University",
                        "degree" => "Bachelor's degree",
                        "from" => "2007",
                        "to" => "2011",
                        "location" => "Iran",
                        "about" => "",
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title" => "Founder",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2021",
                        "to" => null
                    ],
                    [
                        "company_name" => "Melale",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2019",
                        "to" => "2022"
                    ]
                ],
            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Fatemeh",
                'last_name' => "Safi",
                'email' => "fatemesafi21@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Fatemeh Safi has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "provider",
                "location" => 1,
                "profile" => [
                    'url' => 'fateme-safi.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip',
                ],
                "user_documents" => [],
                "role" => "provider",
                "social_media" => [
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fatemesafi_?igshid=MDM4ZDc5MmU=",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree" => "Bachelor's degree",
                        "from" => "2018",
                        "to" => "2022",
                        "location" => "Iran",
                        "about" => ""
                    ],
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title" => "Founder",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2021",
                        "to" => null
                    ],
                ],
            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Fahimeh",
                'last_name' => "Sajadi",
                'email' => "fahimehsjd77@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Fahimeh Sajadi has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "provider",
                "location" => 1,
                "profile" => [
                    'url' => 'fahimeh-sajadi.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "provider",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "Computer Engineer",
                        "university" => "University of Shahre-kord",
                        "degree" => "",
                        "from" => "2017",
                        "to" => "2021",
                        "location" => "Iran",
                        "about" => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2023",
                        "to" => null
                    ],
                    [
                        "company_name" => "University Isfahan",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2022",
                        "to" => "2023"
                    ],
                    [
                        "company_name" => "Isfahan Hub",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2019",
                        "to" => "2022"
                    ],
                ],

            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Lida",
                'last_name' => "Parvizi",
                'email' => "lida.parvizi.business@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Lida has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "seeker",
                "location" => 1,
                "profile" => [
                    'url' => 'lida-parvizi.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "seeker",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "Computer Hardware Engineering",
                        "university" => "Sepahan University",
                        "degree" => "Bachelor's degree",
                        "from" => "2007",
                        "to" => "2011",
                        "location" => "Iran",
                        "about" => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "irimmigration",
                        "title" => "assistant",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2021",
                        "to" => null
                    ],
                    [
                        "company_name" => "Forough Roshan Pasargad",
                        "title" => "Office affairs",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2021",
                        "to" => null
                    ]
                ],
            ],
            // Admins
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Ehsan",
                'last_name' => "Aliakbari",
                'email' => "ehsanaliakbari.landa@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Ehsan Aliakbari has a long background on digital marketing and now he focused on effect of new technologies on the old and vintage industries.",
                "skills" => "teaching",
                "role_is" => "admin",
                "location" => 1,
                "profile" => [
                    'url' => 'ehsan-aliakbari.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "admin",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com/",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/in/ehsan-aliakbari/",
                    ],
                ],
                "user_education" => [

                    [
                        "title" => "Graphic",
                        "university" => "Payame Noor University",
                        "degree" => "Bachelor's degree",
                        "from" => "2015",
                        "to" => "2019",
                        "location" => "Iran",
                        "about" => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Freelance",
                        "title" => "Graphic Designer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2010",
                        "to" => null
                    ],

                ],
            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Pedram",
                'last_name' => "Najafi",
                'email' => "pedram_najafi@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Pedram has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "admin",
                "location" => 1,
                "profile" => [
                    'url' => 'pedram-najafi.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "admin",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [

                    [
                        "title" => "",
                        "university" => "",
                        "degree" => "",
                        "from" => "",
                        "to" => "",
                        "location" => "",
                        "about" => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "",
                        "title" => "",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "",
                        "to" => ""
                    ],

                ],
            ],
            // Seekers
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Maryam",
                'last_name' => "Eskandari",
                'email' => "maryameskandari.landa@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Maryam eskandari acts as a copy writer and content creater who is interested in the field of new technologies in renovation of the old methods and increasing the productivity of businesses.",
                "skills" => "teaching",
                "role_is" => "seeker",
                "location" => 1,
                "profile" => [
                    'url' => 'maryam-eskandari.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "seeker",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/real_minee?igshid=MzNlNGNkZWQ4Mg==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com/",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/in/maryam-eskandari-62136a265/",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "science ",
                        "university" => "saremiye2",
                        "degree" => "diploma",
                        "from" => "2017",
                        "to" => "2020",
                        "location" => "Iran",
                        "about" => ""
                    ], [
                        "title" => "master of psychology",
                        "university" => "Azad university of Isfahan",
                        "degree" => "master",
                        "from" => "2020",
                        "to" => null,
                        "location" => "Iran",
                        "about" => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Trip",
                        "title" => "Content Creator",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2023",
                        "to" => null
                    ],
                    [
                        "company_name" => "Diaco Center",
                        "title" => "Content Creator",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2023",
                        "to" => null
                    ]
                ],

            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Matin",
                'last_name' => "Janghorban",
                'email' => "matin.jn2007@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Matin has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "seeker",
                "location" => 1,
                "profile" => [
                    'url' => 'matin-janghorban.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "seeker",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [

                    [
                        "title" => "",
                        "university" => "",
                        "degree" => "",
                        "from" => "",
                        "to" => "",
                        "location" => "",
                        "about" => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "",
                        "title" => "",
                        "location" => "",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "",
                        "to" => ""
                    ],

                ],
            ],
            // Providers
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Ali",
                'last_name' => "Khavari",
                'email' => "sdyarash@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Ali Khavari has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "provider",
                "location" => 1,
                "profile" => [

                    'url' => 'ali-khavari.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "provider",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [

                    [
                        "title" => "Bussines management",
                        "university" => "University of Isfahan",
                        "degree" => "Bachelor's degree",
                        "from" => "2019",
                        "to" => null,
                        "location" => "Iran",
                        "about" => ""
                    ]
                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Landa Startup school",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::onSite,
                        "title" => "Intern",
                        "description" => "",
                        "from" => "2021",
                        "to" => null
                    ],
                    [
                        "company_name" => "Forough Roshan Co",
                        "title" => "Accounting",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2022",
                        "to" => null
                    ],

                ],
            ],
            [
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Mohammad",
                'last_name' => "Asgarian",
                'email' => "asgarianm17@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Mohammad has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "provider",
                "location" => 1,
                "profile" => [
                    'url' => 'mohammad-asgarian.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "provider",
                "social_media" => [
                    [
                        "social_media_title" => "twitter",
                        "address" => "https://twitter.com",
                    ],
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/fahimsjd?igshid=ZGUzMzM3NWJiOQ==",
                    ],
                    [
                        "social_media_title" => "facebook",
                        "address" => "https://www.facebook.com",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/mwlite/in/fahimeh-sajadi-50a399202",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "IT",
                        "university" => "Najaf Abad University",
                        "degree" => "Bachelor's degree",
                        "from" => "2019",
                        "to" => "2022",
                        "location" => "Iran",
                        "about" => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2022",
                        "to" => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title" => "Programming intern",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2011",
                        "to" => null
                    ]
                ],
            ],[
                'header_pic' => [
                    'url' => 'Landa-trip-header.webp',
                    'image_type' => 'header',
                    'alt' => ' - Landa Trip'
                ],
                'thumbnail_pic' => [
                    'url' => '',
                    'image_type' => 'thumbnail',
                    'alt' => ' - Landa Trip'
                ],
                'first_name' => "Arshia",
                'last_name' => "Nasiri",
                'email' => "marshian03@gmail.com",
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt("diacotest123"),
                "about_me" => "Arshia has a passion on all technology and engineering fields. Now he researching on applying new technologies in rebuilding and renovation of the old methods.",
                "skills" => "teaching",
                "role_is" => "seeker",
                "location" => 1,
                "profile" => [
                    'url' => 'arshia-nasiri.png',
                    'image_type' => 'profile',
                    'alt' => 'admin of Landa Trip'
                ],
                "user_documents" => [],
                "role" => "seeker",
                "social_media" => [
                    [
                        "social_media_title" => "instagram",
                        "address" => "https://instagram.com/marshian03?igshid=MzRlODBiNWFlZA==",
                    ],
                    [
                        "social_media_title" => "linkedin",
                        "address" => "https://www.linkedin.com/in/mohammad-arshia-nasiri-2058361a9/",
                    ],
                ],
                "user_education" => [
                    [
                        "title" => "Computer Engineering",
                        "university" => "University of isfahan",
                        "degree" => "Bachelor's degree",
                        "from" => "2018",
                        "to" => "2022",
                        "location" => "Iran",
                        "about" => ""
                    ],

                ],
                "user_work_experiences" => [
                    [
                        "company_name" => "Forough Roshan Co",
                        "title" => "Web developer",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2022",
                        "to" => null
                    ],
                    [
                        "company_name" => "Landa Startup school",
                        "title" => "Programming intern",
                        "location" => "Iran",
                        "job_type" => JobTypeEnum::hybrid,
                        "description" => "",
                        "from" => "2011",
                        "to" => null
                    ]
                ],
            ],
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
