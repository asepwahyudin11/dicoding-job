<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 225);
            $table->text('description');
            $table->string('company_name', 225);
            $table->string('company_logo', 225);
            $table->string('company_sector', 50);
            $table->string('company_size', 50);
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('experience_id')->constrained('experiences');
            $table->timestamp('created_at')->nullable();
            $table->string('created_by', 50);
            $table->string('created_email', 125);
            $table->timestamp('closed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
