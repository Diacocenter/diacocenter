<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                "language" => "English",
                "items"    => [
                    // Southern Asia
                    ["name" => "Afghanistan"],
                    ["name" => "Bangladesh"],
                    ["name" => "Bhutan"],
                    ["name" => "India"],
                    ["name" => "Iran"],
                    ["name" => "Maldives"],
                    ["name" => "Nepal"],
                    ["name" => "Pakistan"],
                    ["name" => "Sri Lanka"],

                    // Polynesia
                    ["name" => "American Samoa"],
                    ["name" => "Cook Islands"],
                    ["name" => "Fiji"],
                    ["name" => "French Polynesia"],
                    ["name" => "Niue"],
                    ["name" => "Samoa"],
                    ["name" => "Tonga"],
                    ["name" => "Tuvalu"],
                    ["name" => "Wallis and Futuna"],

                    // Melanesia
                    ["name" => "Fiji"],
                    ["name" => "New Caledonia"],
                    ["name" => "Papua New Guinea"],
                    ["name" => "Solomon Islands"],
                    ["name" => "Vanuatu"],

                    // Australia and New Zealand
                    ["name" => "Australia"],
                    ["name" => "New Zealand"],

                    // Micronesia
                    ["name" => "Guam"],
                    ["name" => "Kiribati"],
                    ["name" => "Marshall Islands"],
                    ["name" => "Micronesia (Federated States of)"],
                    ["name" => "Nauru"],
                    ["name" => "Northern Mariana Islands"],
                    ["name" => "Palau"],

                    // Southeastern Asia
                    ["name" => "Brunei Darussalam"],
                    ["name" => "Cambodia"],
                    ["name" => "Indonesia"],
                    ["name" => "Lao People's Democratic Republic"],
                    ["name" => "Malaysia"],
                    ["name" => "Myanmar"],
                    ["name" => "Philippines"],
                    ["name" => "Singapore"],
                    ["name" => "Thailand"],
                    ["name" => "Timor-Leste"],
                    ["name" => "Vietnam"],

                    // Eastern Asia
                    ["name" => "China"],
                    ["name" => "Japan"],
                    ["name" => "Mongolia"],
                    ["name" => "North Korea"],
                    ["name" => "South Korea"],
                    ["name" => "Taiwan"],

                    // Central Asia
                    ["name" => "Kazakhstan"],
                    ["name" => "Kyrgyzstan"],
                    ["name" => "Tajikistan"],
                    ["name" => "Turkmenistan"],
                    ["name" => "Uzbekistan"],

                    // Western Asia
                    ["name" => "Armenia"],
                    ["name" => "Azerbaijan"],
                    ["name" => "Bahrain"],
                    ["name" => "Cyprus"],
                    ["name" => "Georgia"],
                    ["name" => "Iraq"],
                    ["name" => "Israel"],
                    ["name" => "Jordan"],
                    ["name" => "Kuwait"],
                    ["name" => "Lebanon"],
                    ["name" => "Oman"],
                    ["name" => "Qatar"],
                    ["name" => "Saudi Arabia"],
                    ["name" => "State of Palestine"],
                    ["name" => "Syria"],
                    ["name" => "Turkey"],
                    ["name" => "United Arab Emirates"],
                    ["name" => "Yemen"],

                    // Eastern Europe
                    ["name" => "Belarus"],
                    ["name" => "Bulgaria"],
                    ["name" => "Czech Republic"],
                    ["name" => "Hungary"],
                    ["name" => "Moldova"],
                    ["name" => "Poland"],
                    ["name" => "Romania"],
                    ["name" => "Russia"],
                    ["name" => "Slovakia"],
                    ["name" => "Ukraine"],

                    // Northern Europe
                    ["name" => "Denmark"],
                    ["name" => "Estonia"],
                    ["name" => "Finland"],
                    ["name" => "Iceland"],
                    ["name" => "Ireland"],
                    ["name" => "Latvia"],
                    ["name" => "Lithuania"],
                    ["name" => "Norway"],
                    ["name" => "Sweden"],
                    ["name" => "United Kingdom"],

                    // Western Europe
                    ["name" => "Andorra"],
                    ["name" => "Austria"],
                    ["name" => "Belgium"],
                    ["name" => "France"],
                    ["name" => "Germany"],
                    ["name" => "Liechtenstein"],
                    ["name" => "Luxembourg"],
                    ["name" => "Monaco"],
                    ["name" => "Netherlands"],
                    ["name" => "Switzerland"],

                    // Southern Europe
                    ["name" => "Albania"],
                    ["name" => "Bosnia and Herzegovina"],
                    ["name" => "Croatia"],
                    ["name" => "Greece"],
                    ["name" => "Italy"],
                    ["name" => "Malta"],
                    ["name" => "Montenegro"],
                    ["name" => "North Macedonia"],
                    ["name" => "Portugal"],
                    ["name" => "San Marino"],
                    ["name" => "Serbia"],
                    ["name" => "Slovenia"],
                    ["name" => "Spain"],
                    ["name" => "Holy See"],

                    // Northern Africa
                    ["name" => "Algeria"],
                    ["name" => "Egypt"],
                    ["name" => "Libya"],
                    ["name" => "Morocco"],
                    ["name" => "Sudan"],
                    ["name" => "Tunisia"],

                    // Western Africa
                    ["name" => "Benin"],
                    ["name" => "Burkina Faso"],
                    ["name" => "Cabo Verde"],
                    ["name" => "Côte d'Ivoire"],
                    ["name" => "Gambia"],
                    ["name" => "Ghana"],
                    ["name" => "Guinea"],
                    ["name" => "Guinea-Bissau"],
                    ["name" => "Liberia"],
                    ["name" => "Mali"],
                    ["name" => "Mauritania"],
                    ["name" => "Niger"],
                    ["name" => "Nigeria"],
                    ["name" => "Senegal"],
                    ["name" => "Sierra Leone"],
                    ["name" => "Togo"],

                    // Middle Africa
                    ["name" => "Angola"],
                    ["name" => "Cameroon"],
                    ["name" => "Central African Republic"],
                    ["name" => "Chad"],
                    ["name" => "Congo"],
                    ["name" => "Democratic Republic of the Congo"],
                    ["name" => "Equatorial Guinea"],
                    ["name" => "Gabon"],

                    // Eastern Africa
                    ["name" => "Burundi"],
                    ["name" => "Comoros"],
                ],
            ],
            [
                "language" => "French",
                "items"    => [
                    // Asie du Sud
                    ["name" => "Afghanistan"],
                    ["name" => "Bangladesh"],
                    ["name" => "Bhoutan"],
                    ["name" => "Inde"],
                    ["name" => "Iran"],
                    ["name" => "Maldives"],
                    ["name" => "Népal"],
                    ["name" => "Pakistan"],
                    ["name" => "Sri Lanka"],

                    // Polynésie
                    ["name" => "Samoa américaines"],
                    ["name" => "Îles Cook"],
                    ["name" => "Fidji"],
                    ["name" => "Polynésie française"],
                    ["name" => "Niue"],
                    ["name" => "Samoa"],
                    ["name" => "Tonga"],
                    ["name" => "Tuvalu"],
                    ["name" => "Wallis et Futuna"],

                    // Mélanésie
                    ["name" => "Fidji"],
                    ["name" => "Nouvelle-Calédonie"],
                    ["name" => "Papouasie-Nouvelle-Guinée"],
                    ["name" => "Îles Salomon"],
                    ["name" => "Vanuatu"],

                    // Australie et Nouvelle-Zélande
                    ["name" => "Australie"],
                    ["name" => "Nouvelle-Zélande"],

                    // Micronésie
                    ["name" => "Guam"],
                    ["name" => "Kiribati"],
                    ["name" => "Îles Marshall"],
                    ["name" => "Micronésie (États fédérés de)"],
                    ["name" => "Nauru"],
                    ["name" => "Îles Mariannes du Nord"],
                    ["name" => "Palaos"],

                    // Asie du Sud-Est
                    ["name" => "Brunéi Darussalam"],
                    ["name" => "Cambodge"],
                    ["name" => "Indonésie"],
                    ["name" => "République démocratique populaire lao"],
                    ["name" => "Malaisie"],
                    ["name" => "Myanmar"],
                    ["name" => "Philippines"],
                    ["name" => "Singapour"],
                    ["name" => "Thaïlande"],
                    ["name" => "Timor oriental"],
                    ["name" => "Viêt Nam"],

                    // Asie de l'Est
                    ["name" => "Chine"],
                    ["name" => "Japon"],
                    ["name" => "Mongolie"],
                    ["name" => "Corée du Nord"],
                    ["name" => "Corée du Sud"],
                    ["name" => "Taïwan"],

                    // Asie centrale
                    ["name" => "Kazakhstan"],
                    ["name" => "Kirghizistan"],
                    ["name" => "Tadjikistan"],
                    ["name" => "Turkménistan"],
                    ["name" => "Ouzbékistan"],

                    // Asie occidentale
                    ["name" => "Arménie"],
                    ["name" => "Azerbaïdjan"],
                    ["name" => "Bahreïn"],
                    ["name" => "Chypre"],
                    ["name" => "Géorgie"],
                    ["name" => "Irak"],
                    ["name" => "Israël"],
                    ["name" => "Jordanie"],
                    ["name" => "Koweït"],
                    ["name" => "Liban"],
                    ["name" => "Oman"],
                    ["name" => "Qatar"],
                    ["name" => "Arabie saoudite"],
                    ["name" => "État de Palestine"],
                    ["name" => "Syrie"],
                    ["name" => "Turquie"],
                    ["name" => "Émirats arabes unis"],
                    ["name" => "Yémen"],

                    // Europe de l'Est
                    ["name" => "Biélorussie"],
                    ["name" => "Bulgarie"],
                    ["name" => "République tchèque"],
                    ["name" => "Hongrie"],
                    ["name" => "Moldavie"],
                    ["name" => "Pologne"],
                    ["name" => "Roumanie"],
                    ["name" => "Russie"],
                    ["name" => "Slovaquie"],
                    ["name" => "Ukraine"],

                    // Europe du Nord
                    ["name" => "Danemark"],
                    ["name" => "Estonie"],
                    ["name" => "Finlande"],
                    ["name" => "Islande"],
                    ["name" => "Irlande"],
                    ["name" => "Lettonie"],
                    ["name" => "Lituanie"],
                    ["name" => "Norvège"],
                    ["name" => "Suède"],
                    ["name" => "Royaume-Uni"],

                    // Europe de l'Ouest
                    ["name" => "Andorre"],
                    ["name" => "Autriche"],
                    ["name" => "Belgique"],
                    ["name" => "France"],
                    ["name" => "Allemagne"],
                    ["name" => "Liechtenstein"],
                    ["name" => "Luxembourg"],
                    ["name" => "Monaco"],
                    ["name" => "Pays-Bas"],
                    ["name" => "Suisse"],

                    // Europe du Sud
                    ["name" => "Albanie"],
                    ["name" => "Bosnie-Herzégovine"],
                    ["name" => "Croatie"],
                    ["name" => "Grèce"],
                    ["name" => "Italie"],
                    ["name" => "Malte"],
                    ["name" => "Monténégro"],
                    ["name" => "Macédoine du Nord"],
                    ["name" => "Portugal"],
                    ["name" => "Saint-Marin"],
                    ["name" => "Serbie"],
                    ["name" => "Slovénie"],
                    ["name" => "Espagne"],
                    ["name" => "Saint-Siège"],

                    // Afrique du Nord
                    ["name" => "Algérie"],
                    ["name" => "Égypte"],
                    ["name" => "Libye"],
                    ["name" => "Maroc"],
                    ["name" => "Soudan"],
                    ["name" => "Tunisie"],

                    // Afrique de l'Ouest
                    ["name" => "Bénin"],
                    ["name" => "Burkina Faso"],
                    ["name" => "Cap-Vert"],
                    ["name" => "Côte d'Ivoire"],
                    ["name" => "Gambie"],
                    ["name" => "Ghana"],
                    ["name" => "Guinée"],
                    ["name" => "Guinée-Bissau"],
                    ["name" => "Libéria"],
                    ["name" => "Mali"],
                    ["name" => "Mauritanie"],
                    ["name" => "Niger"],
                    ["name" => "Nigeria"],
                    ["name" => "Sénégal"],
                    ["name" => "Sierra Leone"],
                    ["name" => "Togo"],

                    // Afrique centrale
                    ["name" => "Angola"],
                    ["name" => "Cameroun"],
                    ["name" => "République centrafricaine"],
                    ["name" => "Tchad"],
                    ["name" => "Congo"],
                    ["name" => "République démocratique du Congo"],
                    ["name" => "Guinée équatoriale"],
                    ["name" => "Gabon"],

                    // Afrique de l'Est
                    ["name" => "Burundi"],
                    ["name" => "Comores"]
                ]
            ],
            [
                "language" => "Persian",
                "items"    => [
                    // جنوب آسیا
                    ["name" => "افغانستان"],
                    ["name" => "بنگلادش"],
                    ["name" => "بوتان"],
                    ["name" => "هند"],
                    ["name" => "ایران"],
                    ["name" => "مالدیو"],
                    ["name" => "نپال"],
                    ["name" => "پاکستان"],
                    ["name" => "سری‌لانکا"],

                    // پلینزیا
                    ["name" => "ساموآی آمریکا"],
                    ["name" => "جزایر کوک"],
                    ["name" => "فیجی"],
                    ["name" => "پلی‌نزی فرانسه"],
                    ["name" => "نیوئه"],
                    ["name" => "ساموآ"],
                    ["name" => "تونگا"],
                    ["name" => "تووالو"],
                    ["name" => "والیس و فوتونا"],

                    // ملانزیا
                    ["name" => "فیجی"],
                    ["name" => "کالدونیای جدید"],
                    ["name" => "پاپوآ گینه نو"],
                    ["name" => "جزایر سلیمان"],
                    ["name" => "وانواتو"],

                    // استرالیا و نیوزیلند
                    ["name" => "استرالیا"],
                    ["name" => "نیوزیلند"],

                    // میکرونزیا
                    ["name" => "گوام"],
                    ["name" => "کیریباتی"],
                    ["name" => "جزایر مارشال"],
                    ["name" => "میکرونزی (ایالات فدرال)"],
                    ["name" => "نائورو"],
                    ["name" => "جزایر ماریانای شمالی"],
                    ["name" => "پالائو"],

                    // جنوب شرق آسیا
                    ["name" => "برونئی"],
                    ["name" => "کامبوج"],
                    ["name" => "اندونزی"],
                    ["name" => "جمهوری دموکراتیک لائوس"],
                    ["name" => "مالزی"],
                    ["name" => "میانمار"],
                    ["name" => "فیلیپین"],
                    ["name" => "سنگاپور"],
                    ["name" => "تایلند"],
                    ["name" => "تیمور شرقی"],
                    ["name" => "ویتنام"],

                    // آسیای شرقی
                    ["name" => "چین"],
                    ["name" => "ژاپن"],
                    ["name" => "مغولستان"],
                    ["name" => "کره شمالی"],
                    ["name" => "کره جنوبی"],
                    ["name" => "تایوان"],

                    // آسیای مرکزی
                    ["name" => "قزاقستان"],
                    ["name" => "قرقیزستان"],
                    ["name" => "تاجیکستان"],
                    ["name" => "ترکمنستان"],
                    ["name" => "ازبکستان"],

                    // آسیای غربی
                    ["name" => "ارمنستان"],
                    ["name" => "آذربایجان"],
                    ["name" => "بحرین"],
                    ["name" => "قبرس"],
                    ["name" => "گرجستان"],
                    ["name" => "عراق"],
                    ["name" => "اسرائیل"],
                    ["name" => "اردن"],
                    ["name" => "کویت"],
                    ["name" => "لبنان"],
                    ["name" => "عمان"],
                    ["name" => "قطر"],
                    ["name" => "عربستان سعودی"],
                    ["name" => "دولت فلسطین"],
                    ["name" => "سوریه"],
                    ["name" => "ترکیه"],
                    ["name" => "امارات متحده عربی"],
                    ["name" => "یمن"],

                    // اروپای شرقی
                    ["name" => "بلاروس"],
                    ["name" => "بلغارستان"],
                    ["name" => "جمهوری چک"],
                    ["name" => "مجارستان"],
                    ["name" => "مولداوی"],
                    ["name" => "لهستان"],
                    ["name" => "رومانی"],
                    ["name" => "روسیه"],
                    ["name" => "اسلواکی"],
                    ["name" => "اوکراین"],

                    // اروپای شمالی
                    ["name" => "دانمارک"],
                    ["name" => "استونی"],
                    ["name" => "فنلاند"],
                    ["name" => "ایسلند"],
                    ["name" => "ایرلند"],
                    ["name" => "لتونی"],
                    ["name" => "لیتوانی"],
                    ["name" => "نروژ"],
                    ["name" => "سوئد"],
                    ["name" => "پادشاهی متحده"],

                    // اروپای غربی
                    ["name" => "آندورا"],
                    ["name" => "اتریش"],
                    ["name" => "بلژیک"],
                    ["name" => "فرانسه"],
                    ["name" => "آلمان"],
                    ["name" => "لیختن اشتاین"],
                    ["name" => "لوکزامبورگ"],
                    ["name" => "موناکو"],
                    ["name" => "هلند"]
                ]
            ]
        ];
    }
}
