<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();

        return view('backend.about.index', compact(['about']));
    }
    public function aboutUpdate(Request $request)
    {
        $about = AboutUs::first();
        $status = $about->update([
            'heading' => $request->heading,
            'content' => $request->content,
            'image' => $request->image,
            'video' => $request->video,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
        ]);

        if ($status) {
            return redirect()->back()->with('success', 'Modifié avec succès');
        } else {
            return back()->with('error', 'something went wrong!');
        }
    }
}
