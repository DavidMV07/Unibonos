<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'ver usuarios']);
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'editar usuarios']);
        Permission::create(['name' => 'eliminar usuarios']);

        Permission::create(['name' => 'ver archivos']);


        $adminUser = User::query()->create([
            'name'=> 'admin2024',
            'codigo'=> 'admin2024',
            'email'=> 'admin2024@gmail.com',
            'password'=> '123456',
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create(['name' => 'super-admin']);
        $adminUser->assignRole($roleAdmin);
        $permissionsAdmin = Permission::query()->pluck('name');
        $roleAdmin->syncPermissions($permissionsAdmin);

        $studentUser = User::query()->create([
            'name'=> 'david',
            'codigo'=> '2279934-2724',
            'email'=> 'david@gmail.com',
            'password'=> '123456',
            'email_verified_at' => now()
        ]);

        $roleStudent = Role::create(['name' => 'student']);
        $studentUser->assignRole($roleStudent);
        $permissionsStudent = Permission::query()->pluck('name');
        $roleStudent->syncPermissions();
    }
}
