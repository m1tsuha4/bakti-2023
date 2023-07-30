<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $currentPage = 'edit-profile';

        return view('user.profile', compact('currentPage'),[
        'user' => $request->user(),
        ]);
//        return view('profile.edit', [
//            'user' => $request->user(),
//        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function updateFoto(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile;
        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = $user->id;
        }
        if ($request->hasFile('foto')) {
            if (isset($profile->foto)) {
                $filename = Str::afterLast($profile->foto, '/');
                if (Storage::exists('public/profiles/' . $filename)) {
                    Storage::delete('public/profiles/' . $filename);
                }
            }
            $fileName = $user->name . '.'. $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('public/profiles', $fileName);
            $profile->foto = $fileName;
        }
        $profile->save();
        return Redirect::route('profile.edit');
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'fakultas' => 'required',
            'department' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'no_absen' => 'required',
            'kelompok' => 'required',
        ]);
        $profile = Profile::updateOrCreate([
            'user_id' => $request->user()->id,
        ], [
                'fakultas' => $request->input('fakultas'),
                'department' => $request->input('department'),
                'no_absen' => $request->input('no_absen'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'kelompok' => $request->input('kelompok'),
            ]
        );
//
//        // Handle photo upload if provided
//        if ($request->hasFile('foto')) {
//            // Assuming the file name should be unique, you can use something like the user's ID and timestamp.
//            $fileName = $user->id . '_' . time() . '.' . $request->file('foto')->getClientOriginalExtension();
//
//            // Move the uploaded file to the desired location (e.g., public/uploads/profile_photos)
//            $request->file('foto')->move('uploads/profile_photos', $fileName);
//
//            // Update the 'foto' field in the user's profile
//            $profile->update(['foto' => $fileName]);
//        }
//
//        $user = Auth::user();
//
//        $request->validate([
//            'fakultas' => 'required',
//            'department' => 'required',
//            'tanggal_lahir' => 'required|date',
//            'jenis_kelamin' => 'required',
//            'no_absen' => 'required',
//            'kelompok' => 'required',
//        ]);
//
//        // Find or create the user's profile
//        $profile = Profile::firstOrNew(
//            ['user_id' => $request->user()->id],
//            [
//                'fakultas' => $request->input('fakultas'),
//                'department' => $request->input('department'),
//                'no_absen' => $request->input('no_absen'),
//                'tanggal_lahir' => $request->input('tanggal_lahir'),
//                'jenis_kelamin' => $request->input('jenis_kelamin'),
//                'kelompok' => $request->input('kelompok'),
//            ]);

        // Handle photo upload if provided
//        if ($request->hasFile('foto')) {
//            // Assuming the file name should be unique, you can use something like the user's ID and timestamp.
//            $fileName = $user->id . '_' . time() . '.' . $request->file('foto')->getClientOriginalExtension();
//
//            // Move the uploaded file to the desired location (e.g., public/uploads/profile_photos)
//            $request->file('foto')->storeAs('public/profiles',$fileName);
//
//            // Update the 'foto' field in the user's profile
////            $user->profile->foto = $fileName;
//           $test = Profile::update(['foto'=>$fileName]);
//           dd($test);
//        }

        // Save the profile data
//        $profile->save();


        return Redirect::route('profile.edit');
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
