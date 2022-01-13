<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

use function PHPUnit\Framework\MockObject\Builder\after;

class AddMoreColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('user_role', ['1', '2'])->default('2')->after('id');
            $table->string('age')->nullable()->after('password');
            $table->string('gender')->nullable()->after('age');
            $table->string('height')->nullable()->after('gender');
            $table->string('weight')->nullable()->after('height');
            $table->string('facebook_id')->nullable()->after('weight');
            $table->string('google_id')->nullable()->after('facebook_id');
            $table->enum('status', ['Active', 'Inactive'])->default('Active')->after('weight');
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
            $table->dropColumn('user_role')->nullable();
            $table->dropColumn('age')->nullable();
            $table->dropColumn('gender')->nullable();
            $table->dropColumn('height')->nullable();
            $table->dropColumn('weight')->nullable();
            $table->dropColumn('status')->nullable();
        });
    }
}
