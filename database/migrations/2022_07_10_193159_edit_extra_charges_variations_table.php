<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditExtraChargesVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variations', function (Blueprint $table) {
            $table->decimal('additional_expense_value_1', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_2', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_3', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_4', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_5', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_6', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_7', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_8', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_9', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_10', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_11', 22, 4)->default(0)->change();
            $table->decimal('additional_expense_value_12', 22, 4)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variations', function (Blueprint $table) {
            //
        });
    }
}
