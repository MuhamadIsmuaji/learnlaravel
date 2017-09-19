<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        foreach ($users as $user) {
            echo $user->name . ' | ' . $user->email . '<a href="' . route('userdetail', ['user_id' => $user->id]) . '">Detail<a>';
            echo ' | <a href="' . route('deleteuser', ['user_id' => $user->id]) . '">Delete</a>';
            echo '<br>';
        }

        echo '<br><br><a href="' . route('createuser') . '">Create User</a>';
    }

    public function createuser()
    {
        $data = [
            'name' => 'New User',
            'email' => str_shuffle('newuser') . '@user.com',
            'password' => 'secret',
        ];

        User::create($data);
        return redirect()->route('home');
    }

    public function deleteuser($user_id)
    {
        $user = User::find($user_id);
        $user->address()->delete();
        $user->delete();

        return redirect()->route('home');
    }

    public function userdetail($user_id)
    {
        $user = User::find($user_id);
        echo $user->name;
        echo '<hr>';

        if (!$user->address) {
            echo '<br><a href="' . route('createaddress', ['user_id' => $user_id]) . '">Create Address</a>';
        } else {
            echo 'Address: ' . $user->address->name;
            echo '<a href="' . route('deleteaddress', ['user_id' => $user_id]) . '"> Delete this address</a> | <a href="' . route('updateaddress', ['address_id' => $user->address->id]) . '">Update this address</a>';
        }

        echo '<br><br><a href="' . route('home') . '">Home</a>';
    }

    public function createaddress($user_id)
    {
        $address = new Address(['name' => 'This is some address']);

        $user = User::find($user_id);

        $user->address()->save($address);

        return redirect()->route('userdetail', ['user_id' => $user_id]);
    }

    public function deleteaddress($user_id)
    {
        $user = User::find($user_id);

        $user->address()->delete();

        return redirect()->route('userdetail', ['user_id' => $user_id]);
    }

    public function updateaddress($address_id)
    {
        $address = Address::find($address_id);
        $address->name = 'Updated address';
        $address->save();

        return redirect()->route('userdetail', ['user_id' => $address->user->id]);
    }
}
