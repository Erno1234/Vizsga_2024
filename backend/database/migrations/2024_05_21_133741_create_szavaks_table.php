<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });


        Szavak::create(["angol"=>"beautiful","magyar"=>"gyönyörű","temaId"=>1]);
        Szavak::create(["angol"=>"curious","magyar"=>"kíváncsi","temaId"=>1]);
        Szavak::create(["angol"=>"climbing","magyar"=>"mászás","temaId"=>2]);
        Szavak::create(["angol"=>"running","magyar"=>"futás","temaId"=>2]);
        Szavak::create(["angol"=>"table","magyar"=>"asztak","temaId"=>3]);
        Szavak::create(["angol"=>"chair","magyar"=>"szék","temaId"=>3]);
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
