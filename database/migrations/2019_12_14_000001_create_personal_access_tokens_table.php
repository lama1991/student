<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
=======
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
<<<<<<< HEAD
=======
            $table->timestamp('expires_at')->nullable();
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
=======
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
