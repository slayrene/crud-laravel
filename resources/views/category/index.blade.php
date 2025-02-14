<x-layout>

    <x-slot name="title">
        Category
    </x-slot>

    <div class="w-full bg-white border border-gray-200 rounded-lg p-6 shadow-sm space-y-5">
        <div class="flex justify-between">
            <h5 class="mb-2 text-2xl font-bold text-gray-900">Category</h5>
            <a href="/categories/create" class="p-2 bg-blue-600 rounded text-white">Add Category</a>
        </div>

        <table class="border border-gray-400 w-full p-6 text-center">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 p-3">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Active?</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="bg-white border-b">
                @foreach ($categories as $category)
                <tr>
                    <td> {{ $category->id }}</td>
                    <td> {{ $category->name }}</td>
                    <td> {{ $category->description }}</td>
                    <td>  
                        @if ($category->is_active)
                            Active
                        @else 
                            Not active
                        @endif
                    </td>
                    <td class="p-3 underline">
                        <a href="{{ url('categories/'.$category->id.'/edit') }}" class="text-blue-600">Edit</a>
                        <a href="{{ url('categories/'.$category->id.'/delete') }}" class="text-red-600">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
