<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaTable extends Migration
{
    public function up()
    {
        Schema::create('meta', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->nullableMorphs('metaable');
            $table->string("key")->nullable();
            $table->longText("group")->nullable();
            $table->longText("value")->nullable();
            $table->longText("type")->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('meta');
    }
}
