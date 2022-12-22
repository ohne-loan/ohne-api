<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFaqOQueAOhneOfereceAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(@"
        UPDATE faq
            SET answer = 'Oferece empréstimo pessoal online de forma facilitada, rápida e segura para pessoas físicas não negativadas. O valor do empréstimo é de 1 mil a 25 mil reais.'
        WHERE question = 'O que a Ohne oferece?'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(@"
        UPDATE faq
            SET answer = 'Oferece empréstimo pessoal online de forma facilitada, rápida e segura para pessoas físicas não negativadas. O valor do empréstimo é de 1 mil a 40 mil reais.'
        WHERE question = 'O que a Ohne oferece?'");
    }
}
