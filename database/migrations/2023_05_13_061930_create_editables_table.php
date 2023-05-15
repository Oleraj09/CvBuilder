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
        Schema::create('editables', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('age')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
            $table->string('edu1')->nullable();
            $table->string('edudesc1')->nullable();
            $table->string('edu2')->nullable();
            $table->string('edudsc2')->nullable();
            $table->string('work1')->nullable();
            $table->string('workpos1')->nullable();
            $table->string('workyear1')->nullable();
            $table->text('workdsc1')->nullable();
            $table->string('work2')->nullable();
            $table->string('workpos2')->nullable();
            $table->string('workyear2')->nullable();
            $table->text('workdsc2')->nullable();
            $table->string('ref')->nullable();
            $table->string('refdesg')->nullable();
            $table->string('refdept')->nullable();
            $table->string('refphone')->nullable();
            $table->text('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editables');
    }
};
