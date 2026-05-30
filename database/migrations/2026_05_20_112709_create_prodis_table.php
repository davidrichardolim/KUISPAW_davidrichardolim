<?php

use App\Models\Fakultas;
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
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Fakultas::class)->constrained('fakultas');
            $table->string('nama_prodi');
            $table->string('nama_kaprodi');
            $table->string('alias_prodi');
            $table->string('photo_kaprodi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
