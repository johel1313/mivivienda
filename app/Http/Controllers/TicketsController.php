<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Ticket;
use App\Provincia;
use App\Distrito;
use App\Canton;
use  App\User;
use App\Promoter;

/**
 * Class TicketsController
 * @package App\Http\Controllers
 */
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        $provinces = Provincia::select('nombre')->get();
        $cantones = Canton::select('nombre')->get();
        $districts = Distrito::select('nombre')->get();
        $promoters = Promoter::all();
        return view('tickets.list', compact('tickets', 'provinces', 'cantones', 'districts','promoters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            Ticket::create($request->all());
            return response()->json([
                'Mensaje' => 'Creado satisfactoriamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*GET TRACKING DATE FROM NORMAL FORMAT*/
        $tracking = Ticket::where('id', $id)->select('trackingDate')->first();

        /*TRACKING DATE STRING*/
        $trackingDay = $tracking->trackingDate;

        /*SET TIME LANGUAGE FROM DATES TO SPANISH*/
        Carbon::setLocale('es');

        /*GET TRACKING DATE DIFFERENCE FOR HUMANS FORMAT*/
        $seguimiento = Carbon::createFromFormat('Y-m-d', $trackingDay)->diffForHumans();


        /*GET USER INFORMATION QUERY FOR VIEW TEMPLATE BASED ITS USER_ID VALUE*/

        $authorID = Ticket::where('id',$id)->select('user_id')->first()->user_id;

        $author = User::findorFail($authorID);

        $promoterID = Ticket::where('id',$id)->select('promoter_id')->first()->promoter_id;

        $promoter = Promoter::findOrFail($promoterID);
        

        /*GET ALL TICKET DATA FROM DATABASE*/
        $ticket = Ticket::findOrFail($id);

        /*GET PROMOTER INFO FROM DATABASE*/



        
        
        /*PASS VARIABLES TO A VIEW*/
        return view('tickets.view', compact('ticket', 'seguimiento', 'author','promoter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return response()->json(
            $ticket->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->fill($request->all());
        $ticket->save();
        return response()->json([
            'mensaje' => 'actualizado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return response()->json([
            'mensaje' => 'Eliminado'
        ]);
    }
}
