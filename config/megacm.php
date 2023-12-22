<?php
return [
  'chatgpt' => env('OPENAI_CLIENT_KEY','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'),
  'location' => [
      'bondi', 'North Shore', 'Stanmore', 'Leichhardt',
      'Marrickville', 'Epping', 'Neutral Bay', 'Surry Hills'
  ],
    'checklist' => [
        'live_areas' => [
            'title' => 'Living Areas',
            'image' => 'https://www.maidforyou.com.au/wp-content/uploads/2022/12/rectangle_11.png',
            'childrens' => [
                'Vacuum Closet Space',
                'Vacuum Carpets',
                'Mop Floor*',
                'Empty Rubbish and Replace Bin Lining',
                'Dust Furniture and Decorations',
                'Make Beds',
                'Wipe Down and Scrub of Window Sills',
                'Cleaning of Mirrors',
                'Wiping Down Light Switches',
                'Remove Visible Clutter From Floors',
                'Cleaning Underneath Area Rugs',
                'Wipe Down Living Area Cabinentry & Appliances',
            ]
        ],
        'kitchen' => [
            'title' => 'Kitchen',
            'image' => 'https://www.maidforyou.com.au/wp-content/uploads/2022/12/rectangle_11_copy.png',
            'childrens' => [
                'Clean Stovetop and Rangehood*',
                'Wipe Down Oven Door Handle',
                'Clean The Inside & Outside Microwave',
                'Vacuum & Mop FLoors',
                'Clean Outside of Countertop Appliances',
                'Wipe Large Kitchen Appliances',
                'Clean Sink',
                'Stack & Run The Dishwasher',
                'Sanitise & Wipe Down Kitchen Island and Benchtop',
                'Clean & Disinfect Kitchen Splashback',
                'Empty & Change Kitchen Bin Lining'
            ]
        ],
        'Bathroom(s)' => [
            'title' => 'Bathroom(s)',
            'image' => 'https://www.maidforyou.com.au/wp-content/uploads/2022/12/rectangle_11_copy_2.png',
            'childrens' => [
                'Scrub & Clean Toilets and Sinks',
                'Scrub & Clean Showers & Tubs',
                'Clean Soap Dish',
                'Clean Mirrors',
                'Clean Shower Head',
                'Mop Floor',
                'Remove Excess Soap Scum & Mineral Water Build Up From Shower Stall'
            ]
        ],
        'Wet_Areas' => [
            'title' => 'Wet Areas',
            'image' => 'https://www.maidforyou.com.au/wp-content/uploads/2022/12/rectangle_11_copy_3.png',
            'childrens' => [
                'Dust Cabinet Doors',
                'Clean Countertops',
                'Vacuum Area Rugs'
            ]
        ],
        'extra' => [
            'title' => 'Extra Services',
            'image' => 'https://www.maidforyou.com.au/wp-content/uploads/2022/12/rectangle_11_copy_4.png',
            'childrens' => [
                'Fridge Cleaning',
                'Oven Cleaning',
                'Balcony/Garage/Patio Sweep',
                'Full Wall Washing',
                'Carpet Cleaning',
                'Granny Flat Cleaning',
                'End of Lease Cleaning',
                'Construction Cleaning',
                'Deep/Spring Cleaning',
                'Window Cleaning'
            ]
        ]
    ],
    'partners' => [
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/at.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/care.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/homely.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/insider.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/realhomes.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/yahoo-1.jpg',
        'https://www.maidforyou.com.au/wp-content/uploads/2022/12/sl.jpg'
    ],
    'prices' => [
        'basic' =>[
            'rooms' => true,
            'hourly' => true,
            'addons' => true,
        ],
        'deep' =>[
            'rooms' => true,
            'hourly' => true,
            'addons' => true,
        ],
        'move' =>[
            'rooms' => true,
            'hourly' => true,
            'addons' => true,
        ]
    ]
];
