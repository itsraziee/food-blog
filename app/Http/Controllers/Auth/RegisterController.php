<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Register a tenant user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate(
            [
                "name" => "required|string",
                "email" => "required|string",
                "password" => "required|string|confirmed",
                "domain" => "required|string|unique:tenants,id"
            ]
        );

        $domain = $request->get("domain");
        $tenant = Tenant::create(['id' => $domain]);
        $tenant->domains()->create(['domain' => $domain . "." . env('HOSTNAME')]);

        $user_data = $request->only(["name", "email", "password"]);
        $user_data["password"] = bcrypt($user_data["password"]);

        $tenant->run(function () use ($user_data) {
            User::create($user_data);
        });

        return response(["success" => true, "data" => ["tenant" => $tenant,], "errorMessage" => null]);
    }

}