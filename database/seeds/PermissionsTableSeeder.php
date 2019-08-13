<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '22',
                'title'      => 'user_enrol',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '23',
                'title'      => 'user_expel',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '24',
                'title'      => 'organization_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '25',
                'title'      => 'organization_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '26',
                'title'      => 'organization_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '27',
                'title'      => 'organization_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '28',
                'title'      => 'organization_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '29',
                'title'      => 'grade_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '30',
                'title'      => 'grade_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '31',
                'title'      => 'grade_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '32',
                'title'      => 'grade_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '33',
                'title'      => 'grade_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '34',
                'title'      => 'organization_type_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '35',
                'title'      => 'organization_type_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '36',
                'title'      => 'organization_type_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '37',
                'title'      => 'organization_type_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '38',
                'title'      => 'organization_type_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '39',
                'title'      => 'organization_type_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '40',
                'title'      => 'user_reset_password',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '41',
                'title'      => 'group_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '42',
                'title'      => 'group_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '43',
                'title'      => 'group_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '44',
                'title'      => 'group_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '45',
                'title'      => 'group_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '46',
                'title'      => 'curriculum_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '47',
                'title'      => 'curriculum_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '48',
                'title'      => 'curriculum_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '49',
                'title'      => 'curriculum_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '50',
                'title'      => 'curriculum_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '51',
                'title'      => 'objective_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '52',
                'title'      => 'objective_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '53',
                'title'      => 'objective_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '54',
                'title'      => 'objective_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '55',
                'title'      => 'objective_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '56',
                'title'      => 'curriculum_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '57',
                'title'      => 'permission_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '58',
                'title'      => 'user_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '59',
                'title'      => 'role_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '60',
                'title'      => 'organization_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '61',
                'title'      => 'group_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '62',
                'title'      => 'grade_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '63',
                'title'      => 'organization_type_manage',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '64',
                'title'      => 'curriculum_enrol',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '65',
                'title'      => 'curriculum_expel',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            ];

        Permission::insert($permissions);
    }
}
