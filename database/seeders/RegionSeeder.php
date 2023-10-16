<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =
            [
                [
                    "language" => "English",
                    "items" => [
                        [
                            "name" => "Asia",
                            "countries" => [
                                ["name" => "Afghanistan", "code" => "AF", "phone" => "+93"],
                                ["name" => "Armenia", "code" => "AM", "phone" => "+374"],
                                ["name" => "Azerbaijan", "code" => "AZ", "phone" => "+994"],
                                ["name" => "Bahrain", "code" => "BH", "phone" => "+973"],
                                ["name" => "Bangladesh", "code" => "BD", "phone" => "+880"],
                                ["name" => "Bhutan", "code" => "BT", "phone" => "+975"],
                                ["name" => "Brunei", "code" => "BN", "phone" => "+673"],
                                ["name" => "Cambodia", "code" => "KH", "phone" => "+855"],
                                ["name" => "China", "code" => "CN", "phone" => "+86"],
                                ["name" => "Cyprus", "code" => "CY", "phone" => "+357"],
                                ["name" => "East Timor", "code" => "TL", "phone" => "+670"],
                                ["name" => "Georgia", "code" => "GE", "phone" => "+995"],
                                ["name" => "India", "code" => "IN", "phone" => "+91"],
                                ["name" => "Indonesia", "code" => "ID", "phone" => "+62"],
                                ["name" => "Iran", "code" => "IR", "phone" => "+98"],
                                ["name" => "Iraq", "code" => "IQ", "phone" => "+964"],
                                ["name" => "Israel", "code" => "IL", "phone" => "+972"],
                                ["name" => "Japan", "code" => "JP", "phone" => "+81"],
                                ["name" => "Jordan", "code" => "JO", "phone" => "+962"],
                                ["name" => "Kazakhstan", "code" => "KZ", "phone" => "+7"],
                                ["name" => "Kuwait", "code" => "KW", "phone" => "+965"],
                                ["name" => "Kyrgyzstan", "code" => "KG", "phone" => "+996"],
                                ["name" => "Laos", "code" => "LA", "phone" => "+856"],
                                ["name" => "Lebanon", "code" => "LB", "phone" => "+961"],
                                ["name" => "Malaysia", "code" => "MY", "phone" => "+60"],
                                ["name" => "Maldives", "code" => "MV", "phone" => "+960"],
                                ["name" => "Mongolia", "code" => "MN", "phone" => "+976"],
                                ["name" => "Myanmar", "code" => "MM", "phone" => "+95"],
                                ["name" => "Nepal", "code" => "NP", "phone" => "+977"],
                                ["name" => "North Korea", "code" => "KP", "phone" => "+850"],
                                ["name" => "Oman", "code" => "OM", "phone" => "+968"],
                                ["name" => "Pakistan", "code" => "PK", "phone" => "+92"],
                                ["name" => "Palestine", "code" => "PS", "phone" => "+970"],
                                ["name" => "Philippines", "code" => "PH", "phone" => "+63"],
                                ["name" => "Qatar", "code" => "QA", "phone" => "+974"],
                                ["name" => "Saudi Arabia", "code" => "SA", "phone" => "+966"],
                                ["name" => "Singapore", "code" => "SG", "phone" => "+65"],
                                ["name" => "South Korea", "code" => "KR", "phone" => "+82"],
                                ["name" => "Sri Lanka", "code" => "LK", "phone" => "+94"],
                                ["name" => "Syria", "code" => "SY", "phone" => "+963"],
                                ["name" => "Taiwan", "code" => "TW", "phone" => "+886"],
                                ["name" => "Tajikistan", "code" => "TJ", "phone" => "+992"],
                                ["name" => "Thailand", "code" => "TH", "phone" => "+66"],
                                ["name" => "Turkey", "code" => "TR", "phone" => "+90"],
                                ["name" => "Turkmenistan", "code" => "TM", "phone" => "+993"],
                                ["name" => "United Arab Emirates", "code" => "AE", "phone" => "+971"],
                                ["name" => "Uzbekistan", "code" => "UZ", "phone" => "+998"],
                                ["name" => "Vietnam", "code" => "VN", "phone" => "+84"],
                                ["name" => "Yemen", "code" => "YE", "phone" => "+967"]
                            ]
                        ],
                        [
                            "name" => "America",
                            "countries" => [
                                ["name" => "Antigua and Barbuda", "code" => "AG", "phone" => "+1-268"],
                                ["name" => "Argentina", "code" => "AR", "phone" => "+54"],
                                ["name" => "Bahamas", "code" => "BS", "phone" => "+1-242"],
                                ["name" => "Barbados", "code" => "BB", "phone" => "+1-246"],
                                ["name" => "Belize", "code" => "BZ", "phone" => "+501"],
                                ["name" => "Bolivia", "code" => "BO", "phone" => "+591"],
                                ["name" => "Brazil", "code" => "BR", "phone" => "+55"],
                                ["name" => "Canada", "code" => "CA", "phone" => "+1"],
                                ["name" => "Chile", "code" => "CL", "phone" => "+56"],
                                ["name" => "Colombia", "code" => "CO", "phone" => "+57"],
                                ["name" => "Costa Rica", "code" => "CR", "phone" => "+506"],
                                ["name" => "Cuba", "code" => "CU", "phone" => "+53"],
                                ["name" => "Dominica", "code" => "DM", "phone" => "+1-767"],
                                ["name" => "Dominican Republic", "code" => "DO", "phone" => "+1-809 and 1-829"],
                                ["name" => "Ecuador", "code" => "EC", "phone" => "+593"],
                                ["name" => "El Salvador", "code" => "SV", "phone" => "+503"],
                                ["name" => "Grenada", "code" => "GD", "phone" => "+1-473"],
                                ["name" => "Guatemala", "code" => "GT", "phone" => "+502"],
                                ["name" => "Guyana", "code" => "GY", "phone" => "+592"],
                                ["name" => "Haiti", "code" => "HT", "phone" => "+509"],
                                ["name" => "Honduras", "code" => "HN", "phone" => "+504"],
                                ["name" => "Jamaica", "code" => "JM", "phone" => "+1-876"],
                                ["name" => "Mexico", "code" => "MX", "phone" => "+52"],
                                ["name" => "Nicaragua", "code" => "NI", "phone" => "+505"],
                                ["name" => "Panama", "code" => "PA", "phone" => "+507"],
                                ["name" => "Paraguay", "code" => "PY", "phone" => "+595"],
                                ["name" => "Peru", "code" => "PE", "phone" => "+51"],
                                ["name" => "Saint Kitts and Nevis", "code" => "KN", "phone" => "+1-869"],
                                ["name" => "Saint Lucia", "code" => "LC", "phone" => "+1-758"],
                                ["name" => "Saint Vincent and the Grenadines", "code" => "VC", "phone" => "+1-784"],
                                ["name" => "Suriname", "code" => "SR", "phone" => "+597"],
                                ["name" => "Trinidad and Tobago", "code" => "TT", "phone" => "+1-868"],
                                ["name" => "United States", "code" => "US", "phone" => "+1"],
                                ["name" => "Uruguay", "code" => "UY", "phone" => "+598"],
                                ["name" => "Venezuela", "code" => "VE", "phone" => "+58"]]
                        ],
                        [
                            "name" => "Europe",
                            "countries"=>[
                                [ "name" => "Albania", "code" => "AL", "phone" => "+355" ],

                                [ "name" => "Andorra", "code" => "AD", "phone" => "+376" ],

                                [ "name" => "Austria", "code" => "AT", "phone" => "+43" ],

                                [ "name" => "Belarus", "code" => "BY", "phone" => "+375" ],

                                [ "name" => "Belgium", "code" => "BE", "phone" => "+32" ],

                                [ "name" => "Bosnia and Herzegovina", "code" => "BA", "phone" => "+387" ],

                                [ "name" => "Bulgaria", "code" => "BG", "phone" => "+359" ],

                                [ "name" => "Croatia", "code" => "HR", "phone" => "+385" ],

                                [ "name" => "Cyprus", "code" => "CY", "phone" => "+357" ],

                                [ "name" => "Czech Republic", "code" => "CZ", "phone" => "+420" ],

                                [ "name" => "Denmark", "code" => "DK", "phone" => "+45" ],

                                [ "name" => "Estonia", "code" => "EE", "phone" => "+372" ],

                                [ "name" => "Finland", "code" => "FI", "phone" => "+358" ],

                                [ "name" => "France", "code" => "FR", "phone" => "+33" ],

                                [ "name" => "Germany", "code" => "DE", "phone" => "+49" ],

                                [ "name" => "Greece", "code" => "GR", "phone" => "+30" ],

                                [ "name" => "Hungary", "code" => "HU", "phone" => "+36" ],

                                [ "name" => "Iceland", "code" => "IS", "phone" => "+354" ],

                                [ "name" => "Ireland", "code" => "IE", "phone" => "+353" ],

                                [ "name" => "Italy", "code" => "IT", "phone" => "+39" ],

                                [ "name" => "Kosovo", "code" => "XK", "phone" => "+383" ],

                                [ "name" => "Latvia", "code" => "LV", "phone" => "+371" ],

                                [ "name" => "Liechtenstein", "code" => "LI", "phone" => "+423" ],

                                [ "name" => "Lithuania", "code" => "LT", "phone" => "+370" ],

                                [ "name" => "Luxembourg", "code" => "LU", "phone" => "+352" ],

                                [ "name" => "Malta", "code" => "MT", "phone" => "+356" ],

                                [ "name" => "Moldova", "code" => "MD", "phone" => "+373" ],

                                [ "name" => "Monaco", "code" => "MC", "phone" => "+377" ],

                                [ "name" => "Montenegro", "code" => "ME", "phone" => "+382" ],

                                [ "name" => "Netherlands", "code" => "NL", "phone" => "+31" ],

                                [ "name" => "North Macedonia", "code" => "MK", "phone" => "+389" ],

                                [ "name" => "Norway", "code" => "NO", "phone" => "+47" ],

                                [ "name" => "Poland", "code" => "PL", "phone" => "+48" ],

                                [ "name" => "Portugal", "code" => "PT", "phone" => "+351" ],

                                [ "name" => "Romania", "code" => "RO", "phone" => "+40" ],

                                [ "name" => "Russia", "code" => "RU", "phone" => "+7" ],

                                [ "name" => "San Marino", "code" => "SM", "phone" => "+378" ],

                                [ "name" => "Serbia", "code" => "RS", "phone" => "+381" ],

                                [ "name" => "Slovakia", "code" => "SK", "phone" => "+421" ],

                                [ "name" => "Slovenia", "code" => "SI", "phone" => "+386" ],

                                [ "name" => "Spain", "code" => "ES", "phone" => "+34" ],

                                [ "name" => "Sweden", "code" => "SE", "phone" => "+46" ],

                                [ "name" => "Switzerland", "code" => "CH", "phone" => "+41" ],

                                [ "name" => "Ukraine", "code" => "UA", "phone" => "+380" ],

                                [ "name" => "United Kingdom", "code" => "GB", "phone" => "+44" ],

                                [ "name" => "Vatican City", "code" => "VA", "phone" => "+379" ],


                                ]
                        ],
                        [
                            "name"=> "Africa",
                            "countries"=>[
                                [ "name" => "Algeria", "code" => "DZ", "phone" => "+213" ],

                                [ "name" => "Angola", "code" => "AO", "phone" => "+244" ],

                                [ "name" => "Benin", "code" => "BJ", "phone" => "+229" ],

                                [ "name" => "Botswana", "code" => "BW", "phone" => "+267" ],

                                [ "name" => "Burkina Faso", "code" => "BF", "phone" => "+226" ],

                                [ "name" => "Burundi", "code" => "BI", "phone" => "+257" ],

                                [ "name" => "Cameroon", "code" => "CM", "phone" => "+237" ],

                                [ "name" => "Cape Verde", "code" => "CV", "phone" => "+238" ],

                                [ "name" => "Central African Republic", "code" => "CF", "phone" => "+236" ],

                                [ "name" => "Chad", "code" => "TD", "phone" => "+235" ],

                                [ "name" => "Comoros", "code" => "KM", "phone" => "+269" ],

                                [ "name" => "Democratic Republic of the Congo", "code" => "CD", "phone" => "+243" ],

                                [ "name" => "Republic of the Congo", "code" => "CG", "phone" => "+242" ],

                                [ "name" => "Côte d'Ivoire", "code" => "CI", "phone" => "+225" ],

                                [ "name" => "Djibouti", "code" => "DJ", "phone" => "+253" ],

                                [ "name" => "Egypt", "code" => "EG", "phone" => "+20" ],

                                [ "name" => "Equatorial Guinea", "code" => "GQ", "phone" => "+240" ],

                                [ "name" => "Eritrea", "code" => "ER", "phone" => "+291" ],

                                [ "name" => "Eswatini", "code" => "SZ", "phone" => "+268" ],

                                [ "name" => "Ethiopia", "code" => "ET", "phone" => "+251" ],

                                [ "name" => "Gabon", "code" => "GA", "phone" => "+241" ],

                                [ "name" => "Gambia", "code" => "GM", "phone" => "+220" ],

                                [ "name" => "Ghana", "code" => "GH", "phone" => "+233" ],

                                [ "name" => "Guinea", "code" => "GN", "phone" => "+224" ],

                                [ "name" => "Guinea-Bissau", "code" => "GW", "phone" => "+245" ],

                                [ "name" => "Kenya", "code" => "KE", "phone" => "+254" ],

                                [ "name" => "Lesotho", "code" => "LS", "phone" => "+266" ],

                                [ "name" => "Liberia", "code" => "LR", "phone" => "+231" ],

                                [ "name" => "Libya", "code" => "LY", "phone" => "+218" ],

                                [ "name" => "Madagascar", "code" => "MG", "phone" => "+261" ],

                                [ "name" => "Malawi", "code" => "MW", "phone" => "+265" ],

                                [ "name" => "Mali", "code" => "ML", "phone" => "+223" ],

                                [ "name" => "Mauritania", "code" => "MR", "phone" => "+222" ],

                                [ "name" => "Mauritius", "code" => "MU", "phone" => "+230" ],

                                [ "name" => "Morocco", "code" => "MA", "phone" => "+212" ],

                                [ "name" => "Mozambique", "code" => "MZ", "phone" => "+258" ],

                                [ "name" => "Namibia", "code" => "NA", "phone" => "+264" ],

                                [ "name" => "Niger", "code" => "NE", "phone" => "+227" ],

                                [ "name" => "Nigeria", "code" => "NG", "phone" => "+234" ],

                                [ "name" => "Rwanda", "code" => "RW", "phone" => "+250" ],

                                [ "name" => "São Tomé and Príncipe", "code" => "ST", "phone" => "+239" ],

                                [ "name" => "Senegal", "code" => "SN", "phone" => "+221" ],

                                [ "name" => "Seychelles", "code" => "SC", "phone" => "+248" ],

                                [ "name" => "Sierra Leone", "code" => "SL", "phone" => "+232" ],

                                [ "name" => "Somalia", "code" => "SO", "phone" => "+252" ],

                                [ "name" => "South Africa", "code" => "ZA", "phone" => "+27" ],

                                [ "name" => "South Sudan", "code" => "SS", "phone" => "+211" ],

                                [ "name" => "Sudan", "code" => "SD", "phone" => "+249" ],

                                [ "name" => "Tanzania", "code" => "TZ", "phone" => "+255" ],

                                [ "name" => "Togo", "code" => "TG", "phone" => "+228" ],

                                [ "name" => "Tunisia", "code" => "TN", "phone" => "+216" ],

                                [ "name" => "Uganda", "code" => "UG", "phone" => "+256" ],

                                [ "name" => "Zambia", "code" => "ZM", "phone" => "+260" ],

                                [ "name" => "Zimbabwe", "code" => "ZW", "phone" => "+263" ]

                            ]
                        ],
                        [
                            "name"=> "Oceania ",
                            "countries"=>[
                                [ "name" => "Australia", "code" => "AU", "phone" => "+61" ],

                                [ "name" => "Fiji", "code" => "FJ", "phone" => "+679" ],

                                [ "name" => "Kiribati", "code" => "KI", "phone" => "+686" ],

                                [ "name" => "Marshall Islands", "code" => "MH", "phone" => "+692" ],

                                [ "name" => "Micronesia", "code" => "FM", "phone" => "+691" ],

                                [ "name" => "Nauru", "code" => "NR", "phone" => "+674" ],

                                [ "name" => "New Zealand", "code" => "NZ", "phone" => "+64" ],

                                [ "name" => "Palau", "code" => "PW", "phone" => "+680" ],

                                [ "name" => "Papua New Guinea", "code" => "PG", "phone" => "+675" ],

                                [ "name" => "Samoa", "code" => "WS", "phone" => "+685" ],

                                [ "name" => "Solomon Islands", "code" => "SB", "phone" => "+677" ],

                                [ "name" => "Tonga", "code" => "TO", "phone" => "+676" ],

                                [ "name" => "Tuvalu", "code" => "TV", "phone" => "+688" ],

                                [ "name" => "Vanuatu", "code" => "VU", "phone" => "+678" ]]
                        ]
                    ]
                ],
                [
                    "language" => "French",
                    "items" => [
                        [
                            "name" => "Asia",
                            "countries" =>[
                                [ "name" => "Afghanistan", "code" => "AF", "phone" => "+93" ],

                                [ "name" => "Arabie saoudite", "code" => "SA", "phone" => "+966" ],

                                [ "name" => "Arménie", "code" => "AM", "phone" => "+374" ],

                                [ "name" => "Azerbaïdjan", "code" => "AZ", "phone" => "+994" ],

                                [ "name" => "Bahreïn", "code" => "BH", "phone" => "+973" ],

                                [ "name" => "Bangladesh", "code" => "BD", "phone" => "+880" ],

                                [ "name" => "Bhoutan", "code" => "BT", "phone" => "+975" ],

                                [ "name" => "Brunei", "code" => "BN", "phone" => "+673" ],

                                [ "name" => "Cambodge", "code" => "KH", "phone" => "+855" ],

                                [ "name" => "Chine", "code" => "CN", "phone" => "+86" ],

                                [ "name" => "Chypre", "code" => "CY", "phone" => "+357" ],

                                [ "name" => "Corée du Nord", "code" => "KP", "phone" => "+850" ],

                                [ "name" => "Corée du Sud", "code" => "KR", "phone" => "+82" ],

                                [ "name" => "Émirats arabes unis", "code" => "AE", "phone" => "+971" ],

                                [ "name" => "Géorgie", "code" => "GE", "phone" => "+995" ],

                                [ "name" => "Inde", "code" => "IN", "phone" => "+91" ],

                                [ "name" => "Indonésie", "code" => "ID", "phone" => "+62" ],

                                [ "name" => "Irak", "code" => "IQ", "phone" => "+964" ],

                                [ "name" => "Iran", "code" => "IR", "phone" => "+98" ],

                                [ "name" => "Israël", "code" => "IL", "phone" => "+972" ],

                                [ "name" => "Japon", "code" => "JP", "phone" => "+81" ],

                                [ "name" => "Jordanie", "code" => "JO", "phone" => "+962" ],

                                [ "name" => "Kazakhstan", "code" => "KZ", "phone" => "+7" ],

                                [ "name" => "Kirghizistan", "code" => "KG", "phone" => "+996" ],

                                [ "name" => "Koweït", "code" => "KW", "phone" => "+965" ],

                                [ "name" => "Laos", "code" => "LA", "phone" => "+856" ],

                                [ "name" => "Liban", "code" => "LB", "phone" => "+961" ],

                                [ "name" => "Malaisie", "code" => "MY", "phone" => "+60" ],

                                [ "name" => "Maldives", "code" => "MV", "phone" => "+960" ],

                                [ "name" => "Mongolie", "code" => "MN", "phone" => "+976" ],

                                [ "name" => "Myanmar", "code" => "MM", "phone" => "+95" ],

                                [ "name" => "Népal", "code" => "NP", "phone" => "+977" ],

                                [ "name" => "Oman", "code" => "OM", "phone" => "+968" ],

                                [ "name" => "Ouzbékistan", "code" => "UZ", "phone" => "+998" ],

                                [ "name" => "Pakistan", "code" => "PK", "phone" => "+92" ],

                                [ "name" => "Palestine", "code" => "PS", "phone" => "+970" ],

                                [ "name" => "Philippines", "code" => "PH", "phone" => "+63" ],

                                [ "name" => "Qatar", "code" => "QA", "phone" => "+974" ],

                                [ "name" => "Singapour", "code" => "SG", "phone" => "+65" ],

                                [ "name" => "Sri Lanka", "code" => "LK", "phone" => "+94" ],

                                [ "name" => "Syrie", "code" => "SY", "phone" => "+963" ],

                                [ "name" => "Tadjikistan", "code" => "TJ", "phone" => "+992" ],

                                [ "name" => "Taïwan", "code" => "TW", "phone" => "+886" ],

                                [ "name" => "Thaïlande", "code" => "TH", "phone" => "+66" ],

                                [ "name" => "Timor oriental", "code" => "TL", "phone" => "+670" ],

                                [ "name" => "Turkménistan", "code" => "TM", "phone" => "+993" ],

                                [ "name" => "Turquie", "code" => "TR", "phone" => "+90" ],

                                [ "name" => "Vietnam", "code" => "VN", "phone" => "+84" ],

                                [ "name" => "Yémen", "code" => "YE", "phone" => "+967" ]

                            ]
                        ],
                        [
                            "name" => "Amérique",
                            "countries" =>[
                                [ "name" => "Antigua-et-Barbuda", "code" => "AG", "phone" => "+1-268" ],

                                [ "name" => "Argentine", "code" => "AR", "phone" => "+54" ],

                                [ "name" => "Bahamas", "code" => "BS", "phone" => "+1-242" ],

                                [ "name" => "Barbade", "code" => "BB", "phone" => "+1-246" ],

                                [ "name" => "Belize", "code" => "BZ", "phone" => "+501" ],

                                [ "name" => "Bolivie", "code" => "BO", "phone" => "+591" ],

                                [ "name" => "Brésil", "code" => "BR", "phone" => "+55" ],

                                [ "name" => "Canada", "code" => "CA", "phone" => "+1" ],

                                [ "name" => "Chili", "code" => "CL", "phone" => "+56" ],

                                [ "name" => "Colombie", "code" => "CO", "phone" => "+57" ],

                                [ "name" => "Costa Rica", "code" => "CR", "phone" => "+506" ],

                                [ "name" => "Cuba", "code" => "CU", "phone" => "+53" ],

                                [ "name" => "Dominique", "code" => "DM", "phone" => "+1-767" ],

                                [ "name" => "République dominicaine", "code" => "DO", "phone" => "+1-809 and 1-829" ],

                                [ "name" => "Équateur", "code" => "EC", "phone" => "+593" ],

                                [ "name" => "El Salvador", "code" => "SV", "phone" => "+503" ],

                                [ "name" => "Grenade", "code" => "GD", "phone" => "+1-473" ],

                                [ "name" => "Guatemala", "code" => "GT", "phone" => "+502" ],

                                [ "name" => "Guyana", "code" => "GY", "phone" => "+592" ],

                                [ "name" => "Haïti", "code" => "HT", "phone" => "+509" ],

                                [ "name" => "Honduras", "code" => "HN", "phone" => "+504" ],

                                [ "name" => "Jamaïque", "code" => "JM", "phone" => "+1-876" ],

                                [ "name" => "Mexique", "code" => "MX", "phone" => "+52" ],

                                [ "name" => "Nicaragua", "code" => "NI", "phone" => "+505" ],

                                [ "name" => "Panama", "code" => "PA", "phone" => "+507" ],

                                [ "name" => "Paraguay", "code" => "PY", "phone" => "+595" ],

                                [ "name" => "Pérou", "code" => "PE", "phone" => "+51" ],

                                [ "name" => "Saint-Christophe-et-Niévès", "code" => "KN", "phone" => "+1-869" ],

                                [ "name" => "Sainte-Lucie", "code" => "LC", "phone" => "+1-758" ],

                                [ "name" => "Saint-Vincent-et-les-Grenadines", "code" => "VC", "phone" => "+1-784" ],

                                [ "name" => "Suriname", "code" => "SR", "phone" => "+597" ],

                                [ "name" => "Trinité-et-Tobago", "code" => "TT", "phone" => "+1-868" ],

                                [ "name" => "États-Unis", "code" => "US", "phone" => "+1" ],

                                [ "name" => "Uruguay", "code" => "UY", "phone" => "+598" ],

                                [ "name" => "Venezuela", "code" => "VE", "phone" => "+58" ]

                            ]
                        ],
                        [
                            "name" => "Europe",
                            "countries" =>[
                                [ "name" => "Albanie", "code" => "AL", "phone" => "+355" ],

                                [ "name" => "Andorre", "code" => "AD", "phone" => "+376" ],

                                [ "name" => "Autriche", "code" => "AT", "phone" => "+43" ],

                                [ "name" => "Biélorussie", "code" => "BY", "phone" => "+375" ],

                                [ "name" => "Belgique", "code" => "BE", "phone" => "+32" ],

                                [ "name" => "Bosnie-Herzégovine", "code" => "BA", "phone" => "+387" ],

                                [ "name" => "Bulgarie", "code" => "BG", "phone" => "+359" ],

                                [ "name" => "Croatie", "code" => "HR", "phone" => "+385" ],

                                [ "name" => "Chypre", "code" => "CY", "phone" => "+357" ],

                                [ "name" => "République tchèque", "code" => "CZ", "phone" => "+420" ],

                                [ "name" => "Danemark", "code" => "DK", "phone" => "+45" ],

                                [ "name" => "Estonie", "code" => "EE", "phone" => "+372" ],

                                [ "name" => "Finlande", "code" => "FI", "phone" => "+358" ],

                                [ "name" => "France", "code" => "FR", "phone" => "+33" ],

                                [ "name" => "Allemagne", "code" => "DE", "phone" => "+49" ],

                                [ "name" => "Grèce", "code" => "GR", "phone" => "+30" ],

                                [ "name" => "Hongrie", "code" => "HU", "phone" => "+36" ],

                                [ "name" => "Islande", "code" => "IS", "phone" => "+354" ],

                                [ "name" => "Irlande", "code" => "IE", "phone" => "+353" ],

                                [ "name" => "Italie", "code" => "IT", "phone" => "+39" ],

                                [ "name" => "Kosovo", "code" => "XK", "phone" => "+383" ],

                                [ "name" => "Lettonie", "code" => "LV", "phone" => "+371" ],

                                [ "name" => "Liechtenstein", "code" => "LI", "phone" => "+423" ],

                                [ "name" => "Lituanie", "code" => "LT", "phone" => "+370" ],

                                [ "name" => "Luxembourg", "code" => "LU", "phone" => "+352" ],

                                [ "name" => "Malte", "code" => "MT", "phone" => "+356" ],

                                [ "name" => "Moldavie", "code" => "MD", "phone" => "+373" ],

                                [ "name" => "Monaco", "code" => "MC", "phone" => "+377" ],

                                [ "name" => "Monténégro", "code" => "ME", "phone" => "+382" ],

                                [ "name" => "Pays-Bas", "code" => "NL", "phone" => "+31" ],

                                [ "name" => "Macédoine du Nord", "code" => "MK", "phone" => "+389" ],

                                [ "name" => "Norvège", "code" => "NO", "phone" => "+47" ],

                                [ "name" => "Pologne", "code" => "PL", "phone" => "+48" ],

                                [ "name" => "Portugal", "code" => "PT", "phone" => "+351" ],

                                [ "name" => "Roumanie", "code" => "RO", "phone" => "+40" ],

                                [ "name" => "Russie", "code" => "RU", "phone" => "+7" ],

                                [ "name" => "Saint-Marin", "code" => "SM", "phone" => "+378" ],

                                [ "name" => "Serbie", "code" => "RS", "phone" => "+381" ],

                                [ "name" => "Slovaquie", "code" => "SK", "phone" => "+421" ],

                                [ "name" => "Slovénie", "code" => "SI", "phone" => "+386" ],

                                [ "name" => "Espagne", "code" => "ES", "phone" => "+34" ],

                                [ "name" => "Suède", "code" => "SE", "phone" => "+46" ],

                                [ "name" => "Suisse", "code" => "CH", "phone" => "+41" ],

                                [ "name" => "Ukraine", "code" => "UA", "phone" => "+380" ],

                                [ "name" => "Royaume-Uni", "code" => "GB", "phone" => "+44" ],

                                [ "name" => "Cité du Vatican", "code" => "VA", "phone" => "+379" ]

                            ]
                        ],
                        [
                            "name" => "Afrique",
                            "countries" =>[
                                [ "name" => "Algérie", "code" => "DZ", "phone" => "+213" ],

                                [ "name" => "Angola", "code" => "AO", "phone" => "+244" ],

                                [ "name" => "Bénin", "code" => "BJ", "phone" => "+229" ],

                                [ "name" => "Botswana", "code" => "BW", "phone" => "+267" ],

                                [ "name" => "Burkina Faso", "code" => "BF", "phone" => "+226" ],

                                [ "name" => "Burundi", "code" => "BI", "phone" => "+257" ],

                                [ "name" => "Cameroun", "code" => "CM", "phone" => "+237" ],

                                [ "name" => "Cap-Vert", "code" => "CV", "phone" => "+238" ],

                                [ "name" => "République centrafricaine", "code" => "CF", "phone" => "+236" ],

                                [ "name" => "Tchad", "code" => "TD", "phone" => "+235" ],

                                [ "name" => "Comores", "code" => "KM", "phone" => "+269" ],

                                [ "name" => "République démocratique du Congo", "code" => "CD", "phone" => "+243" ],

                                [ "name" => "République du Congo", "code" => "CG", "phone" => "+242" ],

                                [ "name" => "Côte d'Ivoire", "code" => "CI", "phone" => "+225" ],

                                [ "name" => "Djibouti", "code" => "DJ", "phone" => "+253" ],

                                [ "name" => "Égypte", "code" => "EG", "phone" => "+20" ],

                                [ "name" => "Guinée équatoriale", "code" => "GQ", "phone" => "+240" ],

                                [ "name" => "Érythrée", "code" => "ER", "phone" => "+291" ],

                                [ "name" => "Eswatini", "code" => "SZ", "phone" => "+268" ],

                                [ "name" => "Éthiopie", "code" => "ET", "phone" => "+251" ],

                                [ "name" => "Gabon", "code" => "GA", "phone" => "+241" ],

                                [ "name" => "Gambie", "code" => "GM", "phone" => "+220" ],

                                [ "name" => "Ghana", "code" => "GH", "phone" => "+233" ],

                                [ "name" => "Guinée", "code" => "GN", "phone" => "+224" ],

                                [ "name" => "Guinée-Bissau", "code" => "GW", "phone" => "+245" ],

                                [ "name" => "Kenya", "code" => "KE", "phone" => "+254" ],

                                [ "name" => "Lesotho", "code" => "LS", "phone" => "+266" ],

                                [ "name" => "Libéria", "code" => "LR", "phone" => "+231" ],

                                [ "name" => "Libye", "code" => "LY", "phone" => "+218" ],

                                [ "name" => "Madagascar", "code" => "MG", "phone" => "+261" ],

                                [ "name" => "Malawi", "code" => "MW", "phone" => "+265" ],

                                [ "name" => "Mali", "code" => "ML", "phone" => "+223" ],

                                [ "name" => "Mauritanie", "code" => "MR", "phone" => "+222" ],

                                [ "name" => "Maurice", "code" => "MU", "phone" => "+230" ],

                                [ "name" => "Maroc", "code" => "MA", "phone" => "+212" ],

                                [ "name" => "Mozambique", "code" => "MZ", "phone" => "+258" ],

                                [ "name" => "Namibie", "code" => "NA", "phone" => "+264" ],

                                [ "name" => "Niger", "code" => "NE", "phone" => "+227" ],

                                [ "name" => "Nigeria", "code" => "NG", "phone" => "+234" ],

                                [ "name" => "Rwanda", "code" => "RW", "phone" => "+250" ],

                                [ "name" => "São Tomé et Principe", "code" => "ST", "phone" => "+239" ],

                                [ "name" => "Sénégal", "code" => "SN", "phone" => "+221" ],

                                [ "name" => "Seychelles", "code" => "SC", "phone" => "+248" ],

                                [ "name" => "Sierra Leone", "code" => "SL", "phone" => "+232" ],

                                [ "name" => "Somalie", "code" => "SO", "phone" => "+252" ],

                                [ "name" => "Afrique du Sud", "code" => "ZA", "phone" => "+27" ],

                                [ "name" => "Soudan du Sud", "code" => "SS", "phone" => "+211" ],

                                [ "name" => "Soudan", "code" => "SD", "phone" => "+249" ],

                                [ "name" => "Tanzanie", "code" => "TZ", "phone" => "+255" ],

                                [ "name" => "Togo", "code" => "TG", "phone" => "+228" ],

                                [ "name" => "Tunisie", "code" => "TN", "phone" => "+216" ],

                                [ "name" => "Ouganda", "code" => "UG", "phone" => "+256" ],

                                [ "name" => "Zambie", "code" => "ZM", "phone" => "+260" ],

                                [ "name" => "Zimbabwe", "code" => "ZW", "phone" => "+263" ]

                            ]
                        ],
                        [
                            "name" => "Océanie",
                            "countries" =>[
                                [ "name" => "Australie", "code" => "AU", "phone" => "+61" ],

                                [ "name" => "Fidji", "code" => "FJ", "phone" => "+679" ],

                                [ "name" => "Kiribati", "code" => "KI", "phone" => "+686" ],

                                [ "name" => "Îles Marshall", "code" => "MH", "phone" => "+692" ],

                                [ "name" => "Micronésie", "code" => "FM", "phone" => "+691" ],

                                [ "name" => "Nauru", "code" => "NR", "phone" => "+674" ],

                                [ "name" => "Nouvelle-Zélande", "code" => "NZ", "phone" => "+64" ],

                                [ "name" => "Palaos", "code" => "PW", "phone" => "+680" ],

                                [ "name" => "Papouasie-Nouvelle-Guinée", "code" => "PG", "phone" => "+675" ],

                                [ "name" => "Samoa", "code" => "WS", "phone" => "+685" ],

                                [ "name" => "Îles Salomon", "code" => "SB", "phone" => "+677" ],

                                [ "name" => "Tonga", "code" => "TO", "phone" => "+676" ],

                                [ "name" => "Tuvalu", "code" => "TV", "phone" => "+688" ],

                                [ "name" => "Vanuatu", "code" => "VU", "phone" => "+678" ]

                            ]
                        ],
                    ]
                ],
                [
                    "language" => "Persian",
                    "items" => [
                        [
                            "name" => "آسیا",
                            "countries" =>[
                                [ "name" => "افغانستان", "code" => "AF", "phone" => "+93" ],

                                [ "name" => "ارمنستان", "code" => "AM", "phone" => "+374" ],

                                [ "name" => "آذربایجان", "code" => "AZ", "phone" => "+994" ],

                                [ "name" => "بحرین", "code" => "BH", "phone" => "+973" ],

                                [ "name" => "بنگلادش", "code" => "BD", "phone" => "+880" ],

                                [ "name" => "بوتان", "code" => "BT", "phone" => "+975" ],

                                [ "name" => "برونئی", "code" => "BN", "phone" => "+673" ],

                                [ "name" => "کامبوج", "code" => "KH", "phone" => "+855" ],

                                [ "name" => "چین", "code" => "CN", "phone" => "+86" ],

                                [ "name" => "قبرس", "code" => "CY", "phone" => "+357" ],

                                [ "name" => "تیمور شرقی", "code" => "TL", "phone" => "+670" ],

                                [ "name" => "گرجستان", "code" => "GE", "phone" => "+995" ],

                                [ "name" => "هند", "code" => "IN", "phone" => "+91" ],

                                [ "name" => "اندونزی", "code" => "ID", "phone" => "+62" ],

                                [ "name" => "ایران", "code" => "IR", "phone" => "+98" ],

                                [ "name" => "عراق", "code" => "IQ", "phone" => "+964" ],

                                [ "name" => "اسرائیل", "code" => "IL", "phone" => "+972" ],

                                [ "name" => "ژاپن", "code" => "JP", "phone" => "+81" ],

                                [ "name" => "اردن", "code" => "JO", "phone" => "+962" ],

                                [ "name" => "قزاقستان", "code" => "KZ", "phone" => "+7" ],

                                [ "name" => "کویت", "code" => "KW", "phone" => "+965" ],

                                [ "name" => "قرقیزستان", "code" => "KG", "phone" => "+996" ],

                                [ "name" => "لائوس", "code" => "LA", "phone" => "+856" ],

                                [ "name" => "لبنان", "code" => "LB", "phone" => "+961" ],

                                [ "name" => "مالزی", "code" => "MY", "phone" => "+60" ],

                                [ "name" => "مالدیو", "code" => "MV", "phone" => "+960" ],

                                [ "name" => "مغولستان", "code" => "MN", "phone" => "+976" ],

                                [ "name" => "میانمار", "code" => "MM", "phone" => "+95" ],

                                [ "name" => "نپال", "code" => "NP", "phone" => "+977" ],

                                [ "name" => "کره شمالی", "code" => "KP", "phone" => "+850" ],

                                [ "name" => "عمان", "code" => "OM", "phone" => "+968" ],

                                [ "name" => "پاکستان", "code" => "PK", "phone" => "+92" ],

                                [ "name" => "فلسطین", "code" => "PS", "phone" => "+970" ],

                                [ "name" => "فیلیپین", "code" => "PH", "phone" => "+63" ],

                                [ "name" => "قطر", "code" => "QA", "phone" => "+974" ],

                                [ "name" => "عربستان سعودی", "code" => "SA", "phone" => "+966" ],

                                [ "name" => "سنگاپور", "code" => "SG", "phone" => "+65" ],

                                [ "name" => "کره جنوبی", "code" => "KR", "phone" => "+82" ],

                                [ "name" => "سری‌لانکا", "code" => "LK", "phone" => "+94" ],

                                [ "name" => "سوریه", "code" => "SY", "phone" => "+963" ],

                                [ "name" => "تایوان", "code" => "TW", "phone" => "+886" ],

                                [ "name" => "تاجیکستان", "code" => "TJ", "phone" => "+992" ],

                                [ "name" => "تایلند", "code" => "TH", "phone" => "+66" ],

                                [ "name" => "ترکمنستان", "code" => "TM", "phone" => "+993" ],

                                [ "name" => "ترکیه", "code" => "TR", "phone" => "+90" ],

                                [ "name" => "امارات متحده عربی", "code" => "AE", "phone" => "+971" ],

                                [ "name" => "ازبکستان", "code" => "UZ", "phone" => "+998" ],

                                [ "name" => "ویتنام", "code" => "VN", "phone" => "+84" ],

                                [ "name" => "یمن", "code" => "YE", "phone" => "+967" ]

                            ]
                        ],
                        [
                            "name" => "آمریکا",
                            "countries" =>[
                                [ "name" => "آنتیگوا و باربودا", "code" => "AG", "phone" => "+1-268" ],

                                [ "name" => "آرژانتین", "code" => "AR", "phone" => "+54" ],

                                [ "name" => "باهاما", "code" => "BS", "phone" => "+1-242" ],

                                [ "name" => "باربادوس", "code" => "BB", "phone" => "+1-246" ],

                                [ "name" => "بلیز", "code" => "BZ", "phone" => "+501" ],

                                [ "name" => "بولیوی", "code" => "BO", "phone" => "+591" ],

                                [ "name" => "برزیل", "code" => "BR", "phone" => "+55" ],

                                [ "name" => "کانادا", "code" => "CA", "phone" => "+1" ],

                                [ "name" => "شیلی", "code" => "CL", "phone" => "+56" ],

                                [ "name" => "کلمبیا", "code" => "CO", "phone" => "+57" ],

                                [ "name" => "کاستاریکا", "code" => "CR", "phone" => "+506" ],

                                [ "name" => "کوبا", "code" => "CU", "phone" => "+53" ],

                                [ "name" => "دومینیکا", "code" => "DM", "phone" => "+1-767" ],

                                [ "name" => "جمهوری دومینیکن", "code" => "DO", "phone" => "+1-809 و +1-829" ],

                                [ "name" => "اکوادور", "code" => "EC", "phone" => "+593" ],

                                [ "name" => "السالوادور", "code" => "SV", "phone" => "+503" ],

                                [ "name" => "گرنادا", "code" => "GD", "phone" => "+1-473" ],

                                [ "name" => "گواتمالا", "code" => "GT", "phone" => "+502" ],

                                [ "name" => "گویان", "code" => "GY", "phone" => "+592" ],

                                [ "name" => "هائیتی", "code" => "HT", "phone" => "+509" ],

                                [ "name" => "هندوراس", "code" => "HN", "phone" => "+504" ],

                                [ "name" => "جامائیکا", "code" => "JM", "phone" => "+1-876" ],

                                [ "name" => "مکزیک", "code" => "MX", "phone" => "+52" ],

                                [ "name" => "نیکاراگوئه", "code" => "NI", "phone" => "+505" ],

                                [ "name" => "پاناما", "code" => "PA", "phone" => "+507" ],

                                [ "name" => "پاراگوئه", "code" => "PY", "phone" => "+595" ],

                                [ "name" => "پرو", "code" => "PE", "phone" => "+51" ],

                                [ "name" => "سنت کیتس و نویس", "code" => "KN", "phone" => "+1-869" ],

                                [ "name" => "سنت لوسیا", "code" => "LC", "phone" => "+1-758" ],

                                [ "name" => "سنت وینسنت و گرنادین‌ها", "code" => "VC", "phone" => "+1-784" ],

                                [ "name" => "سورینام", "code" => "SR", "phone" => "+597" ],

                                [ "name" => "ترینیداد و توباگو", "code" => "TT", "phone" => "+1-868" ],

                                [ "name" => "ایالات متحده آمریکا", "code" => "US", "phone" => "+1" ],

                                [ "name" => "اروگوئه", "code" => "UY", "phone" => "+598" ],

                                [ "name" => "ونزوئلا", "code" => "VE", "phone" => "+58" ]

                            ]
                        ],
                        [
                            "name" => "اروپا",
                            "countries" =>[
                                [ "name" => "آلبانی", "code" => "AL", "phone" => "+355" ],

                                [ "name" => "آندورا", "code" => "AD", "phone" => "+376" ],

                                [ "name" => "اتریش", "code" => "AT", "phone" => "+43" ],

                                [ "name" => "بلاروس", "code" => "BY", "phone" => "+375" ],

                                [ "name" => "بلژیک", "code" => "BE", "phone" => "+32" ],

                                [ "name" => "بوسنی و هرزگوین", "code" => "BA", "phone" => "+387" ],

                                [ "name" => "بلغارستان", "code" => "BG", "phone" => "+359" ],

                                [ "name" => "کرواسی", "code" => "HR", "phone" => "+385" ],

                                [ "name" => "قبرس", "code" => "CY", "phone" => "+357" ],

                                [ "name" => "جمهوری چک", "code" => "CZ", "phone" => "+420" ],

                                [ "name" => "دانمارک", "code" => "DK", "phone" => "+45" ],

                                [ "name" => "استونی", "code" => "EE", "phone" => "+372" ],

                                [ "name" => "فنلاند", "code" => "FI", "phone" => "+358" ],

                                [ "name" => "فرانسه", "code" => "FR", "phone" => "+33" ],

                                [ "name" => "آلمان", "code" => "DE", "phone" => "+49" ],

                                [ "name" => "یونان", "code" => "GR", "phone" => "+30" ],

                                [ "name" => "مجارستان", "code" => "HU", "phone" => "+36" ],

                                [ "name" => "ایسلند", "code" => "IS", "phone" => "+354" ],

                                [ "name" => "ایرلند", "code" => "IE", "phone" => "+353" ],

                                [ "name" => "ایتالیا", "code" => "IT", "phone" => "+39" ],

                                [ "name" => "کوزوو", "code" => "XK", "phone" => "+383" ],

                                [ "name" => "لتونی", "code" => "LV", "phone" => "+371" ],

                                [ "name" => "لیختن‌اشتاین", "code" => "LI", "phone" => "+423" ],

                                [ "name" => "لیتوانی", "code" => "LT", "phone" => "+370" ],

                                [ "name" => "لوکزامبورگ", "code" => "LU", "phone" => "+352" ],

                                [ "name" => "مالت", "code" => "MT", "phone" => "+356" ],

                                [ "name" => "مولداوی", "code" => "MD", "phone" => "+373" ],

                                [ "name" => "موناکو", "code" => "MC", "phone" => "+377" ],

                                [ "name" => "مونته‌نگرو", "code" => "ME", "phone" => "+382" ],

                                [ "name" => "هلند", "code" => "NL", "phone" => "+31" ],

                                [ "name" => "مقدونیه شمالی", "code" => "MK", "phone" => "+389" ],

                                [ "name" => "نروژ", "code" => "NO", "phone" => "+47" ],

                                [ "name" => "لهستان", "code" => "PL", "phone" => "+48" ],

                                [ "name" => "پرتغال", "code" => "PT", "phone" => "+351" ],

                                [ "name" => "رومانی", "code" => "RO", "phone" => "+40" ],

                                [ "name" => "روسیه", "code" => "RU", "phone" => "+7" ],

                                [ "name" => "سن مارینو", "code" => "SM", "phone" => "+378" ],

                                [ "name" => "صربستان", "code" => "RS", "phone" => "+381" ],

                                [ "name" => "اسلواکی", "code" => "SK", "phone" => "+421" ],

                                [ "name" => "اسلوونی", "code" => "SI", "phone" => "+386" ],

                                [ "name" => "اسپانیا", "code" => "ES", "phone" => "+34" ],

                                [ "name" => "سوئد", "code" => "SE", "phone" => "+46" ],

                                [ "name" => "سوئیس", "code" => "CH", "phone" => "+41" ],

                                [ "name" => "اوکراین", "code" => "UA", "phone" => "+380" ],

                                [ "name" => "بریتانیا", "code" => "GB", "phone" => "+44" ],

                                [ "name" => "واتیکان", "code" => "VA", "phone" => "+379" ],

                            ]
                        ],
                        [
                            "name" => "آفریقا",
                            "countries" =>[
                                [ "name" => "الجزایر", "code" => "DZ", "phone" => "+213" ],

                                [ "name" => "آنگولا", "code" => "AO", "phone" => "+244" ],

                                [ "name" => "بنین", "code" => "BJ", "phone" => "+229" ],

                                [ "name" => "بوتسوانا", "code" => "BW", "phone" => "+267" ],

                                [ "name" => "بورکینافاسو", "code" => "BF", "phone" => "+226" ],

                                [ "name" => "بوروندی", "code" => "BI", "phone" => "+257" ],

                                [ "name" => "کامرون", "code" => "CM", "phone" => "+237" ],

                                [ "name" => "کیپ ورد", "code" => "CV", "phone" => "+238" ],

                                [ "name" => "جمهوری آفریقای مرکزی", "code" => "CF", "phone" => "+236" ],

                                [ "name" => "چاد", "code" => "TD", "phone" => "+235" ],

                                [ "name" => "کوموروس", "code" => "KM", "phone" => "+269" ],

                                [ "name" => "جمهوری دموکراتیک کنگو", "code" => "CD", "phone" => "+243" ],

                                [ "name" => "جمهوری کنگو", "code" => "CG", "phone" => "+242" ],

                                [ "name" => "ساحل عاج", "code" => "CI", "phone" => "+225" ],

                                [ "name" => "جیبوتی", "code" => "DJ", "phone" => "+253" ],

                                [ "name" => "مصر", "code" => "EG", "phone" => "+20" ],

                                [ "name" => "گینه استوایی", "code" => "GQ", "phone" => "+240" ],

                                [ "name" => "اریتره", "code" => "ER", "phone" => "+291" ],

                                [ "name" => "اسواتینی", "code" => "SZ", "phone" => "+268" ],

                                [ "name" => "اتیوپی", "code" => "ET", "phone" => "+251" ],

                                [ "name" => "گابن", "code" => "GA", "phone" => "+241" ],

                                [ "name" => "گامبیا", "code" => "GM", "phone" => "+220" ],

                                [ "name" => "غنا", "code" => "GH", "phone" => "+233" ],

                                [ "name" => "گینه", "code" => "GN", "phone" => "+224" ],

                                [ "name" => "گینه بیسائو", "code" => "GW", "phone" => "+245" ],

                                [ "name" => "کنیا", "code" => "KE", "phone" => "+254" ],

                                [ "name" => "لسوتو", "code" => "LS", "phone" => "+266" ],

                                [ "name" => "لیبریا", "code" => "LR", "phone" => "+231" ],

                                [ "name" => "لیبی", "code" => "LY", "phone" => "+218" ],

                                [ "name" => "ماداگاسکار", "code" => "MG", "phone" => "+261" ],

                                [ "name" => "مالاوی", "code" => "MW", "phone" => "+265" ],

                                [ "name" => "مالی", "code" => "ML", "phone" => "+223" ],

                                [ "name" => "موریتانی", "code" => "MR", "phone" => "+222" ],

                                [ "name" => "موریس", "code" => "MU", "phone" => "+230" ],

                                [ "name" => "مراکش", "code" => "MA", "phone" => "+212" ],

                                [ "name" => "موزامبیک", "code" => "MZ", "phone" => "+258" ],

                                [ "name" => "نامیبیا", "code" => "NA", "phone" => "+264" ],

                                [ "name" => "نیجر", "code" => "NE", "phone" => "+227" ],

                                [ "name" => "نیجریه", "code" => "NG", "phone" => "+234" ],

                                [ "name" => "رواندا", "code" => "RW", "phone" => "+250" ],

                                [ "name" => "سائوتومه و پرنسیپ", "code" => "ST", "phone" => "+239" ],

                                [ "name" => "سنگال", "code" => "SN", "phone" => "+221" ],

                                [ "name" => "سیشل", "code" => "SC", "phone" => "+248" ],

                                [ "name" => "سیرالئون", "code" => "SL", "phone" => "+232" ],

                                [ "name" => "سومالی", "code" => "SO", "phone" => "+252" ],

                                [ "name" => "آفریقای جنوبی", "code" => "ZA", "phone" => "+27" ],

                                [ "name" => "سودان جنوبی", "code" => "SS", "phone" => "+211" ],

                                [ "name" => "سودان", "code" => "SD", "phone" => "+249" ],

                                [ "name" => "تانزانیا", "code" => "TZ", "phone" => "+255" ],

                                [ "name" => "توگو", "code" => "TG", "phone" => "+228" ],

                                [ "name" => "تونس", "code" => "TN", "phone" => "+216" ],

                                [ "name" => "اوگاندا", "code" => "UG", "phone" => "+256" ],

                                [ "name" => "زامبیا", "code" => "ZM", "phone" => "+260" ],

                                [ "name" => "زیمبابوه", "code" => "ZW", "phone" => "+263" ]

                            ]
                        ],
                        [
                            "name" => "اقیانوسیه",
                            "countries" =>[
                                [ "name" => "استرالیا", "code" => "AU", "phone" => "+61" ],

                                [ "name" => "فیجی", "code" => "FJ", "phone" => "+679" ],

                                [ "name" => "کیریباتی", "code" => "KI", "phone" => "+686" ],

                                [ "name" => "جزایر مارشال", "code" => "MH", "phone" => "+692" ],

                                [ "name" => "میکرونزی", "code" => "FM", "phone" => "+691" ],

                                [ "name" => "نائورو", "code" => "NR", "phone" => "+674" ],

                                [ "name" => "نیوزیلند", "code" => "NZ", "phone" => "+64" ],

                                [ "name" => "پالائو", "code" => "PW", "phone" => "+680" ],

                                [ "name" => "پاپوا گینه نو", "code" => "PG", "phone" => "+675" ],

                                [ "name" => "ساموآ", "code" => "WS", "phone" => "+685" ],

                                [ "name" => "جزایر سلیمان", "code" => "SB", "phone" => "+677" ],

                                [ "name" => "تونگا", "code" => "TO", "phone" => "+676" ],

                                [ "name" => "تووالو", "code" => "TV", "phone" => "+688" ],

                                [ "name" => "وانواتو", "code" => "VU", "phone" => "+678" ]

                            ]
                        ],
                    ]
                ]
            ];

        foreach ($items as $item) {
            $langObj = Language::where("title", "=", $item["language"])->first();

            if ($langObj) {
                foreach ($item["items"] as $region) {
                    $regionObj = new Region($region);
                    unset($regionObj["countries"]);
                    $regionObj->language()->associate($langObj);
                    $regionObj->withoutEvents(function () use ($regionObj) {
                        $regionObj->slug = $regionObj::makeSlug($regionObj->name);
                        $regionObj->save();
                    });

                    if ($regionObj) {
                        foreach ($region["countries"] as $country) {
                            $countryObj = new Country($country);
                            $countryObj->language()->associate($langObj);
                            $countryObj->region()->associate($regionObj);
                            $regionObj->withoutEvents(function () use ($countryObj) {
                                $countryObj->slug = $countryObj::makeSlug($countryObj->name);
                                $countryObj->save();
                            });
                            $regionObj->countries()->save($countryObj);
                        }
                    }
                }
            }
        }
    }
}
