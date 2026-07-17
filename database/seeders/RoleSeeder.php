<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate([
            'name' => 'Super Admin',
        ]);
        $superAdmin->syncPermissions(
            Permission::all()
        );

        $admin = Role::firstOrCreate([
            'name' => 'Admin',
        ]);
        $admin->syncPermissions([
            'view categories',
            'create categories',
            'edit categories',
            'delete categories',

            'view tags',
            'create tags',
            'edit tags',
            'delete tags',

            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
            'publish posts',

            'view website settings',
            'edit website settings',

            'view page seo',
            'create page seo',
            'edit page seo',
            'delete page seo',

            'view contact messages',
        ]);


        $editor = Role::firstOrCreate([
            'name' => 'Editor',
        ]);
        $editor->syncPermissions([
            'view categories',
            'create categories',
            'edit categories',

            'view tags',
            'create tags',
            'edit tags',

            'view posts',
            'create posts',
            'edit posts',
        ]);
    }
}
