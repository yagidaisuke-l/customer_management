<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規顧客登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
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

                <form method="POST" action="{{ route('trial.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">名前</label>
                        <input type="text" name="name" class="w-full border rounded px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">メールアドレス</label>
                        <input type="email" name="email" class="w-full border rounded px-3 py-2">
                    </div>
                     <div>
                        <label class="block font-medium">電話番号</label>
                        <div class="flex gap-2 mt-1">
                            <input type="text" name="phone_area_code" placeholder="03" value="{{ old('phone_area_code') }}"
                                  class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                            <input type="text" name="phone_local_code" placeholder="1234" value="{{ old('phone_local_code') }}"
                                  class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                            <input type="text" name="phone_subscriber" placeholder="5678" value="{{ old('phone_subscriber') }}"
                                  class="w-1/3 border-gray-300 rounded-md shadow-sm" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">メモ</label>
                        <textarea name="memo" rows="4" class="w-full border rounded px-3 py-2"></textarea>
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('trial.index') }}" class="text-blue-600 hover:underline">← 戻る</a>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            登録
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
