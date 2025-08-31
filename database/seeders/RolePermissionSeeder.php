<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'manage_users',
            'manage_web_contents',
            'manage_telegram',
            'manage_contacts_us',
            'manage_video_blogs'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign created permissions
        $superadminRole = Role::create(['name' => 'superadmin']);
        // This will now populate the 'role_has_permissions' table
        $superadminRole->givePermissionTo(Permission::all());

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['manage_web_contents', 'manage_contacts_us', 'manage_video_blogs']);

        // Create a demo user for each role. They will inherit permissions from the role.
        $administrator = User::factory()->create([
            'name' => 'Super Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $administrator->assignRole($superadminRole);

        $admin_biasa = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $admin_biasa->assignRole($adminRole);
    }
}
