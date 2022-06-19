<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdToBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
                // aggiungo alla tabella books la colonna inerente all'id degli autori
                $table->unsignedBigInteger('author_id')->nullable()->after('title');

                // relizzo la relazione
                // identifico e creo la foreign key
                $table->foreign('author_id')
                        ->references('id')
                        ->on('authors')->onDelete('set null');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
             //all'eliminazione cancello la chiave ed elimino la colonna 
             $table->dropForeign('books_author_id_foreign');

             $table->dropColumn('author_id');
        });
    }
}
