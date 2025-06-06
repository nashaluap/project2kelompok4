<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('tb_menu', function (Blueprint $table) {
        $table->timestamps(); // menambahkan created_at dan updated_at
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tb_menu', function (Blueprint $table) {
        $table->dropTimestamps();
    });
    }
};
