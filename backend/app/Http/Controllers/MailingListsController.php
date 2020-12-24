<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MailingLists;


class MailingListsController extends Controller
{
    //
    function index() {
        $mailing_lists = MailingLists::latest()->paginate(5);
        return $mailing_lists;
    }

    function show(MailingList $mailing_lists) {
        // $mailing_lists = DB::table('mailing_lists')->get();
        // return DB::select('select * from mailing_lists where id = ?',
        //                   [$id]);
        return view('mailing_lists.show', compact('mailing_lists'));
    }

    function create() {
        return view('mailing_lists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'csv' => 'required'
        ]);

        MailingLists::create($request->all());

        return redirect()->route('mailing_lists.index')
                         ->with('success', 'MailingList uploaded successfully..');
    }
}
