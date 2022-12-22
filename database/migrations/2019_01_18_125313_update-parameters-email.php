<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateParametersEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('parameters')->where(['key' => 'contact.email'])->update(['value' => 'contato@ohne.com.br']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('parameters')->where(['key' => 'contact.email'])->update(['value' => 'ohne@ohne.com.br']);
    }
}
