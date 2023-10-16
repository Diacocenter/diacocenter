<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title"             => "What is Diaco",
                "body"              => '<div><div class=""><p class="text-h1 my-2">What is Diaco</p><p class="my-8">As we mentioned in the article what is Diaco, Diaco is an intermediary company between technology seekers and technology providers. In this company, we are trying to make useful connections between technology seekers and technology providers. Do you know How Diaco works? In this article, we will tell you everything about Diaco and the way of its working. <br> So, stick around till the end of the article.</p></div><div class="px-10"><p class="text-h3 my-2">Who are technology Seekers</p><p class="text-body1 my-8">Technology seeker refers to individuals or businesses which are actively searching for technology solutions to meet their specific needs or challenges. A group of people who need new technology to boost their business, So they need a professional group to provide new technology for them.</p></div><div class="px-10"><p class="text-h3 my-2">Who are technology Providers</p><p class="text-body1 my-8">a technology provider is an individual, organization or company that offers technology solutions and creates new technologies to meet the needs of the projects. Technology providers play an important role in delivering technology solutions that solve the specific challenges of technology seekers. They offer their profession and services to help businesses improve and boost their business.</p></div><div class=""><p class="text-h2 my-2">Membership in Diaco system</p><p class="text-body1  my-8">As we the first step to cooperate with Diaco is to complete the registration process in the system. You can contact our experts to get information and registration guides. As we mentioned, everything that is needed for you to be a part of our company and expand your business is to fill out the registration form on our website and complete your profile information. <br><a href="#" class="text-primary">Link</a></p></div><div class=""><p class="text-h2 my-2">Project registration steps of Diaco</p><p class="text-body1  my-8">Depending on your role as a technology seeker or technology provider, you have a different registration process. If you are a technology seeker, you must completely explain your project, your condition, your issue and everything about your needed technology. But if you are a technology provider, you should complete your profile and all of the information related to your knowledge and expertise. The more accurate and detailed information you provide, it will be easier for technology seekers to find you. <br><a href="#" class="text-primary">Click here to register and complete your profile.</a></p></div><div class="px-10"><p class="text-h3 my-2">Fill out your profile in Diaco</p><p class="text-body1  my-8">Complete your profile carefully so the artificial intelligence(AI) can provide you better offers based on your expertise. Try to mention different fields of your business and everything that you want to be provided.<br><a href="#" class="text-primary">Fill out Your Profile</a></p></div><div class=""><p class="text-h2 my-2">Diaco works on</p><p class="text-body1  my-8">Diaco works on various items which include assistance with contracts, negotiations, payments, and technical support and consultation. In the rest of the article, for a better understanding, we will explain each one separately.</p></div><div class="px-10"><p class="text-h3 my-2">Diaco works on negotiations</p><p class="text-body1  my-8">Diaco acts as a neutral intermediary element between both parties of the contract. This company acts like a supervisor and tries to resolve the disputes between the parties involved in negotiations.</p></div><div class="px-10"><p class="text-h3 my-2">Diaco works on payments</p><p class="text-body1  my-8">Diaco tries to make you feel sure about the security of your payments. With Diaco, you can do your transactions without any worries. Everybody knows that technology costs can be high and conducting transactions and payments can involve high risks. Therefore, we need a platform which allows us to deposit or receive our payments with the highest level of security. Diaco is the best platform to meet these needs.</p></div><div class="px-10"><p class="text-h3 my-2">Diaco works on technical support</p><p class="text-body1  my-8">Diaco goes along in all steps of your activity, whether you join as a technology provider, a technology seeker or even as an ordinary person seeking to enhance their experience or knowledge. In all of these situations, Diaco assists you with its team of professional experts. We assure you, that wherever you need specialized consultation, our Specialists will help you and never leave you in this challenging route. Trust us and leave your business and technology development to us. <br><a href="#" class="text-primary">Contact Us</a></p></div></div>',
                "user_id"           => User::where("first_name", "like", "Iman")->first()->id,
                "short_description" => "Diaco is an intermediary company between technology seekers and technology providers. It doesn't matter that you are a technology seeker or a technology provider. Diaco is the best choice for you.",
                'header_image'      => [
                    'url'           => 'diaco-explain.png',
                    'image_type'    => 'header',
                    'alt'           => 'diaco-explain'
                ],
                'thumbnail_image'   => [
                    'url'           => 'man-work.png',
                    'image_type'    => 'thumbnail',
                    'alt'           => 'man-work'
                ],
            ],
            [
                "title"             => "How Diaco works",
                "body"              => '<div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-21">How Diaco works</h1> <p class="fs-17 mt-5">Diaco Introduction</p><p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8"> Diaco is an intermediary company between technology seekers and technology providers. Are you a technology seeker or technology provider looking for the pxrfect solution to address your business needs? Or pxrhaps you are a technology provider searching for the ideal platform to showcase your innovative offerings? Look no further than Diaco, the leading intermediary company bridging the gap between technology seekers and providers. To get useful information, follow us till the end of the article or contact Diaco company expxrts. </p></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">Why should I choose Diaco?</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Diaco is the best and most reliable choice for technology seekers and providers or those who are creative in this field. At Diaco, we understand navigating the vast landscapx of technology can be overwhelming. That is why we have dedicated ourselves to creating an efficient platform that connects technology seekers and technology providers to meet their needs. Diaco is here to guide you every step of the way. </p></div><div class="px-5 px-md-10 mt-10"> <h1 class="fs-9 letter-space-2px">What are the benefits of the Diaco platform?</h1> <ol class="Montserrat mt-5 text-justify fw-medium fs-8"> <li class="my-10"> Extensive Network: Diaco boasts an extensive network of technology providers, carefully curated to ensure they meet our rigorous standards. We have established strong partnerships with industry-leading companies, startups, and individual expxrts, offering you a vast pool of options to find the pxrfect match for your requirements. </li><li class="my-10"> Customized Recommendations: We understand that every business is unique, with distinct goals and challenges. Our team of expxrienced technology consultants takes the time to understand your spxcific needs, allowing us to recommend the most suitable providers and solutions for your organization. We are proud of ourselves for offering pxrsonalized recommendations that align with your goals and deliver the desired results. </li><li class="my-10"> Simplified Process: With Diaco, the process of finding and engaging with technology providers becomes remarkably simplified. We provide a centralized center where you as a technology seeker or technology provider can easily meet your needs and save you valuable time and effort. </li><li class="my-10"> Quality Assurance: Diaco ensures the quality and reliability of the technology providers on its platform. Before being showcased, providers undergo a thorough evaluation process that includes assessing their track record, expxrtise, and customer feedback. This commitment to quality gives users confidence in the technology solutions they discover through Diaco. </li></ol> </div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">Who is the Diaco online platform for?</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Diaco online platform is designed for a wide range of users, including businesses of all sizes, technology seekers, technology providers, entrepreneurs, innovators, individuals, and professionals. </p></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">Who are the target users of Diaco?</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">The target users of Diaco are individuals and organizations from various sectors seeking technology solutions. This includes businesses of all sizes, entrepreneurs, innovators, freelancers, consultants, and professionals in need of technological expxrtise. </p></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">How does the Diaco platform work?</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">The Diaco platform works as an intermediary between technology seekers and technology providers. It offers a streamlined process, pxrsonalized recommendations, and a trusted network of providers, catering to the diverse needs of businesses, entrepreneurs, innovators, individuals, and professionals. Diaco Group is trying to supply the best, fastest and the most reliable technology services for you with the newest technology of 4th and 5th generation. </p></div>',
                "user_id"           => User::where("first_name", "like", "Fahimeh")->first()->id,
                "short_description" => "Diaco bridging the gap between technology seekers and providers.Depending on your role as a technology seeker or technology provider, you have a different registration process. For more information,",
                'header_image'      => [
                    'url'        => 'how-diaco-work.png',
                    'image_type' => 'header',
                    'alt'        => 'how-diaco-work'
                ],
                'thumbnail_image'   => [
                    'url'        => 'diaco-work.png',
                    'image_type' => 'thumbnail',
                    'alt'        => 'how-diaco-work'
                ],
            ],
            [
                "title"             => "The Complete Beginner’s Guide to Technology Market",
                "body"              => '<div class="px-5 px-md-0 pe-lg-12"> <h1 class="fs-21">The Complete Beginner’s Guide to Technology Market</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Before entering the technology market, you must have an interview of technology and its various aspects. As a beginner in technology, here’s all you need for entering the Technology market. In this article, Diaco will describe some of the most important advice and guidance for beginners and help them to enter the market place and familiarize them with the most basic methods of technology purchasing, technology providing, etc. Follow us to the end or call Diaco’s experts and get a free consultation. </p></div><div class=" px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">The Importance Of Technology</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Technology plays an important role in every aspect of our lives.It can help companies find the best deals on goods and services. Technology can help companies analyze data to find trends that will help them save money on their purchases. Also, businesses need technology to update their equipment and create new methods. For this reason, Diaco was founded as an intermediary company between technology seekers and technology providers to fulfill their demands. </p></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">Technology Purchasing</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Technology purchasing refers to the process of acquiring various technological equipment, products and services for organizational or personal needs. It is related to technology seekers and those who are willing to buy technology from technology providers in order to develop their business. </p><div class="px-5 px-md-0 px-lg-12 mt-10"> <h1 class="fs-14 letter-space-2px">Essential Tips About Purchasing Technology</h1> <ul class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8"> <li class="my-3"> First of all, you must identify your technological needs. </li><li class="my-3"> After that, you should search for an appropriate technology provider to buy technology from. </li><li class="my-3"> Then, you must set a budget and determine how much you are willing to spend on the technology purchases. </li><li class="my-3"> Finally, choose the best option according to your needs. </li></ul> </div></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-17">The Complete Beginner’s Guide To Technology Market</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8">Before entering the technology market, you must have an interview of technology and its various aspects. As a beginner in technology, here’s all you need for entering the Technology market.In this article, Diaco will describe some of the most important advice and guidance for beginners and help them to enter the market place and familiarize them with the most basic methods of technology purchasing, technology providing, etc. Follow us to the end or call Diaco’s experts and get a free consultation. </p></div><div class="px-5 px-md-0 pe-lg-12 mt-10"> <h1 class="fs-19">Technology Providing</h1> <p class="Montserrat mt-5 text-justify fw-medium lh-2 fs-8"> Technology providing refers to providing or supplying technological products or services for organizations or individuals.It is related to technology providers who are trying to meet the specific needs of the technology seekers and make them grow in the technology market. </p><div class="px-5 px-md-0 px-lg-12 mt-10"> <h1 class="fs-17">Essential Tips For Providing Technology</h1> <ul class="Montserrat mt-5 fw-medium fs-8"> <li class="my-3"> Search for a business, organization or an individual which is according to your priority and profession. </li><li class="my-3"> You must understand customer needs. </li><li class="my-3"> You should always stay updated with new technology trends. </li></ul> <p class="my-5 Montserrat fw-medium lh-2 fs-8"> No matter if you are a beginner or a professional. Diaco is the best choice for you to fulfill your requirements according to your position. </p></div></div>',
                "user_id"           => User::where("first_name", "like", "Maryam")->first()->id,
                "short_description" => "Before entering the technology market, you must have a clear perspective about technology and its various aspects. In this article, Diaco will describe some of the most important guidance for beginners ...",
                'header_image'      => [
                    'url'        => 'complete-beginner.png',
                    'image_type' => 'header',
                    'alt'        => 'complete-beginner'
                ],
                'thumbnail_image'   => [
                    'url'        => 'male-worker.png',
                    'image_type' => 'thumbnail',
                    'alt'        => 'male-worker'
                ],
            ],
        ];

        foreach ($items as $item) {
            $articleObj = new Article($item);
            unset($articleObj["header_image"], $articleObj["thumbnail_image"]);
            $articleObj->save();

            if ($item["header_image"]) {
                $imageObj = new Image($item["header_image"]);
                $articleObj->images()->save($imageObj);
            }

            if ($item["thumbnail_image"]) {
                $imageObj = new Image($item["thumbnail_image"]);
                $articleObj->images()->save($imageObj);
            }
        }

    }
}
