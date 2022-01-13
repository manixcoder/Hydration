<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Minerals;
use Illuminate\Support\Facades\Validator;

class MineralManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.minerals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.minerals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'minerals_name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                Minerals::create([
                    'minerals_name' => $request->minerals_name,
                ]);
                return redirect('/admin/minerals')->with(array(
                    'status' => 'success',
                    'message' => 'Minerals Added Successfully',
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

        $mineralsData = Minerals::find($id);

        return view('admin.minerals.editMineralname')->with([
            'mineralsData' => $mineralsData
        ]);;
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
        $rules = [
            'minerals_name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                $mineralsData = Minerals::where('id', $id)->update([
                    'minerals_name' => $request->minerals_name,
                ]);
                return redirect('/admin/minerals')->with(array(
                    'status' => 'success',
                    'message' => 'Minerals updated successfully',
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
        Minerals::find($id)->delete();
        return redirect('/admin/minerals')->with(array(
            'status' => 'success',
            'message' => 'Minerals deleted successfully',
        ));
    }
}
