<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MailingListController extends Controller
{
    //
    function index() {
        $mailing_lists = DB::table('mailing_lists')->get();
        echo $mailing_lists;
        // foreach ($mailing_lists as $mailing_lists)
        // {
        //     echo var_dump($mailing_list);
        // }
    }

    function show($id) {
        $mailing_lists = DB::table('mailing_lists')->get();
        return DB::select('select * from mailing_lists where id = ?',
                          [$id]);
    }

    function create() {
        return view('mailing_list.create');
    }
}
