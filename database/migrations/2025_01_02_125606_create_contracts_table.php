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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_name');
            $table->date('contract_date');
            $table->date('contract_hijri_date');
            $table->string('contract_number');
            $table->string('contract_location');
            $table->string('contract_party_a');
            $table->string('contract_party_a_crn');
            $table->string('contract_party_a_location');
            $table->string('contract_party_b');
            $table->string('contract_party_b_crn');
            $table->string('contract_party_b_location');
            $table->string('contract_party_b_detailed_needs')->nullable();
            $table->integer('contract_value');
            $table->string('currency');
            $table->string('contract_value_words');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
