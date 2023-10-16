<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title"               => "Robots for SMEs: Automation to combat shortage of skilled workers Robots for SMEs:",
                "body"                => '<h1 class="fs-17">Robots for SMEs: Automation to combat shortage of skilled workers</h1><p class="Montserrat mt-10 text-justify fw-medium lh-2 fs-8">Robots for SMEs: Automation to combat shortage of skilled workers<br>Shortage of skilled workers, difficult delivery conditions and high energy costs: German SMEs are struggling with major challenges. According to a global survey by the Manpower Group, 75% of all entrepreneurs said they had difficulty filling positions. The use of industrial robots is intended to provide a remedy.<br>"It is becoming more difficult to find employees, especially for physically demanding and at the same time monotonous tasks. The turnover of skilled workers is particularly high in these types of tasks," says Gerhard Müller, responsible for the regions Germany, Austria and Switzerland within KUKA\'s robotics division.<br>The Augsburg-based automation professional is therefore increasingly targeting small and medium-sized companies with tailored products and solutions, but has observed a long period of reticence: "Many entrepreneurs have so far shied away from the use of robots. Automation is too complex, too expensive and there is too much skepticism in the team," Müller continues.</p><div class="mt-5"><a class="text-light-blue Montserrat text-light-blue">https://www.kuka.com/en-de/company/press/news/2023/05/automatisierung-im-mittelstand</a></div>',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => 'Shortage of skilled workers, difficult delivery conditions and high energy costs: German SMEs are struggling with major challenges. According to a global survey by the Manpower Group, 75% of all entrepreneurs said they had difficulty filling positions. The use of industrial robots is intended to provide a remedy.',
                'header_image'        => [
                    'url'             => 'sms-robot.png',
                    'image_type'      => 'header',
                    'alt'             => 'sms-robot'
                ],
            ],
            [
                "title"               => "Humanly is Ahead of the Pack in using AI to Hire at Scale",
                "body"                => '<p class="Montserrat mt-10 text-justify fw-medium lh-2 fs-8">Automation in recruiting has been a goal for years. In today’s fast-paced and competitive job market, time is money. Whatever you can do to speed things up will give your company a competitive edge. But automation in recruiting communication has often been impersonal and clunky – that all changes with Artificial Intelligence (AI) We’ve already discussed in a previous blog how AI is changing recruiting. One company was a very early adopter: Humanly. They have been at the forefront of the AI hiring revolution, and have been using conversational AI to hire more efficiently since 2018.<br>Humanity uses AI to create advanced conversations that allow employers to hire at an unprecedented scale. “We’re really excited about how employers can use Humanly for high volume recruiting,” says Bianca Nieves, Head of Demand Generation at Humanly. “If you’re trying to hire many people at once, we can save so much time. We like to think of it as making the recruiter “superhuman.”</p><div class="mt-5"><a class="text-light-blue Montserrat text-light-blue">https://talentreachnw.com/humanly-is-ahead-of-the-pack-in-using-ai-to-hire-at-scale</a></div>',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => 'Automation in recruiting has been a goal for years. In today’s fast-paced and competitive job market, time is money. Whatever you can do to speed things up will give your company a competitive edge. But automation in recruiting communication has often been impersonal and clunky – that all changes with Artificial Intelligence (AI) We’ve already discussed in a previous blog how AI is changing recruiting. One company was a very early adopter: Humanly.',
                'header_image'        => [
                    'url'             => 'humanly.png',
                    'image_type'      => 'header',
                    'alt'             => 'humanly'
                ],
            ],
            [
                "title"               => "Improve performance, lower costs, and enhance security with AWS silicon Silicon",
                "body"                => '<p class="Montserrat mt-10 text-justify fw-medium lh-2 fs-8"><br>Silicon chips are the foundation of modern computing. And with more workloads moving to the cloud, it makes sense to use silicon that is specifically built for the cloud. That’s why AWS custom-designs its silicon chips to be more efficient and sustainable, which helps you maximize performance and save money.<br>Tune in to AWS Silicon Innovation Day on June 21, at 9 a.m. Pacific Time at</p><div class="mt-5"><a class="text-light-blue Montserrat text-light-blue">twitch.tv/awsonair or LinkedIn</a></div>',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => 'Silicon chips are the foundation of modern computing. And with more workloads moving to the cloud, it makes sense to use silicon that is specifically built for the cloud. That’s why AWS custom-designs its silicon chips to be more efficient and sustainable, which helps you maximize performance and save money.',
                'header_image'        => [
                    'url'             => 'improve-performance.png',
                    'image_type'      => 'header',
                    'alt'             => 'improve-performance'
                ],
            ],
            [
                "title"               => "Robotics for a more effective cancer treatment: KUKA at the ICRA robotics conference in London",
                "body"                => '<p class="Montserrat mt-10 text-justify fw-medium lh-2 fs-8">New technologies such as sensitive robotics are opening up new possibilities, particularly in medicine, for treating patients more gently and in a more tar-geted manner. KUKA\'s sensitive lightweight robot LBR Med, for example, is the first collaborative robot to be certified specifically for integration into a medical device, thus opening up new treatment options.<br>At the IEEE Robotics and Automation Society\'s flagship conference from May 29 to June 2, KUKA and partners will showcase innovative applications using the LBR Med, including a robotic magnetic endoscopy for painless colon cancer screening.</p><div class="mt-5"><a class="text-light-blue Montserrat text-light-blue">https://www.kuka.com/en-de/company/press/news/2023/05/icra-2023</a></div>',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => 'New technologies such as sensitive robotics are opening up new possibilities, particularly in medicine, for treating patients more gently and in a more tar-geted manner. KUKA\'s sensitive lightweight robot LBR Med, for example, is the first collaborative robot to be certified specifically for integration into a medical device, thus opening up new treatment options. ',
                'header_image'        => [
                    'url'             => 'effective-robot.png',
                    'image_type'      => 'header',
                    'alt'             => 'effective-robot'
                ],
            ],
            [
                "title"               => "Hard Truths about Soft Skills Soft skills.",
                "body"                => '<p class="Montserrat mt-10 text-justify fw-medium lh-2 fs-8">Interpersonal skills. Emotional Quotient. There are lots of names for those human characteristics that define how one interacts with the people around you. When employers write up a job description, most people focus on the technical requirements for a position. In the past, the bar for “soft skills” was pretty low – as long as you could get along and work with others, that might be enough. But in today’s hiring landscape, the definition of these skills has expanded, and they are often critical. In fact, even in technical roles, they are sometimes the most important. For this reason, the role of the recruiter has never been more important, as a good recruiter can use their skills to determine if a candidate is going to possess the right “soft skills” for an organization.<br>The technical skills required of a position are just the building blocks of what will be success in a role. It’s the human skills that will be the defining factor. On a client call, our recruiters spend just as much time talking about soft and hard skills. Every company is different, and there are myriad factors going into what clients need. Often they don’t even know themselves. If they are hiring a developer, it’s easy to list what languages or competencies they need. But when faced with resumes with the same skills and the same amount of experience, how to dig deeper?</p><div class="mt-5"><a class="text-light-blue Montserrat text-light-blue">https://talentreachnw.com/hard-truths-about-soft-skills/</a></div>',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => 'Soft skills. Interpersonal skills. Emotional Quotient. There are lots of names for those human characteristics that define how one interacts with the people around you. When employers write up a job description, most people focus on the technical requirements for a position. In the past, the bar for “soft skills” was pretty low – as long as you could get along and work with others, that might be enough. But in today’s hiring landscape, the definition of these skills has expanded, and they are often critical.',
                'header_image'        => [
                    'url'             => 'hard-truths.png',
                    'image_type'      => 'header',
                    'alt'             => 'hard-truths'
                ],
            ],
            [
                "title"               => "Breakthrough in Quantum Computing: Researchers Develop Scalable Quantum Processor",
                "body"                => '',
                "user_id"             => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description"   => '',
                'header_image'        => [
                    'url'             => 'breakthrough.png',
                    'image_type'      => 'header',
                    'alt'             => 'breakthrough'
                ],
            ],
        ];

        foreach ($items as $item) {
            $newObj = new News($item);
            unset($newObj["header_image"]);
            $newObj->save();

            if ($item["header_image"]) {
                $imageObj = new Image($item["header_image"]);
                $newObj->images()->save($imageObj);
            }
        }
    }
}
