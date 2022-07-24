<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */

    public function model()
    {
        //return YourModel::class;
    }

    public function createUser(Request|array $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->type = 1;
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $result['token'] = $request->input('name');
        return response()->json($result);
    }
}
