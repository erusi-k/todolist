<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnameCreateAtToCreatedAtToUpdateAtToUpdatedAtOnTodolistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todolists', function (Blueprint $table) {
            $table->renameColumn('create_at','created_at');
            $table->renameColumn('update_at','updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todolists', function (Blueprint $table) {
            $table->renameColumn('create_at','created_at');
            $table->renameColumn('update_at','updated_at');
        });
    }
}
