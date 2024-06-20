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
        Schema::create('users_registers', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('user_id')->nullable()->default(null)->unique(); // Custom auto-incrementing primary key
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('address');
            $table->string('image');
            $table->string('gender');
            $table->string('user_type')->nullable();
            $table->string('password');
            $table->timestamps();
        });





  // Create trigger to generate user_id
  $triggerSQL = <<<SQL
  CREATE TRIGGER generate_user_id BEFORE INSERT ON users_registers FOR EACH ROW
  BEGIN
      -- Check if user_id is NULL
      IF NEW.user_id IS NULL THEN
          -- Find the maximum user_id value in the users_registers table
          SET @max_id := IFNULL((SELECT MAX(CAST(SUBSTRING(user_id, 3) AS UNSIGNED)) + 1 FROM users_registers), 100000);

          -- Increment the max_id and assign it to the new user_id
          SET NEW.user_id = CONCAT('22', LPAD(@max_id, 6, '0'));
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
        DB::unprepared('DROP TRIGGER IF EXISTS generate_user_id');

        Schema::dropIfExists('users_registers');
    }
};
