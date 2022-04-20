<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileStore;
use App\Http\Resources\MemberResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\ProfileMemberResource;
use App\Models\Member;
use App\Models\Profile;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->get('per_page') ?? 2;
        return MemberResource::collection(
            Member::with('profile')->paginate($per_page)->appends([
                'per_page' => $per_page
            ])
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Member $member
     * @param ProfileStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(Member $member, ProfileStore $request)
    {
        $validated = $request->validated();
        $member->profile()->create([
            'member_id' => $member->id,
            'address' => $validated['address']
        ]);

        return new MemberResource($member);
    }

    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @param Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, Profile $profile)
    {
        $this->authorize($profile);
        return new ProfileResource($profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Member $member
     * @param Profile $profile
     * @param ProfileStore $request
     * @return \Illuminate\Http\Response
     */
    public function update(Member $member, Profile $profile, ProfileStore $request)
    {
        $profile->address = $request->get('address');
        $profile->save();
        return new ProfileResource($profile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $member
     * @param Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, Profile $profile)
    {
        $profile->delete();
        return response()->noContent();
    }
}
