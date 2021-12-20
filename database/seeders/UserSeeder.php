<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\{
    User,
    Contact
};
use PhpParser\Node\Expr\AssignOp\Concat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'mhussain',
            'email' => 'hussain.itgroup@gmail.com',
            'password' => bcrypt("123456")
        ]);

        Contact::create([
            "user_id" => 1,
            "phone" => 123456,
            "address"=> "test address"
        ]);
    }
}
