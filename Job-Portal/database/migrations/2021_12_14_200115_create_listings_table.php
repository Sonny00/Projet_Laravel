<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilisateur_id');
            $table->string('titre'); 
            $table->string('slug'); 
            $table->string('entreprise');
            $table->string('emplacement');
            $table->string('logo')->nullable();
            $table->boolean('est_souligne')->default(false);
            $table->boolean('est_active')->default(true);
            $table->text('contenu');
            $table->string('lien_de_redirection');
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
        Schema::dropIfExists('listings');
    }
}
