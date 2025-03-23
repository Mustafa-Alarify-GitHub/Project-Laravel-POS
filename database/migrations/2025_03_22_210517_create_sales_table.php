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
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete(); // العميل
        // $table->foreignId('item_id')->constrained('items')->cascadeOnDelete(); // المنتج
        // $table->integer('quantity'); // الكمية
        // $table->decimal('price', 10, 2); // السعر
        // $table->decimal('total', 10, 2); // الإجمالي
        // $table->string('type')->default('بيع'); // نوع العملية (بيع أو إرجاع)
        $table->string('payment_method')->default('كاش'); 

        $table->text('description')->nullable(); // الوصف
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
