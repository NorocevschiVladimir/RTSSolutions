<?php

namespace App\Http\Controllers\front;

use App\Cvlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function cvSend(Request $request)
    {
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
        }
        $cvlist = new Cvlist();
        $cvlist->name = $request['name'];
        $cvlist->path = $path;
        $cvlist->email = $request['email'];
        $cvlist->message = $request['message'];
        $cvlist->save();
        return Redirect::to('/success');
    }


    public function index()
    {
        return view("frontend.pages.home.index");
    }

    public function success(Request $request)
    {
        return view('frontend.pages.answer.success');
    }

    public function cancel()
    {
        return view('frontend.pages.answer.cancel');
    }

    public function listofcv()
    {
        $data['list'] = Cvlist::all();
//        $data['list'] = Cvlist::SELECT('')->WHERE();
        return view('vendor.voyager.listofcv.index', $data);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
