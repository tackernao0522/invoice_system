<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InvoiceController extends Controller
{
    public function index()
    {
        // 未払いの請求書の一覧を取得
        $unpaidInvoices = Invoice::where('status', 'unpaid')
            ->with('customer')->paginate(50);

        return Inertia::render('Admin/Invoices/Index', [
            'unpaidInvoices' => $unpaidInvoices,
        ]);
    }
}
