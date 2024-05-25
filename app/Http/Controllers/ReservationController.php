<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Mail\ReservationCreated;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $reservation = Reservation::query();

        if (!empty($keyword)) {
            $reservation->where('title', 'like', "%$keyword%");
        }
        $reservationData = $reservation->paginate(5);

        return view('reservation.index',compact('reservationData'));
    }

//    public function create(){
//        return view('reservation.create');
//    }

    public function store(ReservationRequest $request){
//        dd($request);
        $reservation=Reservation::create($request->all());

         if($reservation){
             Mail::to($request->email)->send(new ReservationCreated($reservation));
         }else{
             return redirect()->back()->with('error', 'Reservation  faild.');
         }

        return redirect()->back()->with('success', 'Reservation  created successfully.');
    }

//    public function edit(Reservation $reservation){
//
//        return view('reservation.edit',compact('reservation'));
//    }
//
//    public function update(Reservation $reservation , ReservationRequest $request){
//        $reservationData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/reservation');
//            $reservationData['image'] = str_replace('public/', '', $imagePath);
//        }
//
//        $reservation->update($reservationData);
//
//        return redirect()->route('reservation.index')->with('success', 'reservation item successfully updated');
//    }


    public function delete(Reservation $reservation){
        $reservation->delete();
        return redirect()->route('reservation.index')->with('error','Successfully  reservation items deleted');

    }
    public function duplicate(Reservation $reservation){
        $productDuplicate=$reservation->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }

}
