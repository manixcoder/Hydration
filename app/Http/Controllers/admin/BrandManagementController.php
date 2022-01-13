<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Brand;
use Illuminate\Support\Facades\Validator;


class BrandManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
            'brand_name' => 'required',
            'brands_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                if ($request->hasFile('brands_image')) {
                    $image = $request->file('brands_image');
                    $imagename = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $imagename);
                    Brand::create([
                        'brand_name' => $request->brand_name,
                        'brands_image' => $imagename,
                    ]);
                    return redirect('/admin/brands')->with(array(
                        'status' => 'success',
                        'message' => 'Image Upload successfully',
                    ));
                }
            } catch (\Exception $e) {
                return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
                // return response()->json(['message' => $e], 500);
            }
            // dd($brandData);

        }

        //dd($request->all());
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
        $brandData = Brand::find($id);

        return view('admin.brands.editBrand')->with([
            'brandData' => $brandData
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
            'brand_name' => 'required',
            'brands_image' => 'required',
            //'brands_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                $brandData = Brand::find($id);
                //dd($brandData['brands_image']);
                if ($request->hasFile('brands_image')) {
                    $image = $request->file('brands_image');
                    $imagename = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $imagename);
                } else {
                    $imagename = $brandData['brands_image'];
                }
                $brandData = Brand::where('id', $id)->update([
                    'brand_name' => $request->brand_name,
                    'brands_image' => $imagename
                ]);
                return redirect('/admin/brands')->with(array(
                    'status' => 'success',
                    'message' => 'Brand Uploaded successfully',
                ));
            } catch (\Exception $e) {
                return back()->with(array('status' => 'danger', 'message' =>  $e->getMessage()));
                // return response()->json(['message' => $e], 500);
            }
            // dd($brandData);

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
        Brand::find($id)->delete();
        return redirect('/admin/brands')->with(array(
            'status' => 'success',
            'message' => 'Brand Deleted successfully',
        ));
    }
}
