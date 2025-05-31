<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客情報の詳細
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded p-6">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="font-semibold">氏名</dt>
                        <dd>{{ $customer->name }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">メールアドレス</dt>
                        <dd>{{ $customer->email }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">電話番号</dt>
                        <dd>{{ $customer->phone_area_code }}-{{ $customer->phone_local_code }}-{{ $customer->phone_subscriber }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">郵便番号</dt>
                        <dd>{{ $customer->postal_code }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">都道府県</dt>
                        <dd>{{ $customer->prefecture }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">市区町村</dt>
                        <dd>{{ $customer->city }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">番地</dt>
                        <dd>{{ $customer->street }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">建物名・部屋番号</dt>
                        <dd>{{ $customer->building }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">法人名</dt>
                        <dd>{{ $customer->company_name }}</dd>
                    </div>

                    <div>
                        <dt class="font-semibold">所属部署</dt>
                        <dd>{{ $customer->department }}</dd>
                    </div>

                    <div class="col-span-2">
                        <dt class="font-semibold">メモ</dt>
                        <dd>{{ $customer->memo }}</dd>
                    </div>
                </dl>

                <div class="mt-6 flex justify-between">
                    <a href="{{ route('trial.index') }}" class="text-blue-600 hover:underline">← 戻る</a>
                    <a href="{{ route('trial.edit', $customer->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded mr-2">
                        編集
                    </a>
                </div>
                @if (session('flash_message'))
                <div class="mx-auto mt-6 px-4 py-3 mb-4 bg-green-100 border border-green-400 text-green-800 rounded">
                    {{ session('flash_message') }}
                </div>
                @endif
                @include('trial.partials.negotiation_memo_form', ['trialCustomer' => $customer])
            </div>
        </div>
    </div>
</x-app-layout>
