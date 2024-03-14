<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\View\View;
use Illuminate\Http\Request;
use LamaLama\Wishlist\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        return view('profile.profile', [
            'user' => $request->user(),
        ]);
    }

    public function update_password(Request $request): View
    {
        return view('profile.update-password', [
            'user' => $request->user(),
        ]);
    }

    public function delete_user(Request $request): View
    {
        return view('profile.delete-user', [
            'user' => $request->user(),
        ]);
    }

    public function My_Orders(Request $request): View
    {   $orders = Order::all();
        $OrderItems =OrderItem::all();
       
        return view('profile.My_Orders', compact('orders','OrderItems'),[
            'user' => $request->user(),
        ]);
    }
    // public function Wish_List(Request $request): View
    // {
    //     $wishlistItems = Wishlist::get();
    //     return view('profile.Wish_List',compact('wishlistItems'), [
    //         'user' => $request->user(),
    //     ]);
    // }
    

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
       
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
        
            // Generate a unique filename
            $imageName = time() . '.' . $photo->getClientOriginalExtension();
        
            // Store the image in the public/storage directory
            $photo->storeAs('profile_pictures', $imageName, 'public');
        
            // Update user record with the image path
            $request->user()->update(['photo' => $imageName]);
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
