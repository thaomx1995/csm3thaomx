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
        Schema::create('sachtables', function (Blueprint $table) {
            $table->id();
            $table->string('ten_sach');
            $table->string('lsbn');
            $table->string('tac_gia');
            $table->string('the_loai');
            $table->string('so_trang');
            $table->string('nam_xuat_ban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sachtables');
    }
};
