<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Laravel\Sanctum\HasApiTokens;
use App\Services\Test\UserService;
use App\http\Requests\Test\UserRequest;
use App\http\Resources\Test\UserResource;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class UserController extends Controller
{
    protected  $user;

    public function __construct(UserService $user)
    {

        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request) // Ensure this is a request object
    {
        $validatedData = $request->validated(); // ✅ မှန်ကန်သော variable name

        $data = $this->user->insert($validatedData); // ✅ မှန်ကန်သော variable ကိုသုံးပါ။

        $resBrand = UserResource::make($data);

        if ($data) {
            return $this->success(true, $resBrand, 'Successfully Created', 200);
        } else {
            return $this->fail(false, null, 'Fail', 404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
