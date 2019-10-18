<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->string('braintree_id')->nullable();
            $table->string('braintree_plan')->nullable();
            $table->string('stripe_id')->nullable()->change();
            $table->string('stripe_status')->nullable()->change();
            $table->string('stripe_plan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn([
                'braintree_id',
                'braintree_plan',
            ]);
            $table->string('stripe_id')->change();
            $table->string('stripe_status')->change();
            $table->string('stripe_plan')->change();
        });
    }
}
