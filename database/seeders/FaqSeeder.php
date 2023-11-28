<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            'What is MegaCM?' => 'MegaCM is a leading cleaning company in Australia with experienced services in
cleaning houses, apartments, offices, constructions, estates, renovated buildings, NDIS
and other commercial businesses.',
            'What is the Difference between MegaCM and other Groups?' => 'With ardent passion and years of services built on foundation of trust, quality and
respect, MegaMC has gained immeasurable amount of experience in the field of
cleaning. At MegaCM, we work with motto “a clean space is equal to a good life”. We
aim to bring to our customers the highest quality of cleaning services.',
            'Do you clean in my area?' => 'MegaMC provides cleaning services within NSW',
            'Is it possible for me to reschedule?' => 'Yes, we are flexible with cleaning schedules. You just inform us 24 hours in advance.',
            'Can I cancel my booking?' => 'Surely, just inform us at least 24 hours ahead of cleaning schedule',
            'Do We have to sign the contract?' => 'Cleaning Agreement is being practiced but non – binding at MegaCM. In the event that
you choose to end your Agreement with us, we will just require a 30 – day notice.',
            'What can I expect before cleaning?' => 'The moment you use our services, our team will contact you for site inspection to give
you a suitable quote, then followed with a confirmation email stating details of cleaning
schedules, quotes and deposit amount we may require.',
            'What should I do before cleaning team arrive?' => 'You don’t have to do anything! Just let us take care of the cleaning part',
            'What kind of chemicals and machines do you use?' => 'We use various products which are environmentally friendly and safe. Our machines in
use are modern and well maintained',
            'Do I have to provide cleaning supplies or equipment?' => 'No, you don’t have to provide anything. Unless you have your own products that you
want to use but it should be similarly friendly and safe to our products',
            'Can I trust your cleaner?' => 'Absolutely yes! Our team members are fully police checked and have been performing
the jobs for years. We are proud to have chosen the right people in our cleaning team.',
            'How do I get in touch with the office?' => 'We can be contacted via phone, txt or email. Our office hours are 9am – 5pm.
Phone: 
Txt Message: 
Email:  sales@megacm.com.au',
            'What should I do if I am not happy with the cleaning service?' => 'We welcome all feedback whether it is positive or negative. We take negatives as
constructive ones. You can email us with details of what might have been issues and
related photos. We will take prompt actions for any missed, shortcoming and unsatisfied
areas in a timely manner.',
        ];
        $photo = 'https://via.placeholder.com/640x480.png/00aa22?text=officiis';


        /**
         * Faq Seeder
         */
        Faq::unguard();
        foreach ($faqs as $title => $content){
            Faq::insert([
                'name' => $title,
                'content' => $content,
                'desc' => $content,
                'slug' => Str::slug($title),
                'status' => implode(',', [Status::SHOW, Status::OUTSTANDING]),
                "photo" => $photo,
                "faq_category_id" => 1
            ]);
        }
        Faq::reguard();
    }
}