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
        Schema::create('nhacungcaps', function (Blueprint $table) {
            $table->id();
            $table->string('ten_hang', 100);
            $table->string('loai_hang', 100);
            $table->float('gia', 10,2,2);
            $table->string('hinh_anh', 255);
            $table->string('so_luong_nhap', 100);
            $table->string('ten_cong_ty', 100);
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
        Schema::dropIfExists('nhacungcaps');
    }
};
