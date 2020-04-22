<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
class InquiryController extends Controller
{
    //

    public function store(Request $request){
      $request->validate([
        'full_name' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'message' => 'required',
      ]);
      $inq = new Inquiry;
      $inq->full_name = $request->full_name;
      $inq->user_id = $request->id;
      $inq->contact = $request->contact;
      $inq->message = $request->message;
      $inq->email = $request->email;

      $inq->save();

      return redirect()->back()->with('success','Inquiry submitted succesfully');

    }
}
