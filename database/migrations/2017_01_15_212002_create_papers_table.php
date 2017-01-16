<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('author_id')->unsigned();
            $table->integer('reviewer_id')->unsigned();
            $table->enum('initial_recommendation', [
              'accept', 'minor_revisions', 'major_revisions', 'reject'
            ]);
            $table->enum('final_recommendation', [
              'accept',
              'minor_revisions',
              'major_revisions',
              'reject',
            ]);
            $table->string('draft_filename');
            $table->string('initial_review_filename');
            $table->string('revised_filename');
            $table->string('final_review_filename');
            $table->enum('status', [
              'awaiting_assignment',
              'awaiting_review',
              'awaiting_revisions',
              'revisions_submitted',
              'accepted',
              'rejected',
            ]);
            $table->enum('final_decision', ['accepted', 'rejected']);
            $table->dateTime('when_submitted');
            $table->dateTime('when_assigned');
            $table->dateTime('when_initial_review');
            $table->dateTime('when_editor_initial_decision');
            $table->dateTime('when_revision_submitted');
            $table->dateTime('when_final_review');
            $table->dateTime('when_complete');
            $table->text('editor_notes');
            $table->dateTime('when_editor_notes');
            $table->text('final_notes');
            $table->dateTime('when_final_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}
