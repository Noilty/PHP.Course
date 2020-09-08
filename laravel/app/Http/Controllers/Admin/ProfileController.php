<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->isMethod('post')) {
            $this->validate($request, $this->validateRules(), [], $this->attributeNames());

            $errors = [];
            if (Hash::check($request->post('password'), $user->password)) {
                $user->fill([
                    'name' => $request->post('name'),
                    'password' => Hash::make($request->post('newPassword')),
                    'email' => $request->post('email')
                ]);
                $user->save();

                /*return redirect()
                    ->route('admin.profile.update')
                    ->with('success', 'Данные изменены');*/
                $request->session()->flash('success', 'Данные изменены');
            } else {
                $errors['password'][] = 'Пароль не верен';
            }

            return redirect()
                ->route('admin.profile.update')
                ->withErrors($errors);
        }

        return view('admin.profile', [
            'user' => $user
        ]);
    }

    protected function validateRules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:10'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email,' . Auth::id()
            ],
            'password' => [
                'required'
            ],
            'newPassword' => [
                'required',
                'string',
                'min:3'
            ]
        ];
    }

    protected function attributeNames()
    {
        return [
            'newPassword' => 'Новый пароль'
        ];
    }
}
