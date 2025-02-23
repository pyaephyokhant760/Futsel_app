<?php
namespace  App\Repositories\Test;

use App\Models\User; // Import the User model

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function getUser($id)
    {
        $user = $this->userRepository->find($id);
        return response()->json($user);
    }

    public function createUser(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']); // Hash Password
        $user = $this->userRepository->create($data);
        return response()->json($user);
    }

    public function updateUser(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = bcrypt($data['password']); // Hash Password
        $user = $this->userRepository->update($data, $id);
        return response()->json($user);
    }

    public function deleteUser($id)
    {
        $user = $this->userRepository->delete($id);
        return response()->json($user);
    }
}

?>
