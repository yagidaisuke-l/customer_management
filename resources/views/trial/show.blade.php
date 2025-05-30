<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <strong>名前:</strong> {{ $customer->name }}
                </div>
                <div class="mb-4">
                    <strong>メールアドレス:</strong> {{ $customer->email }}
                </div>
                <div class="mb-4">
                    <strong>電話番号:</strong> {{ $customer->phone }}
                </div>
                <div class="mb-4">
                    <strong>メモ:</strong><br>
                    <p class="whitespace-pre-wrap">{{ $customer->memo }}</p>
                </div>
                <div class="flex gap-3 mt-6">
                    <a href="{{ route('trial.edit', $customer->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">編集</a>
                    <form action="{{ route('trial.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">削除</button>
                    </form>
                    <a href="{{ route('trial.index') }}" class="self-center text-blue-600 hover:underline">一覧に戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
