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
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);

        Permission::create(['name' => 'manage_users']);
        Permission::create(['name' => 'manage_web_contents']);
        Permission::create(['name' => 'manage_telegram']);
        Permission::create(['name' => 'manage_contacts_us']);
        Permission::create(['name' => 'manage_video_blogs']);

        // Menambahkan role dan permission ke user
        $administrator = User::factory()->create();
        $administrator->assignRole('superadmin');
        $administrator->givePermissionTo(['manage_users', 'manage_web_contents', 'manage_telegram', 'manage_contacts_us', 'manage_video_blogs']);

        $admin_biasa = User::factory()->create();
        $admin_biasa->assignRole('admin');
        $admin_biasa->givePermissionTo(['manage_web_contents', 'manage_contacts_us', 'manage_video_blogs']);
    }
}
