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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->varchar(100);
            $table->string('designation')->varchar(100);
            $table->string('degree')->varchar(100);
            $table->string('image')->varchar(100);
            $table->string('hospital')->varchar(100);
            $table->timestamp('visiting_schedule')->nullable();
            $table->integer('phone')->varchar(100);
            $table->string('email')->varchar(100);
            $table->integer('visit_fee')->varchar(100);
            $table->string('status')->default('active');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
