<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
//        Schema::create('roles_and_permissions', function (Blueprint $table) {
//            $table->bigIncrements('id');
//
//            //
//
//            $table->timestamps();
//        });

        $super_admin = \App\Models\Role::create(['name' => 'super-administrator']);
        $user = \App\Models\Role::create(['name' => 'user']);

        // permissions
        $user_permissions = \App\Models\Permission::create(['name' => 'user.*']);

        $user->syncPermissions($user_permissions);
    }

    public function down()
    {
//        Schema::dropIfExists('roles_and_permissions');
    }
};
