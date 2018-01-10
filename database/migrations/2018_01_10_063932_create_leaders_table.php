<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->default(null);
            $table->string('last_name');
            $table->char('suffix',4)->default(null);
            $table->tinyInteger('gender')->comment('0 - Female,1 - Male');
            $table->string('school')->default(null);
            $table->string('work_place')->default(null);
            $table->string('contact_number');
            $table->string('fb_account')->default(null);
            $table->string('email_address');
            $table->tinyInteger('level')->comment('0-Pastor,1-Primary,2-144,3-1728,4-20,000');
            $table->tinyInteger('network')->comment('network');
            $table->tinyInteger('cell_group')->comment('Cell group under this leader');
            $table->date('birth_date');
            $table->date('first_attend');
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
        Schema::dropIfExists('leaders');
    }
}
