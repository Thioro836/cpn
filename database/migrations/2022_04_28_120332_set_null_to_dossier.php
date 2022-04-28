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
        Schema::table('dossier_patient', function (Blueprint $table) {
            $table->date('date_accouchement')->nullable()->change();
            $table->string('lieu_accouchement')->nullable()->change();
            $table->integer('id_accouchement')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dossier_patient', function (Blueprint $table) {
            $table->date('date_accouchement')->change();
            $table->string('lieu_accouchement')->change();
            $table->integer('id_accouchement')->change();
        });
    }
};
