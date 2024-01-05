<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OpeningBalance;
use App\Models\GeneralJournal;

class AccountingController extends Controller
{

    public function index()
    {
        return view('administrator/accounting/gen_journal');
    }
    

    public function adj_entry()
    {
        return view('administrator/accounting/adj_entry');
    }

    public function balance_sheet()
    {
        return view('administrator/accounting/balance_sheet');
    }
    
    public function dash_report_account()
    {
        return view('administrator\accounting\dash_report_account');
        
    } 
    
    public function gen_journal()
    {
        // $general_journals = GeneralJournal::all();
        $general_journal_codes = GeneralJournal::select('jou_code');
        // dd($general_journal_codes);
        $general_journals = GeneralJournal::select('jou_details.*', 'account_journal.*', 'chart_of_account.*')
        ->leftJoin('account_journal', 'account_journal.jou_id', '=', 'jou_details.jou_id')
        ->leftJoin('chart_of_account', 'chart_of_account.coa_id', '=', 'jou_details.coa_id')
        ->get();


        return view('administrator\accounting\gen_journal', compact('general_journals'));
    } 
    
    public function gen_legder()
    {
        return view('administrator\accounting\gen_ledger');
    } 
    
    public function opening_balance()
    {
        $open_balances = OpeningBalance::all();
        // dd($open_balances);
        return view('administrator\accounting\opening_balance', compact('open_balances'));
    } 

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
