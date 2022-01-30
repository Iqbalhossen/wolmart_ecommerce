<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->integer('brand')->nullable();
            $table->integer('categories')->nullable();
            $table->integer('products')->nullable();
            $table->integer('coupons')->nullable();
            $table->integer('shipping_area')->nullable();
            $table->integer('orders')->nullable();
            $table->integer('return_order')->nullable();
            $table->integer('manage_stock')->nullable();
            $table->integer('manage_review')->nullable();
            $table->integer('mega_menu')->nullable();
            $table->integer('show_by_category')->nullable();
            $table->integer('show_by_brand')->nullable();
            $table->integer('slider')->nullable();
            $table->integer('all_reports')->nullable();
            $table->integer('manage_blog')->nullable();
            $table->integer('all_users')->nullable();
            $table->integer('extra_option')->nullable();
            $table->integer('manage_admin')->nullable();
            $table->integer('site_setting')->nullable();
            $table->integer('seo_setting')->nullable();
            $table->integer('status')->nullable();

            
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
        Schema::dropIfExists('admins');
    }
}
