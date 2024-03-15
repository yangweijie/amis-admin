<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \Slowlyo\OwlAdmin\Support\Cores\Database::make()->up();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Slowlyo\OwlAdmin\Support\Cores\Database::make()->down();
    }
};
