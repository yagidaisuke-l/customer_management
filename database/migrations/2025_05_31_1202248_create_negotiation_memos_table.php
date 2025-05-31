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
        Schema::create('negotiation_memos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trial_customer_id')->constrained()->onDelete('cascade');
            $table->string('company_name')->nullable();
            $table->dateTime('meeting_date')->nullable();
            $table->string('meeting_place')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('position')->nullable();

            $table->string('budget')->nullable();
            $table->string('authority')->nullable();
            $table->string('needs')->nullable();
            $table->string('timing')->nullable();
            $table->string('competitor')->nullable();

            $table->string('decision_maker')->nullable();
            $table->string('influence')->nullable();
            $table->string('relationship')->nullable();

            $table->text('discussion_summary')->nullable();
            $table->text('accepted_proposal')->nullable();
            $table->text('reconsider_proposal')->nullable();

            $table->text('customer_issues')->nullable();
            $table->text('solutions')->nullable();

            $table->text('others')->nullable();
            $table->text('good_reactions')->nullable();

            $table->date('next_meeting_date')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negotiation_memos');
    }
};
