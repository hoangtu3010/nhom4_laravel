<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {
            //
            $table->date("date")->nullable()->after("name");
            $table->string("address")->nullable()->after("date");
            $table->string("telephone")->nullable()->after("address");
            $table->string("email")->nullable()->after("address");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn("date");
            $table->dropColumn("address");
            $table->dropColumn("telephone");
            $table->dropColumn("email");
        });
    }
}
