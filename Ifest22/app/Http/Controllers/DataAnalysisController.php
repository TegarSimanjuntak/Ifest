<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Da_form;
use App\Models\Ticket;

class DataAnalysisController extends Controller
{
    public function index()
    {
        // $registered = false;
        // $onLogin = false;

        // if (Auth::check()) {
        //     $data = Ticket::where('email', Auth::user()->email)->first();
        //     if ($data->da_status != '0') $registered = true;
        //     $onLogin = true;
        // }

        // return view('competition.dataAnalysis', compact('registered', 'onLogin'));
        return view('competition.dataAnalysis');
    }

    public function registration()
    {
        // $email = Auth::user()->email;
        // $check = Ticket::where('email', $email)->first();
        // if($check->da_status != '0'){
        //     return redirect()->route('profile');
        // }

        return view('registration.regis-da');
        // return redirect()->route('da');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_leader' => 'required',
            'team_member_1' => 'required',
            'team_member_2' => 'required',
            // 'id_card' => 'required|file|mimes:zip|max:2000',
            // 'payment_confirmation' => 'required|image|max:1024',
        ]);

        // $id_card = $request->file('id_card');
        // $name_id_card = time() . "_" . $id_card->getClientOriginalName();
        // $id_card->storeAs('public/images/id_card/data_analyst/', $name_id_card);

        // $payment_confirmation = $request->file('payment_confirmation');
        // $name_payment_confirmation = time() . "_" . $payment_confirmation->getClientOriginalName();
        // $payment_confirmation->storeAs('public/images/payment_confirmation/data_analyst/', $name_payment_confirmation);

        Da_Form::create([
            'email' => Auth::user()->email,
            'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'team_member_1' => $request->team_member_1,
            'team_member_2' => $request->team_member_2,
            'team_member_3' => $request->team_member_3,
            // 'id_card' => $name_id_card,
            // 'proof_payment' => $name_payment_confirmation,
        ]);

        Ticket::where('email', Auth::user()->email)->update([
            'da_status' => '1'
        ]);

        return redirect()->route('home');
    }
}