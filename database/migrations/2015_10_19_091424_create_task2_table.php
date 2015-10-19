<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTask2Table extends Migration
{
    private $tableName = 'task2';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date')->nullable();
            $table->string('Phone', '50')->nullable();
            $table->string('Name', '50')->nullable();;
        });
        $rows = [
            [1248, '2013-09-13 12:25:06', '89039773006', 'Катя'],
            [2011, '2013-09-12 18:21:02', '89653734042', 'Коля'],
            [2567, '2013-09-15 12:01:02', '89269620096', 'Сергей'],
            [3092, '2013-09-13 11:21:02', '89112564242', 'Дмитрий'],
            [5832, '2013-09-13 19:22:03', '89039773006', 'Катя'],
            [7881, '2013-09-14 18:21:02', '89039773006', 'Екатерина'],
            [8993, '2013-09-16 21:42:07', '89653734042', 'Николай']
        ];
        foreach ($rows as $row)
        {
            $insertRows[] = [
                'id' => $row[0],
                'Date' => $row[1],
                'Phone' => $row[2],
                'Name' => $row[3],
            ];
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
