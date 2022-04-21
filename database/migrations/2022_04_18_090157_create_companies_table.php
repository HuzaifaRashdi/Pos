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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('laravel pos');
            $table->string('company_address')->default('laravel pos address');
            $table->string('company_phone')->default('+2205 454546551');
            $table->string('company_email')->default('laravelpos@laravel.gm');
            $table->string('company_fax')->default('+2202 5465468421');
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
        Schema::dropIfExists('companies');
    }
};
