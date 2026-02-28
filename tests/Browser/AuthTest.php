<?php

use App\Models\User;

test('user registration', function () {
    visit('/register')
        ->fill('name', 'John')
        ->fill('email', 'john@doe.me')
        ->fill('password', 'secret123')
//        ->debug()
        ->press('@register-button')
        ->assertPathIs('/quote');

    expect(User::count())->toBe(1);
});
