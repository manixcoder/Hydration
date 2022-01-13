<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserRegistrationController extends Controller
{

    public function registration(Request $request)
    {
        dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'weight' => 'required',
            'profile_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'Status' => 'Failed', 'message' => $validator->messages()], 200);
        } else {
            try {
            } catch (\Exception $e) {
                dd($e);
                // return response()->json(['message' => $e], 500);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
