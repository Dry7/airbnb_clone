<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->comment('First name')->change();
            $table->string('last_name')->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->date('birthday')->nullable();
            $table->tinyInteger('state', false, true)->default(0);
            $table->string('phone')->nullable();
            $table->string('language', 2)->nullable()->default('en');
            $table->string('currency', 3)->nullable()->default('USD');
            $table->string('country', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->text('about')->nullable();

            $table->string('university')->nullable();
            $table->string('employer')->nullable();
            $table->string('time_zone')->default('Moscow');
            $table->text('languages')->nullable();
            $table->integer('reviews', false, false)->default(0);

            $table->string('photo')->nullable();
            $table->string('video')->nullable();

            $table->boolean('verify')->default(false);
            $table->boolean('verify_email')->default(false);
            $table->boolean('verify_phone')->default(false);
            $table->boolean('verify_passport')->default(false);

            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();

            $table->boolean('receive_promotional_email')->default(false);
            $table->boolean('receive_informative_email')->default(false);
            $table->boolean('receive_phone_call')->default(false);

            $table->boolean('login_notifications_enabled')->default(false);

            $table->renameColumn('name', 'first_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('first_name', 'name');
            $table->dropColumn([
                'last_name', 'sex', 'birthday', 'state', 'phone', 'language', 'currency',
                'country', 'city', 'about', 'university', 'employer', 'time_zone', 'languages',
                'reviews', 'photo', 'video', 'verify', 'verify_email', 'verify_phone', 'verify_passport',
                'facebook', 'google', 'linkedin', 'receive_promotional_email', 'receive_informative_email',
                'receive_phone_call', 'login_notifications_enabled'
            ]);
        });
    }
}
