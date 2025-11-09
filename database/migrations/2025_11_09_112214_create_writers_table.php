<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expertise');
            $table->string('image');
            $table->timestamps();
        });

        DB::table('writers')->insert([
            [
                'name' => 'Marvel Collin',
                'expertise' => 'Spesialis Interactive Multimedia',
                'image' => 'https://i.pravatar.cc/150?img=12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'John Alamak',
                'expertise' => 'Spesialis Software Engineering',
                'image' => 'https://i.pravatar.cc/150?img=9',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
