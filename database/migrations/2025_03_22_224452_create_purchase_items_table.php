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
        Schema::create('purchase_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('purchases_id')->constrained('purchases')->onDelete('cascade'); // العلاقة مع جدول المشتريات
    $table->string('name'); // اسم المنتج
    $table->integer('quantity'); // الكمية
    $table->decimal('price', 10, 2); // السعر
    $table->decimal('total', 10, 2); // الإجمالي
    $table->foreignId('unit_id')->constrained('units')->cascadeOnDelete(); 
    $table->foreignId('category_id')->constrained('cateogries')->cascadeOnDelete(); 
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};
