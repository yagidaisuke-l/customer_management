<?php

namespace App\Http\Controllers;

use App\Models\TrialCustomer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrialCustomerRequest;
use App\Http\Requests\UpdateTrialCustomerRequest;
use Illuminate\Http\Request;

class TrialCustomerController extends Controller
{
    public function index() {
        $customers = TrialCustomer::all();
        return view('trial.index', compact('customers'));
    }

    public function create() {
        return view('trial.create');
    }

    public function store(StoreTrialCustomerRequest $request) {
        TrialCustomer::create($request->validated());
        return redirect()->route('trial.index')->with('flash_message', '顧客を登録しました。');;
    }

    public function show($id) {
        $customer = TrialCustomer::findOrFail($id);
        return view('trial.show', compact('customer'));
    }

    public function edit($id) {
        $customer = TrialCustomer::findOrFail($id);
        return view('trial.edit', compact('customer'));
    }

    public function update(UpdateTrialCustomerRequest $request, TrialCustomer $customer) {
         if (!$customer->exists) {
            abort(404, '顧客が見つかりません');
        }
        $customer->update($request->validated());
        return redirect()->route('trial.index')->with('flash_message', '顧客情報を更新しました。');
    }

    public function destroy($id) {
        TrialCustomer::findOrFail($id)->delete();
        return redirect()->route('trial.index')->with('flash_message', '顧客を削除しました。');
    }
}
