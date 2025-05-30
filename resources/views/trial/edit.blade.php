<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客編集
        </h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto">
        {{-- エラーメッセージ表示 --}}
        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('trial.update', $customer->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block font-medium">名前</label>
                <input type="text" name="name" id="name" value="{{ old('name', $customer->name) }}"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label for="email" class="block font-medium">メールアドレス</label>
                <input type="email" name="email" id="email" value="{{ old('email', $customer->email) }}"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label class="block font-medium">電話番号</label>
                <div class="flex gap-2 mt-1">
                    <input type="text" name="phone_area_code" placeholder="03"
                           value="{{ old('phone_area_code', $customer->phone_area_code) }}"
                           class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                    <input type="text" name="phone_local_code" placeholder="1234"
                           value="{{ old('phone_local_code', $customer->phone_local_code) }}"
                           class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                    <input type="text" name="phone_subscriber" placeholder="5678"
                           value="{{ old('phone_subscriber', $customer->phone_subscriber) }}"
                           class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>

            <div>
                <label for="memo" class="block font-medium">メモ</label>
                <textarea name="memo" id="memo" rows="3"
                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('memo', $customer->memo) }}</textarea>
            </div>

            <div>
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700 transition">
                    更新する
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
