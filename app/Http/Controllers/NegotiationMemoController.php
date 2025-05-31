<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegotiationMemoRequest;
use App\Http\Requests\UpdateNegotiationMemoRequest;
use App\Models\TrialCustomer;
use App\Models\NegotiationMemo;
use Illuminate\Http\Request;

class NegotiationMemoController extends Controller
{
    public function index(TrialCustomer $trialCustomer)
    {
        $memos = $trialCustomer->negotiationMemos()->latest()->get();

        return view('negotiation_memos.index', compact('trialCustomer', 'memos'));
    }

    public function store(StoreNegotiationMemoRequest $request, TrialCustomer $trialCustomer)
    {
        $trialCustomer->negotiationMemos()->create($request->validated());

        return back()->with('flash_message', '商談メモを追加しました。');
    }

    public function edit(TrialCustomer $trialCustomer, NegotiationMemo $negotiationMemo)
    {
        return view('negotiation_memos.edit', compact('trialCustomer', 'negotiationMemo'));
    }

    public function update(UpdateNegotiationMemoRequest $request, TrialCustomer $trialCustomer, NegotiationMemo $negotiationMemo)
    {
        $negotiationMemo->update($request->validated());

        return back()->with('flash_message', '商談メモを更新しました。');
    }

    public function destroy(TrialCustomer $trialCustomer, NegotiationMemo $negotiationMemo)
    {
        $negotiationMemo->delete();

        return back()->with('flash_message', '商談メモを削除しました。');
    }
}
