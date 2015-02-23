<?php
/**
 * Created by PhpStorm.
 * User: rvtech
 * Date: 21/2/15
 * Time: 12:49 PM
 */
class MembersTableSeeder extends Seeder {
    public function run () {

        Member::create(array(
                    'full_name'         => 'demo',
                    'username'          => 'demo',
                    'email'             => 'demo@gmail.com',
                    'contact_number'    => '9876054321',
                    'password'          => Hash::make('demo')
        ));
    }
}