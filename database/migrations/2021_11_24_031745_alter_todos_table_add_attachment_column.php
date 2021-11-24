<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTodosTableAddAttachmentColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('todos', function(Blueprint $table){
            $table->string('attachment')->nullabble()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('todos', function(Blueprint $table){
            $table->sdropColumn('attachment');
        });
    }
}
