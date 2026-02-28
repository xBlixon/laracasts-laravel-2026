<?php

use App\Models\Quote;
use App\Models\User;
use function PHPUnit\Framework\assertCount;

test('showing ideas', function () {
    $this->actingAs($user = User::factory()->create());

    $user->quotes()->create([
        'text' => 'Blue birds!'
    ]);

    visit('/quote')
        ->assertSee('Blue birds!');
});

test('show single idea', closure: function () {
    $this->actingAs($user = User::factory()->create());

    $id = $user->quotes()->create([
        'text' => 'Blue birds!'
    ])->id;

    visit("/quote/$id")
        ->assertSee('Blue birds!');
});

test('delete an idea', closure: function () {
    $this->actingAs($user = User::factory()->create());

    $id = $user->quotes()->create([
        'text' => 'Blue birds!'
    ])->id;

    visit("/quote/$id/edit")
        ->assertSee('Blue birds!')
        ->press('@delete-button');

    assertCount(0, Quote::all());
});
