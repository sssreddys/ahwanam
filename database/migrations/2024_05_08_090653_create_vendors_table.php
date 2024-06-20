<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('vendor_id')->nullable()->default(null)->unique(); // Custom auto-incrementing primary key
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('address');
            $table->string('image');
            $table->string('gender');
            $table->string('vendor_type')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        // Create trigger to generate vendor_id
        $triggerSQL = <<<SQL
        CREATE TRIGGER generate_vendor_id BEFORE INSERT ON vendors FOR EACH ROW
        BEGIN
            -- Check if vendor_id is NULL
            IF NEW.vendor_id IS NULL THEN
                -- Find the maximum vendor_id value in the vendors table
                SET @max_id := IFNULL((SELECT MAX(CAST(SUBSTRING(vendor_id, 3) AS UNSIGNED)) + 1 FROM vendors), 100000);

                -- Increment the max_id and assign it to the new vendor_id
                SET NEW.vendor_id = CONCAT('11', LPAD(@max_id, 6, '0'));
            END IF;
        END;
        SQL;

        DB::unprepared($triggerSQL);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the trigger
        DB::unprepared('DROP TRIGGER IF EXISTS generate_vendor_id');

        Schema::dropIfExists('vendors');
    }
};
