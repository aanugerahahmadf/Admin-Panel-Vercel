<?php

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

test('admin login page is accessible', function () {
    get('/admin/login')->assertStatus(200);
});

test('unauthenticated users are redirected to login', function () {
    get('/admin')->assertStatus(302)->assertRedirect('/admin/login');
});

test('super admin can access dashboard', function () {
    $user = User::factory()->create();
    $user->assignRole('super_admin');

    actingAs($user)
        ->get('/admin')
        ->assertStatus(200);
});

test('non-admin users cannot access admin panel', function () {
    $user = User::factory()->create();
    // No super_admin role assigned

    actingAs($user)
        ->get('/admin')
        ->assertStatus(403);
});
