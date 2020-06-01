<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpmsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpms_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ws_pro_id')->nullable();
            $table->string('title')->unique();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->text('content_html')->nullable();
            $table->text('content_js')->nullable();
            $table->json('options')->nullable();            
            $table->timestamps();
            $table->softDeletes();	                         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bpms_forms');
    }
}
