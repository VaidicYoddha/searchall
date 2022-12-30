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
        Schema::create('ifscs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bank_id')->nullable()->cascadeOnDelete();
            $table->string('bank');
            $table->string('ifsc');
            $table->string('micr')->nullable();
            $table->string('branch');
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->integer('std')->nullable();
            $table->integer('phone')->nullable();
            $table->foreignId('state_id')->nullable()->cascadeOnDelete();
            $table->foreignId('district_id')->nullable()->cascadeOnDelete();
            $table->foreignId('citi_id')->nullable()->cascadeOnDelete();
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
        Schema::dropIfExists('ifscs');
    }
};
