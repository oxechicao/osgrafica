<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMaterials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'materials',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->foreign('idMaterialTypes')
                    ->references('id')
                    ->on('materialTypes');
                $table->json('characteristic');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_materials');
    }
}
