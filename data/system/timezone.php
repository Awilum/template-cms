<?php

    $timezone_array = array('Kwajalein'=>'(GMT-12:00) International Date Line West',
                            'Pacific/Samoa'=>'(GMT-11:00) Midway Island, Samoa',
                            'Pacific/Honolulu'=>'(GMT-10:00) Hawaii',
                            'America/Anchorage'=>'(GMT-09:00) Alaska',
                            'America/Los_Angeles'=>'(GMT-08:00) Pacific Time (US &amp; Canada)',
                            'America/Tijuana'=>'(GMT-08:00) Tijuana, Baja California',
                            'America/Denver'=>'(GMT-07:00) Mountain Time (US &amp; Canada)',
                            'America/Chihuahua'=>'(GMT-07:00) Chihuahua, La Paz, Mazatlan',
                            'America/Phoenix'=>'(GMT-07:00) Arizona',
                            'America/Regina'=>'(GMT-06:00) Saskatchewan',
                            'America/Tegucigalpa'=>'(GMT-06:00) Central America',
                            'America/Chicago'=>'(GMT-06:00) Central Time (US &amp; Canada)',
                            'America/Mexico_City'=>'(GMT-06:00) Guadalajara, Mexico City, Monterrey',
                            'America/New_York'=>'(GMT-05:00) Eastern Time (US &amp; Canada)',
                            'America/Bogota'=>'(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
                            'America/Indiana/Indianapolis'=>'(GMT-05:00) Indiana (East)',
                            'America/Caracas'=>'(GMT-04:30) Caracas',
                            'America/Halifax'=>'(GMT-04:00) Atlantic Time (Canada)',
                            'America/Manaus'=>'(GMT-04:00) Manaus',
                            'America/Santiago'=>'(GMT-04:00) Santiago',
                            'America/La_Paz'=>'(GMT-04:00) La Paz',
                            'America/St_Johns'=>'(GMT-03:30) Newfoundland',
                            'America/Argentina/Buenos_Aires'=>'(GMT-03:00) Buenos Aires',
                            'America/Sao_Paulo'=>'(GMT-03:00) Brasilia',
                            'America/Godthab'=>'(GMT-03:00) Greenland',
                            'America/Montevideo'=>'(GMT-03:00) Montevideo',
                            'America/Argentina/Buenos_Aires'=>'(GMT-03:00) Georgetown',
                            'Atlantic/South_Georgia'=>'(GMT-02:00) Mid-Atlantic',
                            'Atlantic/Azores'=>'(GMT-01:00) Azores',
                            'Atlantic/Cape_Verde'=>'(GMT-01:00) Cape Verde Is.',
                            'Europe/London'=>'(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London',
                            'Atlantic/Reykjavik'=>'(GMT) Monrovia, Reykjavik',
                            'Africa/Casablanca'=>'(GMT) Casablanca',
                            'Europe/Belgrade'=>'(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
                            'Europe/Sarajevo'=>'(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb',
                            'Europe/Brussels'=>'(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
                            'Africa/Algiers'=>'(GMT+01:00) West Central Africa',
                            'Europe/Amsterdam'=>'(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
                            'Europe/Minsk'=>'(GMT+02:00) Minsk',
                            'Africa/Cairo'=>'(GMT+02:00) Cairo',
                            'Europe/Helsinki'=>'(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius',
                            'Europe/Athens'=>'(GMT+02:00) Athens, Bucharest, Istanbul',
                            'Asia/Jerusalem'=>'(GMT+02:00) Jerusalem',
                            'Asia/Amman'=>'(GMT+02:00) Amman',
                            'Asia/Beirut'=>'(GMT+02:00) Beirut',
                            'Africa/Windhoek'=>'(GMT+02:00) Windhoek',
                            'Africa/Harare'=>'(GMT+02:00) Harare, Pretoria',
                            'Asia/Kuwait'=>'(GMT+03:00) Kuwait, Riyadh',
                            'Asia/Baghdad'=>'(GMT+03:00) Baghdad',
                            'Africa/Nairobi'=>'(GMT+03:00) Nairobi',
                            'Asia/Tbilisi'=>'(GMT+03:00) Tbilisi',
                            'Europe/Moscow'=>'(GMT+03:00) Moscow, St. Petersburg, Volgograd',
                            'Asia/Tehran'=>'(GMT+03:30) Tehran',
                            'Asia/Muscat'=>'(GMT+04:00) Abu Dhabi, Muscat',
                            'Asia/Baku'=>'(GMT+04:00) Baku',
                            'Asia/Yerevan'=>'(GMT+04:00) Yerevan',
                            'Asia/Yekaterinburg'=>'(GMT+05:00) Ekaterinburg',
                            'Asia/Karachi'=>'(GMT+05:00) Islamabad, Karachi',
                            'Asia/Tashkent'=>'(GMT+05:00) Tashkent',
                            'Asia/Kolkata'=>'(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
                            'Asia/Colombo'=>'(GMT+05:30) Sri Jayawardenepura',
                            'Asia/Katmandu'=>'(GMT+05:45) Kathmandu',
                            'Asia/Dhaka'=>'(GMT+06:00) Astana, Dhaka',
                            'Asia/Novosibirsk'=>'(GMT+06:00) Almaty, Novosibirsk',
                            'Asia/Rangoon'=>'(GMT+06:30) Yangon (Rangoon)',
                            'Asia/Krasnoyarsk'=>'(GMT+07:00) Krasnoyarsk',
                            'Asia/Bangkok'=>'(GMT+07:00) Bangkok, Hanoi, Jakarta',
                            'Asia/Beijing'=>'(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
                            'Asia/Ulaanbaatar'=>'(GMT+08:00) Irkutsk, Ulaan Bataar',
                            'Asia/Kuala_Lumpur'=>'(GMT+08:00) Kuala Lumpur, Singapore',
                            'Asia/Taipei'=>'(GMT+08:00) Taipei',
                            'Australia/Perth'=>'(GMT+08:00) Perth',
                            'Asia/Seoul'=>'(GMT+09:00) Seoul',
                            'Asia/Tokyo'=>'(GMT+09:00) Osaka, Sapporo, Tokyo',
                            'Asia/Yakutsk'=>'(GMT+09:00) Yakutsk',
                            'Australia/Darwin'=>'(GMT+09:30) Darwin',
                            'Australia/Adelaide'=>'(GMT+09:30) Adelaide',
                            'Australia/Sydney'=>'(GMT+10:00) Canberra, Melbourne, Sydney',
                            'Australia/Brisbane'=>'(GMT+10:00) Brisbane',
                            'Australia/Hobart'=>'(GMT+10:00) Hobart',
                            'Asia/Vladivostok'=>'(GMT+10:00) Vladivostok',
                            'Pacific/Guam'=>'(GMT+10:00) Guam, Port Moresby',
                            'Asia/Magadan'=>'(GMT+11:00) Magadan, Solomon Is., New Caledonia',
                            'Pacific/Fiji'=>'(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
                            'Pacific/Auckland'=>'(GMT+12:00) Auckland, Wellington',
                            'Pacific/Tongatapu'=>'(GMT+13:00) Nukualofa'
                            );
