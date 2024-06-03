<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet_auteur', 100)->nullable();
            $table->text('contenu');
            $table->unsignedBigInteger('article_id')->after('contenu');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->timestamps();
        });
    }
 public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign('commentaires_article_id_foreign');
            $table->dropColumn('article_id');
        });
    }
};

