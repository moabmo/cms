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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('member_number')->unique(); // Unique member_number
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('registration_date');
            $table->enum('method', ['transfer', 'baptism']);
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->timestamps();
        });

        // Add a trigger to set member_number based on the auto-increment id
        DB::unprepared('
            CREATE TRIGGER set_member_number
            BEFORE INSERT ON members
            FOR EACH ROW
            BEGIN
                SET NEW.member_number = CONCAT("M", LPAD((SELECT IFNULL(MAX(CAST(SUBSTRING(member_number, 2) AS UNSIGNED)), 0) + 1 FROM members), 4, "0"));
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('member_number');
        });

        // Drop the trigger
        DB::unprepared('DROP TRIGGER IF EXISTS set_member_number');
    }
};
