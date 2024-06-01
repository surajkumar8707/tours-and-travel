<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Contact::truncate();

        $contacts = [
            [
                'name' => 'Rajesh Kumar',
                'email' => 'rajeshkumar@example.com',
                'phone' => 9389448556,
                'message' => 'I am interested in booking a tour package. Can you provide more details?',
            ],
            [
                'name' => 'Priya Singh',
                'email' => 'priyasingh@example.com',
                'phone' => 9389448556,
                'message' => 'I recently visited your park and had a wonderful experience. Thank you!',
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => 9389448556,
                'message' => 'Could you please provide information about the facilities available at the park?',
            ],
            [
                'name' => 'Lisa Sharma',
                'email' => 'lisasharma@example.com',
                'phone' => 9389448556,
                'message' => 'We are planning a group visit. Can you offer any discounts?',
            ],
            [
                'name' => 'Amit Patel',
                'email' => 'amitpatel@example.com',
                'phone' => 9389448556,
                'message' => 'Are there any safari slots available for the upcoming weekend?',
            ],
            [
                'name' => 'Neha Gupta',
                'email' => 'nehagupta@example.com',
                'phone' => 9389448556,
                'message' => 'Can you suggest affordable accommodation options near the park?',
            ],
            [
                'name' => 'Deepak Singh',
                'email' => 'deepaksingh@example.com',
                'phone' => 9389448556,
                'message' => 'We are interested in hosting an event at your park. What are the arrangements available?',
            ],
            [
                'name' => 'Shreya Jain',
                'email' => 'shreyajain@example.com',
                'phone' => 9389448556,
                'message' => 'Could you provide details about the adventure activities offered at the park?',
            ],
            [
                'name' => 'Aryan Verma',
                'email' => 'aryanverma@example.com',
                'phone' => 9389448556,
                'message' => 'I stayed at one of your resorts recently. Here are my thoughts and suggestions.',
            ],
            [
                'name' => 'Anjali Khanna',
                'email' => 'anjalikhanna@example.com',
                'phone' => 9389448556,
                'message' => 'What are the timings for the morning safari? Can we book in advance?',
            ],
            [
                'name' => 'Amit Sharma',
                'email' => 'amitsharma@example.com',
                'phone' => 9389448556,
                'message' => 'I am a photographer interested in wildlife photography. Do you offer specialized tours?',
            ],
            [
                'name' => 'Kavita Reddy',
                'email' => 'kavitareddy@example.com',
                'phone' => 9389448556,
                'message' => 'We are looking to book a resort for a family vacation. What are the options available?',
            ],
            [
                'name' => 'Sanjay Patel',
                'email' => 'sanjaypatel@example.com',
                'phone' => 9389448556,
                'message' => 'Can you arrange transportation from the nearest airport to the park?',
            ],
            [
                'name' => 'Pooja Singh',
                'email' => 'poojasingh@example.com',
                'phone' => 9389448556,
                'message' => 'What is your policy regarding cancellations and refunds?',
            ],
            [
                'name' => 'Manish Verma',
                'email' => 'manishverma@example.com',
                'phone' => 9389448556,
                'message' => 'Are guided tours available? How can we book them?',
            ],
            [
                'name' => 'Sneha Mishra',
                'email' => 'snehamishra@example.com',
                'phone' => 9389448556,
                'message' => 'Our tour guide was excellent! Please convey our appreciation.',
            ],
            [
                'name' => 'Vikas Singh',
                'email' => 'vikassingh@example.com',
                'phone' => 9389448556,
                'message' => 'What dining options are available at the park? Do you cater to special dietary requirements?',
            ],
            [
                'name' => 'Suman Gupta',
                'email' => 'sumangupta@example.com',
                'phone' => 9389448556,
                'message' => 'Could you provide information about the different safari packages offered?',
            ],
            [
                'name' => 'Rahul Sharma',
                'email' => 'rahulsharma@example.com',
                'phone' => 9389448556,
                'message' => 'What are the entry fees for adults and children at the park?',
            ],
            [
                'name' => 'Meera Patel',
                'email' => 'meerapatel@example.com',
                'phone' => 9389448556,
                'message' => 'I have made a booking. Can you confirm the details?',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
