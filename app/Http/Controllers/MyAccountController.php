<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.myAccount.my-account');
    }

    public function myAccountOrder()
    {
        return view('frontend.myAccount.my-account-orders');
    }

    public function myAccountDetails()
    {   
        $user = Auth::user();
        return view('frontend.myAccount.my-account-details', compact('user'));
    }

    public function myAccountWishlist()
    {
        return view('frontend.myAccount.my-account-wishlist');
    }

    public function updateDetails(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
