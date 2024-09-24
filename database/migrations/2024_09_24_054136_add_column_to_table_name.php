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
        Schema::table('client_projects', function (Blueprint $table) {
            $table->string('client_name',255);
            $table->string('project_name',255);
            $table->string('status',100);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('budget',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_projects', function (Blueprint $table) {
            //
        });
    }
};
