<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('npm')->after('nama'); // Tambahkan kolom NPM
            $table->decimal('ipk', 3, 2)->nullable()->after('kelas_id'); // Tambahkan kolom IPK
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['npm', 'ipk']);
        });
    }
    
};
