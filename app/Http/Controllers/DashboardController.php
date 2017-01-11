<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Ticket;
use App\Http\Requests;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $today = Carbon::today();
        $today->toDateString();
        $soonDates = Ticket::where('trackingDate', '>', $today )->get();
        $previousDates = Ticket::where('trackingDate', '<', $today )->get();
        $todayDates=Ticket::where('trackingDate', '=', $today )->get();

        return view('dashboard.index', compact('soonDates',
            'previousDates',
            'todayDates'));
    }

    public function soonDates(){
        $today = Carbon::today();
        $today->toDateString();
        $soonDates = Ticket::where('trackingDate', '>', $today )->get();
        return view('dashboard.soon', compact('soonDates'));
    }

    public function previousDates(){
        $today = Carbon::today();
        $today->toDateString();
        $previousDates = Ticket::where('trackingDate', '<', $today )->get();
        return view('dashboard.previous', compact('previousDates'));
    }

    public function todayDates(){
        $today = Carbon::today();
        $today->toDateString();
        $todayDates=Ticket::where('trackingDate', '=', $today )->get();
        return view('dashboard.today', compact('todayDates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
