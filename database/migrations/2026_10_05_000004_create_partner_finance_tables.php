<?php
use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->string('source_type')->nullable();
            $table->unsignedBigInteger('source_id')->nullable();
            $table->decimal('amount', 12, 2);
            $table->string('status')->default('pending');
            $table->timestamp('available_at')->nullable();
            $table->timestamps();
        });
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 12, 2);
            $table->string('method');
            $table->string('account');
            $table->string('status')->default('pending');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('withdrawals');
        Schema::dropIfExists('commissions');
    }
};