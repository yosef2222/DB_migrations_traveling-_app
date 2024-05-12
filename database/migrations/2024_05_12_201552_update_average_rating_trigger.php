<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('CREATE TRIGGER update_average_rating_trigger AFTER INSERT ON ratings
        FOR EACH ROW
        BEGIN
            UPDATE places 
            SET average_rating = (SELECT AVG(rating) FROM ratings WHERE place_id = NEW.place_id) 
            WHERE id = NEW.place_id;
        END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER update_average_rating_trigger');
    }
};
