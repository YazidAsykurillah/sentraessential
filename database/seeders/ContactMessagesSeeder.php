<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactMessage;
class ContactMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact_messages = [
            [
                'name' => 'Contact 1', 
                'email' => 'contactone@test.com',
                'phone' => '99191919',
                'subject' => 'Test subject',
                'message' => 'Test message'
            ],
            [
                'name' => 'Contact 2', 
                'email' => 'contacttwo@test.com',
                'phone' => '88888',
                'subject' => 'Test subject 2',
                'message' => 'Test message 2'
            ],
        ];

        foreach ($contact_messages as $index => $contact_message) {
            ContactMessage::firstOrcreate([
                'name' => $contact_message['name'],
                'email' => $contact_message['email'],
                'phone' => $contact_message['phone'],
                'subject' => $contact_message['subject'],
                'message' => $contact_message['message'],
            ]);
        }
    }
}
