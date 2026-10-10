<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Anthony Hermoso',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Maria Santos',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Filart Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Von Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}