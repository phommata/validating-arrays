<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvitationsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email.*' => 'required|email'
        ], ['email.*' => 'This is not a proper email address.']);

        return 'All items are valid email addresses.';
    }
}
