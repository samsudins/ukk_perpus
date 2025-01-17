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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foregnId( column:'user_id')->constrained ( table : 'users');
            $table->foregnId( column:'buku_id')->constrained ( table : 'bukus');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->varchar('status')->default('null');
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
        Schema::dropIfExists('pinjams');
    }
};
