<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Rel_Category_Property_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_rel_category_property', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('category_id')->unsigned();
            $table->integer('property_id')->unsigned();

            $table->primary(['category_id', 'property_id'], 'category_property');
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_rel_category_property');
    }
}