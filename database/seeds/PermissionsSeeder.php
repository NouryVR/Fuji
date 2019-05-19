<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name'          => "create-comment",
                'display_name'  => 'Create comments',
                'description'   => 'Ability to create comments under posts',
            ],
            [
                'name'          => "edit-comment",
                'display_name'  => 'Edit own comments',
                'description'   => 'Ability to edit their own comments under posts',
            ],
            [
                'name'          => "delete-comment",
                'display_name'  => 'Remove own comments',
                'description'   => 'Ability to delete their own comments under posts',
            ],

            [
                'name'          => "comment-moderation",
                'display_name'  => 'Comment moderation',
                'description'   => 'Ability to edit and delete comments of others',
            ],

            [
                'name'          => "user-moderation",
                'display_name'  => 'User moderation',
                'description'   => 'Ability to ban users from the comment section under blog posts',
            ],

            [
                'name'          => "manage-posts",
                'display_name'  => 'Post management',
                'description'   => 'Ability to create, modify and delete their own posts',
            ],

            [
                'name'          => "manage-posts-others",
                'display_name'  => 'Post management of others',
                'description'   => 'Ability to modify and delete posts of everyone',
            ],

            [
                'name'          => "manage-users",
                'display_name'  => 'User management',
                'description'   => 'Ability to grant roles to users (with priorities under their role)',
            ],

            [
                'name'          => "manage-roles",
                'display_name'  => 'Role management',
                'description'   => 'Ability to edit roles (with priorities under their role)',
            ],

            [
                'name'          => "manage-blog",
                'display_name'  => 'Blog administration (DANGEROUS)',
                'description'   => 'Ability to manage all roles, users and website settings',
            ],
        ];

        foreach($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
