<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('business_name');
            $table->integer('mobile');
            $table->integer('phone');
            $table->string('email');
            $table->string('state');
            $table->string('type');
            $table->string('cif');
            $table->string('postal_code');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('comments');
            $table->timestamps();
        });

        Schema::create('business_customers', function (Blueprint $table) {
            $table->primary('customers_id', 'business_id');

            $table->unsignedBigInteger('customers_id');
            $table->unsignedBigInteger('business_id');
            $table->timestamps();

            $table->foreign('customers_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');

            $table->foreign('business_id')
                ->references('id')
                ->on('business')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business', function (Blueprint $table) {
            //
        });
    }
}
