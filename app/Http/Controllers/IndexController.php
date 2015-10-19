<?php
/**
 * Created by PhpStorm.
 * User: bobahbi4
 * Date: 19.10.15
 * Time: 10:52
 */

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\task1;
use App\task2;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index($locale = 'ru') {
        App::setLocale($locale);

        return view('welcome')
        ->withList2task(
            task2::query('select * from task2
                          order by substr(phone, 4,12)-if(minute(date) = 1, 20000000, 0)+day(date)*10+hour(date) asc')
            ->get()
        )
        ->with(
            'list1task',
            (new task1())->getValidPhone()
        );
    }
}