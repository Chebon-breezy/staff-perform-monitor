<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Location\Facades\Location;

class FormController extends Controller
{
    /**
     * Handle a form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $this->validator($request->all())->validate();

        //stevebauman location service

        // $userIp = $request->ip();
        // $userIp = $_SERVER['REMOTE_ADDR'];

        //it will not work on localhost but on live server when app is hosted
        $userIp = '66:102:0:0';
        $position = Location::get($userIp);
        // return $position;


        // Create a new form data entry
        $this->create($request->all(), $position);

        // Redirect to the home route with a success message
        return redirect()->route('home')->with('status', 'Form submitted successfully!');
    }

    /**
     * Get a validator for an incoming form submission.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'id' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'dd' => ['required', 'integer'],
            'mm' => ['required', 'integer'],
            'yyyy' => ['required', 'integer'],
            'location' => ['required', 'string', 'max:255'],
            'task' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new form data entry after a valid submission.
     *
     * @param  array  $data
     * @param  $position
     * @return \App\Models\FormData
     */
    protected function create(array $data, $position)
    {
        return FormData::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'id' => $data['id'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dd' => $data['dd'],
            'mm' => $data['mm'],
            'yyyy' => $data['yyyy'],
            'location' => $data['location'],
            'task' => $data['task'],
            'ip' => $position->ip,
            'country' => $position->countryName,
            'city' => $position->cityName,
            'latitude' => $position->latitude,
            'longitude' => $position->longitude,
        ]);
    }
}
