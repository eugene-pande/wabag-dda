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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            //Basic project information
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('project_code')->unique();
            $table->string('location')->nullable();
            $table->string('coordinates')->nullable();

            //Budget and financial details
            $table->decimal('budget', 15, 2)->nullable();
            $table->decimal('amount_spent', 15, 2)->default(0);
            $table->string('currency')->default('PGK');

            //Timeline Information
            $table->date('start_date');
            $table->date('end_date');
            $table->date('actual_end_date')->nullable();

            // Status and progress tracking
            $table->enum('status', ['planned', 'tendering', 'awarded', 
            'in_progress', 'completed', 'suspended', 'terminated'])->default('planned');
            $table->integer('progress_percentage')->default(0);

            //Media and documentation
            $table->string('project_document')->nullable(); // Path to project document
            $table->string('project_image')->nullable(); // Path to project image
            $table->string('project_video')->nullable(); // Path to project video

            // Approval and verification
           // $table->boolean('approved')->default(false);
           // $table->date('approval_date')->nullable();


            //Project categorization
            $table->foreignId('project_type_id')->constrained('project_types')->onDelete('cascade');
            $table->foreignId('ward_id')->constrained('wards')->onDelete('cascade');
            $table->foreignId('funding_source_id')->constrained('funding_sources')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
