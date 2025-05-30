<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            @if (session('flash_message'))
                <div class="mx-auto mt-6 px-4 py-3 mb-4 bg-green-100 border border-green-400 text-green-800 rounded">
                    {{ session('flash_message') }}
                </div>
            @endif
            <div class="mb-4">
                <a href="{{ route('trial.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    ＋ 新規顧客を登録
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($customers->isEmpty())
                        <p>登録されている顧客はいません。</p>
                    @else
                        <table class="min-w-full table-auto border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border px-4 py-2 text-left">名前</th>
                                    <th class="border px-4 py-2 text-left">メール</th>
                                    <th class="border px-4 py-2 text-left">電話番号</th>
                                    <th class="border px-4 py-2 text-left">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $customer->name }}</td>
                                        <td class="border px-4 py-2">{{ $customer->email }}</td>
                                        <td class="border px-4 py-2">{{ $customer->phone_area_code }}-{{ $customer->phone_local_code }}-{{ $customer->phone_subscriber }}</td>
                                        <td class="border px-4 py-2 space-x-2">
                                            <a href="{{ route('trial.show', $customer->id) }}" class="text-blue-500 hover:underline">詳細</a>
                                            <a href="{{ route('trial.edit', $customer->id) }}" class="text-yellow-500 hover:underline">編集</a>
                                            <form action="{{ route('trial.destroy', $customer->id) }}" method="POST" class="inline-block" onsubmit="return confirm('本当に削除しますか？')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
