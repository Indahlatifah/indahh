<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

  

class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $users = [

            [

               'name'=>'Superadmin',

               'email'=>'sadmin@itsolutionstuff.com',

               'type'=>'superadmin',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Kms 01',

               'email'=>'kms01@itsolutionstuff.com',

               'type'=> 'kemahasiswaan',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Akd01',

               'email'=>'akd01@itsolutionstuff.com',

               'type'=>'akademik',

               'password'=> bcrypt('123456'),

            ],

            [

                'name'=>'Kmd01',
 
                'email'=>'kmd01@itsolutionstuff.com',
 
                'type'=>'kamsisdal',
 
                'password'=> bcrypt('123456'),
 
             ],

             [

                'name'=>'Sarpras01',
 
                'email'=>'Sarpras01@itsolutionstuff.com',
 
                'type'=>'sarpras',
 
                'password'=> bcrypt('123456'),
 
             ],

             [

                'name'=>'Dk01',
 
                'email'=>'dk01@itsolutionstuff.com',
 
                'type'=>'direksi',
 
                'password'=> bcrypt('123456'),
 
             ],
             [
               'name'=>'Keuangan',
               'email'=>'keuangan@itsolutionstuff.com',
               'type'=>'keuangan',
               'password'=>bcrypt(123456),
             ],
             [
               'name'=>'Umum',
               'email'=>'umum@itsolutionstuff.com',
               'type'=>'umum',
               'password'=>bcrypt(123456),
             ],
             [
             'name'=>'Akd02',

             'email'=>'akd02@itsolutionstuff.com',

             'type'=>'akademik',

             'password'=> bcrypt('123456'),

            ],
             [

               'name'=>'Mhs01',

               'email'=>'mhs01@itsolutionstuff.com',

               'type'=>'mahasiswa',

               'password'=> bcrypt('123456'),

            ],
            [

               'name'=>'Indah Latifah',

               'email'=>'D111911038',

               'type'=>'mahasiswa',

               'password'=> bcrypt('D111911038'),

            ],
        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}