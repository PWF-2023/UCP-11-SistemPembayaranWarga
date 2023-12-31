<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\StatusBill;
use App\Models\User;
use Illuminate\Http\Request;

class StatusBillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statusbills = StatusBill::with('bill')->where('user_id', auth()->user()->id)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('statusbill.index', compact('statusbills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Bill $bill)
    {
        if ($bill->id !=1){
            $users = User::where('name', '!=', 'Admin')
            ->orderBy('name')
            ->get();
            $fbill = Bill::where('id', '==', $bill->id);
            // $bltype = $bills->type;
            // $bldate = $bills->date_bill;
            // $blnom = $bills->nominal;
            return view('statusbill.create', compact('fbill', 'users', 'bill' ));
        }else{
            return redirect()->back()->with('danger', 'Edit Bill Failed');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bill $bill, User $users)
    {
        $request->validate([
            'checkall' => 'boolean',
            'checkuser' => 'boolean'
        ]);

        $users = User::where('id', '==', $request->input('ids'));

        foreach($users as $user){
            if ($user->id == $request->input('ids')) {
                $statusbills = StatusBill::create([
                    'user_id'=> $user->id,
                    'bill_id'=> $bill->id,
                    'is_pay'=> false,
                    'is_late'=> false
                ]);
            } else {
                return redirect()->route('bill.index')->with('danger', 'Bill managed Failed!');
            }

        }

        return redirect()->route('bill.index')->with('success', 'Bill managed successfully!');
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
        // $users = User::where('id', '!=', '1')
        //     ->orderBy('name')
        //     ->get();
        //     return view('statusbill.edit', compact('users'));
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
