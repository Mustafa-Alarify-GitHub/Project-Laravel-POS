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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('mount');
            $table->foreignId('cat')->constrained('cateogries')->cascadeOnDelete();
            $table->foreignId('unit')->constrained('units')->cascadeOnDelete();
            $table->decimal('wholesale_price')->comment("سعر الجمله");
            $table->decimal('sales_price')->comment("سعر البيع");
            $table->integer('limit_Short')->comment(" حد النواقص");
            $table->date('overTime')->comment("تاريخ الانتهاء");
            $table->boolean('isDisplay')->comment(":ظهور اون لاين")->default(true);
            $table->text('description');
            $table->string('barcode')->comment("الباركود");
            $table->string('img');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
