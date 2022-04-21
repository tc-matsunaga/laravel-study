<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HogeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        # select * from users;
        // $users = DB::table('users')->get();

        // delete from users where id = 1;

        $array_asc_arr = [['id' => 1, 'name' => 'user1'], ['id' => 1, 'name' => 'user1'], ['id' => 1, 'name' => 'user1']];

        dd($array_asc_arr);

        $users = DB::table('users')->get();

        // return view('hoge', ['users' => $users]);
        return view('hoge', ['users' => $users]);
    }
}

$hoge = 'hjhgf'

if ($hoge) {

}else {
    
}

$all = sum(1, 2);

$num1 = 1
$num2 = 2

sum($num1, $num2);

function sum ($num1, $num2) {
    echo($num1 + $num2);
};

$array = [1, 2, 3];




$hoge = 'hoge';
$piyo = 'piyo';
$a = str_addition('a', 'b');

function str_addition($str1, $str2, $str3) {
    echo $str1 . $str2;
}

// $num = 1 - 2
// echo (boolean)$num;

// function array_plus($arr) {
//     $response = []
//     foreach($arr as $a) {
//         array_push($response, $a + 1);
//     };
//     return $response
// }

// function array_plus($arr) {
//     $hoge = map($arr as $a) {
//         return $a + 1
//     };
// }


// // string,  number : int, boolean,  array, object
// $string = 'hoge' . "piyo" . ``
// $number = 88
// $bool = true or false
// $null = null


// $array_str = ['0', '1', '2', '3', '4', '5'];
// $array_num = [0, 1, 2, 3, 4, 5];
// $array_bool = [true, false, true, true, false];


// $array = ['hoge', 7, false];

// $array_arr = [
//     [0, 1, 2, 3],
//     ['0', '1', '2'],
//     [true, false, true]
// ];

// // number 3
// echo($array_arr[0][3]);

// // 1
// echo($array_arr[1][1])

// $array_asc_arr = array(array('id' => 1, 'name' => 'user1'), array('id' => 1, 'name' => 'user1'), array('id' => 1, 'name' => 'user1'));

// $array_asc_arr = [
//     [
//         'id' => 1,
//         'name' => 'user1'
//     ],
//     [
//         'id' => 2,
//         'name' => 'user2'
//     ],
//     [
//         'id' => 3,
//         'name' => 'user3'
//     ]
// ];


// if, foreach, map

// 0, null, '', []
// $piyo = if (empty($hoge)) {
//     6
// } else {
//     9
// }

// if ($hgoe) return 'hoge'


// $hoge = $piyo == 1 ? 2 : 3;


// $users = [
//     [
//         'id' => 1,
//         'name' => 'hoge'
//     ], 
//     [
//         'id' => 2,
//         'name' => 'piyo'
//     ], 
//     [
//         'id' => 3,
//         'name' => 'fuga'
//     ]
// ]

// $hoge = [1, 2, 3, 4]

// // $user_count = count($users);
// // for($i = 1, $i <= $user_count, $i++) {
// //     echo($users[$i]);
// // }

// foreach($user as $users) {
//     echo($user['name']);
// }

// [
//     'id' => 1,
//     'name' => 'hoge'
// ]
