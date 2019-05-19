<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'          => "administrator",
                'display_name'  => 'Administrtor',
                'description'   => 'Maintainer of the blog system',
                'color'         => '#8B0000',
                'priority'      => 100
            ],

            [
                'name'          => "director",
                'display_name'  => 'Director',
                'description'   => 'Chief of the authors',
                'color'         => '#191970',
                'priority'      => 80
            ],

            [
                'name'          => "author",
                'display_name'  => 'Author',
                'description'   => 'Produces content for the website',
                'color'         => '#191970',
                'priority'      => 50
            ],

            [
                'name'          => "support",
                'display_name'  => 'Support',
                'description'   => 'Moderates the comment section under blog posts',
                'color'         => '#FF8C00',
                'priority'      => 50
            ],

            [
                'name'          => "premium",
                'display_name'  => 'Premium Member',
                'description'   => 'Donators only receive a special name colour',
                'color'         => '#696969',
                'priority'      => 30
            ],

            [
                'name'          => "member",
                'display_name'  => 'Member',
                'description'   => 'Default role which cannot be removed',
                'color'         => '#000000',
                'priority'      => 10,
                'default'       => 1
            ],
        ];

        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
