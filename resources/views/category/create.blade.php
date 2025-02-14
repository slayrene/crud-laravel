<x-layout>
    <x-slot name="title">
    </x-slot>
    <div class="w-96 bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:bg-gray-100">
        @if (session('status'))
            <div role="alert" class="bg-green-300 p-2"> {{ session('status') }}</div>
        @endif

        <h5 class="mb-2 text-2xl font-bold text-gray-900">Category</h5>
        <p class="font-normal text-gray-700">Basta category to</p>

        <form action="{{ url('categories/create') }}" method="POST">
            @csrf
            <div class="flex flex-col mt-5 space-y-2">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 rounded w-full" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-600"> {{ $message }}</span>
                @enderror

                <label for="description">Description</label>
                <textarea name="description" id="description" class="bg-gray-50 border border-gray-300 rounded w-full h-20">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-600"> {{ $message }}</span>
                @enderror

                <div class="flex items-center space-x-2">
                    <label for="is_active">Is it active?</label>
                    <input name="is_active" id="is_active" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm" {{ old('is_active') ? 'checked' : '' }}>
                </div>
                @error('is_active')
                    <span class="text-red-600"> {{ $message }}</span>
                @enderror

                <button type="submit" class="p-2 bg-green-600 text-white">Save</button>
            </div>
        </form>
    </div>
</x-layout>
