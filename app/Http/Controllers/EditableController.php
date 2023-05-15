<?php

namespace App\Http\Controllers;

use App\Models\Editable;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use FontLib\Table\Type\name;

class EditableController extends Controller
{
    function regconf(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6|max:15',
        ]);
        $data = new User();
        $data->name = "$request->name";
        $data->password = Hash::make($request->password);
        $data->email = "$request->email";
        $data->save();
        Alert::success('Register Successfull');
        return redirect()->back();
    }
    function logconf(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Alert::success('Login Completed!!');
            return redirect()->intended('register');
        } else {
            Alert::error('Login Unsuccessful!!');
            return redirect()->intended('cv1');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    function cv1()
    {
        if (Editable::where('user', '=', Auth::user()->id)->exists()) {
            $userId = Auth::user()->id;
            $data = Editable::where('user', $userId)->firstOrFail();
            return view('CV1.cv1', compact('data'));
        } else {
            $data = Editable::find(1);
            // print($data);
            return view('CV1.cv1', compact('data'));
        }
    }
    function reg()
    {
        return view('register');
    }
    function cv1submit(Request $request)
    {
        if (Editable::where('user', '=', Auth::user()->id)->exists()) {
            $userId = Auth::user()->id;
            $data = Editable::where('user', $userId)->firstOrFail();
            $data->user = Auth::user()->id;
            $data->name = "$request->name";
            $data->email = "$request->email";
            $data->phone = "$request->phone";
            $data->designation = "$request->designation";
            $data->age = "$request->age";
            $data->skill1 = "$request->skill1";
            $data->skill2 = "$request->skill2";
            $data->skill3 = "$request->skill3";
            $data->skill4 = "$request->skill4";
            $data->skill5 = "$request->skill5";
            $data->edu1 = "$request->edu1";
            $data->edudesc1 = "$request->edudesc1";
            $data->edu2 = "$request->edu2";
            $data->edudsc2 = "$request->edudsc2";
            $data->work1 = "$request->work1";
            $data->workpos1 = "$request->workpos1";
            $data->workyear1 = "$request->workyear1";
            $data->workdsc1 = "$request->workdsc1";
            $data->work2 = "$request->work2";
            $data->workpos2 = "$request->workpos2";
            $data->workyear2 = "$request->workyear2";
            $data->workdsc2 = "$request->workdsc2";
            $data->ref = "$request->ref";
            $data->refdesg = "$request->refdesg";
            $data->refdept = "$request->refdept";
            $data->refphone = "$request->refphone";
            $image = $request->image;
            $folder = 'image';
            if ($image) {
                $imageinfo = 'user_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
                $image->move($folder, $imageinfo);
                $image = $folder . '/' . $imageinfo;
                $data->img = $image;
            }
            $data->update();
            return redirect()->route('cv1view', Auth::user()->id);
        } else {
            $data = new Editable();
            $data->user = Auth::user()->id;
            $data->name = "$request->name";
            $data->email = "$request->email";
            $data->phone = "$request->phone";
            $data->designation = "$request->designation";
            $data->age = "$request->age";
            $data->skill1 = "$request->skill1";
            $data->skill2 = "$request->skill2";
            $data->skill3 = "$request->skill3";
            $data->skill4 = "$request->skill4";
            $data->skill5 = "$request->skill5";
            $data->edu1 = "$request->edu1";
            $data->edudesc1 = "$request->edudesc1";
            $data->edu2 = "$request->edu2";
            $data->edudsc2 = "$request->edudsc2";
            $data->work1 = "$request->work1";
            $data->workpos1 = "$request->workpos1";
            $data->workyear1 = "$request->workyear1";
            $data->workdsc1 = "$request->workdsc1";
            $data->work2 = "$request->work2";
            $data->workpos2 = "$request->workpos2";
            $data->workyear2 = "$request->workyear2";
            $data->workdsc2 = "$request->workdsc2";
            $data->ref = "$request->ref";
            $data->refdesg = "$request->refdesg";
            $data->refdept = "$request->refdept";
            $data->refphone = "$request->refphone";
            $image = $request->image;
            $folder = 'image';
            if ($image) {
                $imageinfo = 'user_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
                $image->move($folder, $imageinfo);
                $image = $folder . '/' . $imageinfo;
                $data->img = $image;
            }
            $data->save();
            return redirect()->route('cv1view', Auth::user()->id);
        }
    }
    function cv1view($id)
    {
        $data = Editable::where('user', $id)->get();
        // print($data[0]->img);
        return view('CV1.update', compact('data'));
    }
    function cv1download($id)
    {
        $data = Editable::where('user', $id)->get();
        $pdf = PDF::loadView('CV1.update', compact('data'))->setOptions(['defaultFont' => 'sans-serif'], ['isRemoteEnabled' => 'true']);
        return $pdf->download('cv1.pdf');
    }
}
