<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    public function index() {}

    public function create() {}

    public function store(Request $request) {}

    public function show(Coupon $coupon) {}

    public function edit(Coupon $coupon) {}

    public function update(Request $request, Coupon $coupon) {}

    public function destroy(Coupon $coupon) {}
}
