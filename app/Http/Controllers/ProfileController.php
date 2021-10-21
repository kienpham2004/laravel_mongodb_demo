<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getAll()
    {
        return Profile::all();
    }

    public function getOne($id)
    {
        return Profile::where('_id', $id)->first();
    }

    public function createProfile(CreateProfileRequest $request)
    {
        Profile::create($request->all());

        return response([
            'message' => 'Created Success',
        ], 201);
    }

    public function updateProfile(UpdateProfileRequest $request, $id)
    {
        $profile = Profile::where('_id', $id)->first();

        if ($profile == null) {
            return response([
                'message' => 'Not Found',
            ], 404);
        }

        $profile->update($request->all());

        return response([
            'message' => 'Updated Success',
        ], 200);
    }

    public function destroyProfile($id)
    {
        $profile = Profile::where('_id', $id)->first();

        if ($profile == null) {
            return response([
                'message' => 'Not Found',
            ], 404);
        }

        $profile->delete();

        return response([
            'message' => 'Deleted Success',
        ], 200);
    }
}
