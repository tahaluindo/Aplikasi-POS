<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;

class AddUpdatePurchaseAddExtraChargesPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Permission::create(['name' => 'purchase.update_extra_charges']);
        Permission::create(['name' => 'purchase.add_extra_charges']);
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
