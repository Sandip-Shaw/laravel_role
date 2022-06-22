<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class RolePermissionSeeder.
 *
 * @see https://spatie.be/docs/laravel-permission/v5/basic-usage/multiple-guards
 *
 * @package App\Database\Seeds
 */
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Enable these options if you need same role and other permission for User Model
         * Else, please follow the below steps for admin guard
         */

        // Create Roles and Permissions
        // $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        // $roleAdmin = Role::create(['name' => 'admin']);
        // $roleEditor = Role::create(['name' => 'editor']);
        // $roleUser = Role::create(['name' => 'user']);


        // Permission List as array
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'blog',
                'permissions' => [
                    // Blog Permissions
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'company_profile',
                'permissions' => [
                    // profile Permissions
                    'company_profile.create',
                    'company_profile.view',
                    'company_profile.edit',
                ]
            ],

            [
                'group_name' => 'company_branch',
                'permissions' => [
                    // profile Permissions
                    'company_branch.create',
                    'company_branch.view',
                    'company_branch.edit',
                    'company_branch.approve',
                    'company_branch.show',
                    'company_branch.delete',

                    
                ]
            ],

            [
                'group_name' => 'company_director',
                'permissions' => [
                    // profile Permissions
                    'company_director.create',
                    'company_director.view',
                    'company_director.edit',
                    'company_director.approve',
                    'company_director.show',
                    'company_director.delete',

                    
                ]
            ],

            [
                'group_name' => 'members_management',
                'permissions' => [
                    // profile Permissions
                    'members_management.create',
                    'members_management.view',
                    'members_management.edit',
                    'members_management.approve',
                    'members_management.show',
                    'members_management.delete',

                    
                ]
            ],

            [
                'group_name' => 'loan_application',
                'permissions' => [
                    // profile Permissions
                    'loan_application.create',
                    'loan_application.view',
                    'loan_application.edit',
                    'loan_application.approve',
                    'loan_application.show',
                    'loan_application.delete',

                    
                ]
            ],

            [
                'group_name' => 'support',
                'permissions' => [
                    // profile Permissions
                    'support.view',
                   // 'profile.edit',
                ]
            ],

            [
                'group_name' => 'hr_management',
                'permissions' => [
                    // profile Permissions
                    'hr_management.create',
                    'hr_management.view',
                    'hr_management.edit',
                    'hr_management.approve',
                    'hr_management.show',
                    'hr_management.delete',

                    
                ]
            ],
        ];


        // Create and Assign Permissions
        // for ($i = 0; $i < count($permissions); $i++) {
        //     $permissionGroup = $permissions[$i]['group_name'];
        //     for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
        //         // Create Permission
        //         $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
        //         $roleSuperAdmin->givePermissionTo($permission);
        //         $permission->assignRole($roleSuperAdmin);
        //     }
        // }

        // Do same for the admin guard for tutorial purposes
        $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup, 'guard_name' => 'admin']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }

        // Assign super admin role permission to superadmin user
        $admin = Admin::where('username', 'superadmin')->first();
        if ($admin) {
            $admin->assignRole($roleSuperAdmin);
        }
    }
}
