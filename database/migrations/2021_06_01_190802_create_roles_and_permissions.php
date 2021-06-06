<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateRolesAndPermissions extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $sellerRole = Role::create(['name' => 'seller']);
        $buyerRole = Role::create(['name' => 'buyer']);

        $accessAdminPanelPermission = Permission::create(['name' => 'access admin panel']);
        $createPostPermission = Permission::create(['name' => 'create post']);
        $buyPostPermission = Permission::create(['name' => 'buy post']);

        $adminRole->givePermissionTo($accessAdminPanelPermission);
        $adminRole->givePermissionTo($accessAdminPanelPermission);
        $adminRole->givePermissionTo($accessAdminPanelPermission);

        $sellerRole->givePermissionTo($createPostPermission);
        $sellerRole->givePermissionTo($buyPostPermission);

        $buyerRole->givePermissionTo($buyPostPermission);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
