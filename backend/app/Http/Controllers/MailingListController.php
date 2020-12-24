<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MailingList;
use App\Models\MailingLists;


class MailingListController extends Controller
{
    //
    function index() {
        // $mailing_lists = DB::table('mailing_lists')->get();
        $mailing_lists = MailingList::latest()->paginate(5);
        return $mailing_lists;
        // return view('mailing_list.index', compact('mailing_list'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        // foreach ($mailing_lists as $mailing_lists)
        // {
        //     echo var_dump($mailing_list);
        // }
    }

    function show(MailingList $mailing_list) {
        // $mailing_lists = DB::table('mailing_lists')->get();
        // return DB::select('select * from mailing_lists where id = ?',
        //                   [$id]);
        return view('mailing_list.show', compact('mailing_list'));
    }

    function create() {
        return view('mailing_list.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'csv' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('mailing_lists.index')
                         ->with('success', 'MailingList uploaded successfully..');
    }
    


    function uploadMailingList(Request $request) {
        return $request;
    }
}
