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
        DB::unprepared('create trigger kolcsonadas after insert on borrows for each row
        update films set available=false where id=NEW.filmID;');
        DB::unprepared('create trigger visszavetel after update on borrows for each row
        update films set available=true where id=NEW.filmID and NEW.out is not null;');
        DB::unprepared('CREATE TRIGGER szamlalo BEFORE INSERT ON borrows FOR EACH ROW UPDATE customers set customers.rank=(select count(*) from borrows where customers.id=NEW.customerID) where customers.id=NEW.customerID;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('drop trigger kolcsonadas;');
        DB::unprepared('drop trigger visszavetel;');
        DB::unprepared('drop trigger szamlalo;');
    }
};
