<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estimate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EstimateController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        // 期限切れの見積書の一覧を取得
        $estimates = Estimate::whereDate('expiration_date', '<', now())
            ->whereHas('customer', function ($query) use ($search) {
                $query->searchCustomers($search);
            })
            ->with('customer')->paginate(50);

        return Inertia::render('Admin/Estimates/Index', [
            'estimates' => $estimates,
        ]);
    }
}
