<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Volume;
use Illuminate\Support\Facades\Validator;

class VolumeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.volume.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.volume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'quantity' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {

                Volume::create([
                    'quantity' => $request->quantity,
                ]);
                return redirect('/admin/volume')->with(array(
                    'status' => 'success',
                    'message' => 'Quantity Added Successfully',
                ));
            } catch (\Exception $e) {
                return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            }
        }
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
        // return view('admin.volume.editQuantity');
        $volumeData = Volume::find($id);

        return view('admin.volume.editQuantity')->with([
            'volumeData' => $volumeData
        ]);
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
        // dd($request->all);

        $rules = [
            'quantity' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {

                $volumeData = Volume::where('id', $id)->update([
                    'quantity' => $request->quantity,

                ]);
                return redirect('/admin/volume')->with(array(
                    'status' => 'success',
                    'message' => 'Quantity updated successfully',
                ));
            } catch (\Exception $e) {
                return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volume::find($id)->delete();
        return redirect('/admin/volume')->with(array(
            'status' => 'success',
            'message' => 'Quantity deleted successfully',
        ));
    }
}
