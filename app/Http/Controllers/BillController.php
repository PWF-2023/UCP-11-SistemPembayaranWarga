<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\StatusBill;
use App\Models\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        // if ($user->is_admin == true) {
            $bills = Bill::all();

        // }else {
            $status_bills = StatusBill::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        // }
        // if ($user->id != 1) {

            // $bills = StatusBill::where('user_id', auth()->user()->id)
            // ->orderBy('is_pay', 'asc')
            // ->orderBy('date_bill', 'desc')
            // ->get();
        // } else {
        //$bills = Bill::all();
        // }
        return view('bill.index', compact('status_bills', 'bills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bill $bill)
    {
        $request->validate([
            'type' => 'required|max:255',
            'date_bill' => 'date',
            'nominal' => 'integer'
        ]);

        $bill = Bill::create([
            'type' => ucwords($request->type),
            'date_bill' => $request->date_bill,
            'nominal' => $request->nominal
        ]);

        return redirect()->route('bill.index')->with('success', 'Bill created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
