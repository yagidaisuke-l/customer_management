<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客情報の編集
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if (session('flash_message'))
                <div class="mb-4 text-green-600">
                    {{ session('flash_message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>・{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('trial.update', $customer->id) }}">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- 基本情報 -->
                    <div>
                        <label>氏名</label>
                        <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="w-full border rounded p-2" required>
                    </div>

                    <div>
                        <label>メールアドレス</label>
                        <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="w-full border rounded p-2">
                    </div>

                    <!-- 電話番号 -->
                    <div>
                        <label>電話番号（市外局番）</label>
                        <input type="text" name="phone_area_code" value="{{ old('phone_area_code', $customer->phone_area_code) }}" class="w-full border rounded p-2" required>
                    </div>

                    <div>
                        <label>電話番号（市内局番）</label>
                        <input type="text" name="phone_local_code" value="{{ old('phone_local_code', $customer->phone_local_code) }}" class="w-full border rounded p-2" required>
                    </div>

                    <div>
                        <label>電話番号（加入者番号）</label>
                        <input type="text" name="phone_subscriber" value="{{ old('phone_subscriber', $customer->phone_subscriber) }}" class="w-full border rounded p-2" required>
                    </div>

                    <!-- 住所 -->
                    <div>
                        <label>郵便番号</label>
                        <input type="text" name="postal_code" value="{{ old('postal_code', $customer->postal_code) }}" class="w-full border rounded p-2">
                    </div>

                    <div>
                        <label>都道府県</label>
                        <input type="text" name="prefecture" value="{{ old('prefecture', $customer->prefecture) }}" class="w-full border rounded p-2">
                    </div>

                    <div>
                        <label>市区町村</label>
                        <input type="text" name="city" value="{{ old('city', $customer->city) }}" class="w-full border rounded p-2">
                    </div>

                    <div>
                        <label>番地</label>
                        <input type="text" name="street" value="{{ old('street', $customer->street) }}" class="w-full border rounded p-2">
                    </div>

                    <div>
                        <label>建物名・部屋番号</label>
                        <input type="text" name="building" value="{{ old('building', $customer->building) }}" class="w-full border rounded p-2">
                    </div>

                    <!-- 法人情報 -->
                    <div>
                        <label>法人名</label>
                        <input type="text" name="company_name" value="{{ old('company_name', $customer->company_name) }}" class="w-full border rounded p-2">
                    </div>

                    <div>
                        <label>所属部署</label>
                        <input type="text" name="department" value="{{ old('department', $customer->department) }}" class="w-full border rounded p-2">
                    </div>

                    <!-- メモ -->
                    <div class="col-span-2">
                        <label>メモ</label>
                        <textarea name="memo" class="w-full border rounded p-2">{{ old('memo', $customer->memo) }}</textarea>
                    </div>
                </div>

                <div class="mt-6 flex justify-between">
                    <a href="{{ route('trial.index') }}" class="text-blue-600 hover:underline">← 戻る</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        更新する
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
