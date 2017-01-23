<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHashColumnToQueryLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('query_logs', function(Blueprint $table){
            $table->char('hash', 32)->nullable();
        });

        \DB::statement('update query_logs set hash=md5(`sql`) where hash is null');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('query_logs', function(Blueprint $table){
            $table->dropColumn('hash');
        });
    }
}
