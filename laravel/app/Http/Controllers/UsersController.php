<?php

namespace App\Http\Controllers;

class UsersController extends \Illuminate\Routing\Controller
{
    public function registration($data) {
        return 'This is user registration data ' . $data;
    }

    public function authorization($username, $password) {
        return 'This is user username ' . $username . ' and password ' . $password;
    }

    public function view($id) {
        return 'This is user ' . $id . ' view page.';
    }

    public function delete($id) {
        return 'User ' . $id . ' has been deleted.';
    }
}
