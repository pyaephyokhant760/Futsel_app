<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $adminUser = User::firstOrCreate([
            'email' => 'ppk@gmail.com'
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make('password')
        ]);

        $permissions = [
            'league-list',
            'league-create',
            'league-edit',
            'league-delete',
            'coach-list',
            'coach-create',
            'coach-edit',
            'coach-delete',
        ];

        
        
        // Ensure permissions exist
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        
        // Assign permissions to the Admin Role
        $admin->syncPermissions($permissions);
        
        // Assign the "admin" role to the user
        $adminUser->assignRole($admin);
    }
}
