<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OpeningBalance;

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
        return view('administrator\accounting\gen_journal');
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
