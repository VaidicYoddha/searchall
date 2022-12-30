<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Ifsc;
use App\Models\Pincode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $banks = Bank::all();
        $ifsc = Ifsc::paginate(100);
        return view('ft.index', [
            'banks' => $banks,
            'ifsc' => $ifsc,
        ]);
    }


    public function ifscsearch(Request $request)
    {
        $this->validate($request, ['search' => 'required|max:255']);
        $search = $request->search;

        $ifsc = Ifsc::where('ifsc', 'like', '%' .$search. '%' )
        ->orwhere('micr', 'like', '%' .$search. '%' )
        ->orwhere('city', 'like', '%' .$search. '%' )
        ->orwhere('bank', 'like', '%' .$search. '%' )
        ->orwhere('district', 'like', '%' .$search. '%' )
        ->orwhere('state', 'like', '%' .$search. '%' )
        ->orderBy('id')->paginate(10)
        ->map(function ($row) use ($search) {
        $row->ifsc = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->ifsc);
        $row->micr = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->micr);
        $row->city = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->city);
        $row->bank = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->bank);
        $row->district = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->district);
        $row->state = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->state);
        $row->id = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->id);
            return $row;
            });
            return view('ft.ifscsearch', compact('ifsc','search'));
    }

    public function pinsearch (Request $request)
    {
        $this->validate($request, ['search' => 'required|max:255']);
        $search = $request->search;

        $pincode = Pincode::where('pincode', 'like', '%' .$search. '%' )
        ->orwhere('location', 'like', '%' .$search. '%' )
        ->orwhere('city', 'like', '%' .$search. '%' )
        ->orwhere('office', 'like', '%' .$search. '%' )
        ->orwhere('district', 'like', '%' .$search. '%' )
        ->orwhere('state', 'like', '%' .$search. '%' )
        ->orderBy('id')->paginate(10);
        // ->map(function ($row) use ($search) {
        // $row->pincode = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->pincode);
        // $row->location = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->location);
        // $row->city = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->city);
        // $row->office = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->office);
        // $row->district = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->district);
        // $row->state = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->state);
        // $row->id = preg_replace('/(' . $search . ')/i', "<span><mark><b> $1</b></mark><span/>", $row->id);
        //     return $row;
        //     });

        return view('ft.pinsearch', compact('pincode','search'));
    }

    public function ifsc(String $bank_id)
    {

        $ifsc = Ifsc::where('bank_id' , $bank_id)
                    ->paginate(10);

        $bank = Bank::where('id' , $bank_id)
                    ->first();



        return view('ft.ifsc', compact('ifsc','bank'));
    }
}
