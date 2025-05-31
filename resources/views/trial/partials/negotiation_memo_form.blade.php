{{-- エラー表示 --}}
@if ($errors->any())
    <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('trial_customers.negotiation_memos.store', ['trial_customer' => $trialCustomer->id]) }}">
    @csrf
    <div class="space-y-4">

        <div>
            <label for="company_name">法人名・企業名</label>
            <input type="text" name="company_name" id="company_name" class="w-full" value="{{ old('company_name') }}">
        </div>

        <div>
            <label for="meeting_date">商談日時</label>
            <input type="datetime-local" name="meeting_date" id="meeting_date" class="w-full" value="{{ old('meeting_date') }}">
        </div>

        <div>
            <label for="meeting_place">商談場所</label>
            <input type="text" name="meeting_place" id="meeting_place" class="w-full" value="{{ old('meeting_place') }}">
        </div>

        <div>
            <label for="contact_name">商談相手名</label>
            <input type="text" name="contact_name" id="contact_name" class="w-full" value="{{ old('contact_name') }}">
        </div>

        <div>
            <label for="position">役職</label>
            <input type="text" name="position" id="position" class="w-full" value="{{ old('position') }}">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div><label>予算 (Budget)</label><input type="text" name="budget" value="{{ old('budget') }}" class="w-full"></div>
            <div><label>権限 (Authority)</label><input type="text" name="authority" value="{{ old('authority') }}" class="w-full"></div>
            <div><label>必要性 (Needs)</label><input type="text" name="needs" value="{{ old('needs') }}" class="w-full"></div>
            <div><label>時期 (Timing)</label><input type="text" name="timing" value="{{ old('timing') }}" class="w-full"></div>
            <div><label>競合 (Competitor)</label><input type="text" name="competitor" value="{{ old('competitor') }}" class="w-full"></div>
            <div><label>意思決定者</label><input type="text" name="decision_maker" value="{{ old('decision_maker') }}" class="w-full"></div>
            <div><label>影響力</label><input type="text" name="influence" value="{{ old('influence') }}" class="w-full"></div>
            <div><label>関係性</label><input type="text" name="relationship" value="{{ old('relationship') }}" class="w-full"></div>
        </div>

        <div>
            <label for="summary">商談の経緯</label>
            <textarea name="summary" id="summary" class="w-full" rows="3">{{ old('summary') }}</textarea>
        </div>

        <div>
            <label for="problems">顧客の悩み</label>
            <textarea name="problems" id="problems" class="w-full" rows="3">{{ old('problems') }}</textarea>
        </div>

        <div>
            <label for="others">その他</label>
            <textarea name="others" id="others" class="w-full" rows="3">{{ old('others') }}</textarea>
        </div>

        <div>
            <label for="next_meeting">次回商談予定</label>
            <input type="text" name="next_meeting" id="next_meeting" class="w-full" value="{{ old('next_meeting') }}">
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">保存</button>
        </div>

    </div>
</form>
