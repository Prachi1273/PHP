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
	    Schema::create('programmatic_seo_templates', function (Blueprint $table) {
		$table->id();
		$table->string('name');
		$table->string('slug_pattern');
		$table->text('title_template');
		$table->text('meta_description_template')->nullable();
		$table->text('h1_template')->nullable();
		$table->longText('content_template')->nullable();
		$table->boolean('is_active')->default(true);
		$table->timestamps();
	    });
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmatic_seo_templates');
    }
};
