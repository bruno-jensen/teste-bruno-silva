<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\contact\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Contact::create([
            'Name'      => ("John Doe"),
            'Contact'   => ("123456789"),
            'email'     => ("john.doe@mail.com"),
        ]);
        
        Contact::create([
            'Name'      => ("Mary Doe"),
            'Contact'   => ("123456781"),
            'email'     => ("mary.doe@mail.com"),
        ]);
        
        Contact::create([
            'Name'      => ("Jack Doe"),
            'Contact'   => ("123456782"),
            'email'     => ("jack.doe@mail.com"),
        ]);
        
        Contact::create([
            'Name'      => ("Bush Doe"),
            'Contact'   => ("123456783"),
            'email'     => ("bush.doe@mail.com"),
        ]);
        
        Contact::create([
            'Name'      => ("Janie Doe"),
            'Contact'   => ("123456784"),
            'email'     => ("janie.doe@mail.com"),
        ]);
    }
}
