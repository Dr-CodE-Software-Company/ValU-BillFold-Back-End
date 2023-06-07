<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'Role-List',
            'Role-Create',
            'Role-Edit',
            'Role-Delete',
            'User-List',
            'User-Create',
            'User-Edit',
            'User-Delete',
            'Admin-List',
            'Admin-Create',
            'Admin-Edit',
            'Admin-Delete',
            'Subscription-List',
            'Subscription-Create',
            'Subscription-Edit',
            'Subscription-Delete',
            'About-List',
            'About-Create',
            'About-Edit',
            'About-Delete',
            'Service-List',
            'Service-Create',
            'Service-Edit',
            'Service-Delete',
            'Company-List',
            'Company-Create',
            'Company-Edit',
            'Company-Delete',
            'Blog-List',
            'Blog-Create',
            'Blog-Edit',
            'Blog-Delete',
            'Portfolio-List',
            'Portfolio-Create',
            'Portfolio-Edit',
            'Portfolio-Delete',
            'Contact-List',
            'Contact-Create',
            'Contact-Edit',
            'Contact-Delete',
            'Anoncement-List',
            'Anoncement-Create',
            'Anoncement-Edit',
            'Anoncement-Delete',
            'AllContact',
            'AllNotification',
            "ShowProfile",
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name' => 'admin']);
        }
    }
}
