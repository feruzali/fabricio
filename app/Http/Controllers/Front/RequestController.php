<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use App\Model\RegistrationRequest;

class RequestController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show index page for registration request
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (auth()->user()->registrationRequest) {
            return redirect()->route('home');
        }
        return view('auth.request');
    }

    /**
     * Store new registration request
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeRequest(Request $request) {
        $data = $request->all();
        Validator::make($data, [
            'company_name' => ['required', 'string', 'unique:registration_requests'],
            'bank' => ['required', 'string'],
            'address' => ['required', 'string'],
            'tin' => ['required', 'string', 'min:9', 'max:9'],
            'ctea' => ['required', 'string', 'min:5', 'max:5'],
            'mfi' => ['required', 'string', 'min:5', 'max:5']
        ])->validate();
        RegistrationRequest::create($data);

        return redirect()->route('home');
    }
}
