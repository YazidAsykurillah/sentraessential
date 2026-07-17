<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            // Users
            'view users',
            'create users',
            'edit users',
            'delete users',

            // Roles
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',

            // Permissions
            'view permissions',
            'create permissions',
            'edit permissions',
            'delete permissions',

            // Categories
            'view categories',
            'create categories',
            'edit categories',
            'delete categories',

            // Tags
            'view tags',
            'create tags',
            'edit tags',
            'delete tags',

            // Posts
            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
            'publish posts',

            // Website Settings
            'view website settings',
            'edit website settings',

            // Page SEO
            'view page seo',
            'create page seo',
            'edit page seo',
            'delete page seo',

            // Contact Messages
            'view contact messages',
            'delete contact messages',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}