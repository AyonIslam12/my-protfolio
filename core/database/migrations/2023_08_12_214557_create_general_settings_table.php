<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('sitename')->nullable();
            $table->string('email_from')->nullable();
            $table->text('email_template')->nullable();
            $table->string('base_color')->nullable();
            $table->text('mail_config')->nullable();
            $table->boolean('ev')->default(1);
            $table->boolean('en')->default(1);
            $table->boolean('force_ssl')->default(0);
            $table->string('active_template')->nullable();
            $table->text('sys_version')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
