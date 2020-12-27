<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MailingLists;


class MailingListController extends Controller
{
    //
    function index() {
        $mailing_lists = DB::table('mailing_list_group')->get();
        // $mailing_lists = MailingList::latest()->paginate(5); 
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
        return view('mailing_list_group.show', compact('mailing_list'));
    }

    function create() {
        return view('mailing_list_group.create');
    }

    public function store(Request $request)
    {
        MailingList::create($request->all());

        return redirect()->route('mailing_list_group.index')
                         ->with('success', 'MailingList uploaded successfully..');
    }
        
}
