<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gerardo Belot',
                'email' => 'gbelot2003@hotmail.com',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'WXmSN5l0Q2',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Julie Rath DDS',
                'email' => 'ezra.bins@example.com',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'GDtqAQ5fDT',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Marcella Yundt',
                'email' => 'ugerhold@example.org',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'GNKK0cmweM',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jeanette Bins',
                'email' => 'jacynthe.buckridge@example.net',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'Jujz8wyu6F',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lane Wiegand',
                'email' => 'brooke05@example.org',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'BjR99atuYz',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Miss Lucile Wolf Sr.',
                'email' => 'melissa40@example.net',
                'password' => '$2y$10$.Z8ljMArhdt4iLQV9jnHeuIIzWQXS9S.n3ESm3OCn5n/kweasf1MW',
                'remember_token' => 'Jlq1eK58Uw',
                'created_at' => '2017-10-30 17:49:37',
                'updated_at' => '2017-10-30 17:49:37',
            ),
        ));
        
        
    }
}
