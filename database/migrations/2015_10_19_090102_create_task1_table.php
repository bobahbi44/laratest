<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTask1Table extends Migration
{
    private $tableName = 'task1';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('Phone', '50');
        });

        $rows = [
            '8(915)234 23-12', '7 926111 2345', '9039772525', '90392713151', 'Телефонный номер89152025598',
            'тел: 96132141223', '+7(495)202-15-16', '84952921516', '8-926-111-23-45', '8112564302',
            '84952021516', '', '375296863801','+380967231126'
        ];
        foreach ($rows as $row)
        {
            $insertRows[] = [ 'Phone' => $row ];
        }

        \DB::table($this->tableName)->insert($insertRows);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }
}
