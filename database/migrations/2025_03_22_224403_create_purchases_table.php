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
        Schema::create('purchases', function (Blueprint $table) {
    $table->id();
    $table->string('supplier'); // اسم المورد
    $table->string('phone'); // رقم الهاتف
    $table->date('purchase_date'); // تاريخ الشراء
    $table->text('description')->nullable(); // الوصف
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
