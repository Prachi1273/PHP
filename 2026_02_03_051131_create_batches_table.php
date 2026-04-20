<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
	{
	    Schema::create('batches', function (Blueprint $table) {
		$table->id();

		$table->string('course_name');
		$table->string('course_slug')->unique();

		$table->enum('batch_type', ['Morning', 'Evening']);

		$table->date('start_date');
		$table->time('start_time');
		$table->time('end_time');

		$table->string('duration');
		$table->string('days');

		$table->string('image')->nullable();

		$table->boolean('is_active')->default(true);
		$table->integer('display_order')->default(0);

		$table->timestamps();
	    });
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
