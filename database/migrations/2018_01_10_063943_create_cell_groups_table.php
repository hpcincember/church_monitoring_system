<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment('name of cell group');
            $table->integer("leader_id")->comment('leader id');
            $table->integer("mother_cell_group_id")->comment('direct mother cell group');
            $table->integer("network_id")->comment('network');
            $table->tinyInteger("is_network")->default(0)->comment('0 - cell group only , 1 - network,');
            $table->tinyInteger("status")->default(1)->comment('0 - inactive , 1 - active');
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
        Schema::dropIfExists('cell_groups');
    }
}
