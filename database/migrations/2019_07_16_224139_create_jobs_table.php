<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->uuid('id');
            $table->primary('id');

            $table->string('title');
            $table->dateTime('announced_date');
            $table->dateTime('dead_line');
            $table->text('description');
            $table->string('organization');
            $table->string('job_link');
            $table->string('image_url')->nullable();
            $table->string('position');
            $table->uuid('category_id')->index();

            $table->timestamps();
            $table->softDeletes();

            //defining foreign keys
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
