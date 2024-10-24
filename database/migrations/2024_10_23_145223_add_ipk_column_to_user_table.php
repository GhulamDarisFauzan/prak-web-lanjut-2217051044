<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->float('ipk', 3, 2)->nullable()->check('ipk <= 4.00');
        });
    }
    
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('ipk');
        });
    }
    
};
