<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MailingLists;


class MailingListsController extends Controller
{
    //
    function index() {
        $mailing_lists = MailingLists::paginate(25);
        return $mailing_lists;
    }

    function show(MailingList $mailing_lists) {
        $mailing_lists = DB::table('mailing_lists')->get();
        return DB::select('select * from mailing_lists where mailing_list_group_id = ?',
                          [$id]);
        // return view('mailing_lists.show', compact('mailing_lists'));
    }

    function create() {
        $mailing_list_group_id = DB::select('SELECT ID FROM mailing_list_group ORDER BY ID DESC');

        MailingLists::create(array_merge($request->all(), ['mailing_list_group_id' => $mailing_list_group_id]));

        return view('mailing_lists.create');
    }

    public function store(Request $request)
    {
        $mailing_list_group_id = DB::select('SELECT ID FROM mailing_list_group ORDER BY ID DESC');

        MailingLists::create(array_merge($request->all(), ['mailing_list_group_id' => $mailing_list_group_id]));

        return redirect()->route('mailing_lists.index')
                         ->with('success', 'MailingList uploaded successfully..');
    }

    public function upload(Request $request){
        // $request->validate([
        //     'csv_blob' => 'required|max:2048'
        // ]);

        MailingLists::insert($request->all());

        
        return $request;

        // MailingLists::create($request->all());

    }
}
