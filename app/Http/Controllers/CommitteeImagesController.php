<?php

namespace App\Http\Controllers;

use App\Committee;
use App\Committee_image;
use Illuminate\Http\Request;
use Auth;

class CommitteeImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($committee_id)
    {
        $items = Committee_image::paginate(10);
        return view('Admin.committees.images', compact('items', 'committee_id'));
    }

    public function create($committee_id)
    {
        return view('Admin.committees.addimages', compact('committee_id'));
    }

    public function store(Request $request, $committee_id)
    {
        Committee_image::create($request->all());
        return redirect("committees/$committee_id/images");
    }


    public function delete($committee_id, $image_id)
    {
        $item = Committee_image::find($image_id);
        $item->delete();
        return redirect("committees/$committee_id/images");
    }
}
