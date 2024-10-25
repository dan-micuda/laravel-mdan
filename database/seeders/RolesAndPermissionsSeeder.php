<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $viewerRole = Role::firstOrCreate(['name' => 'viewer']);

        Permission::firstOrCreate(['name' => 'view_data']);
        Permission::firstOrCreate(['name' => 'create_data']);
        Permission::firstOrCreate(['name' => 'edit_data']);
        Permission::firstOrCreate(['name' => 'update_data']);
        Permission::firstOrCreate(['name' => 'delete_data']);


        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $editorRole->givePermissionTo(['view_data', 'edit_data']);
        $viewerRole->givePermissionTo('view_data');
        // Create roles and assign permissions
        //$role1 = Role::create(['name' => 'admin']);
        //$role1->givePermissionTo(['view_data', 'create_data', 'update_data']);

        //$role2 = Role::create(['name' => 'viewer']);
        //$role2->givePermissionTo('view_data');

        // Assign role to users
        $adminUser = User::find(1); // Replace with your admin user ID
        if ($adminUser) {
            $adminUser->assignRole('admin');
        }

        $regularUser = User::find(2); // Replace with your regular user ID
        if ($regularUser) {
            $regularUser->assignRole('viewer');
        }
    }
}
