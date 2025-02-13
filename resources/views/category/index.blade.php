<x-layout>
    <div class="w-96 bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:bg-gray-100">
        <h5 class="mb-2 text-2xl font-bold text-gray-900">Category</h5>
        <p class="font-normal text-gray-700">Basta category to</p>

        <form action="">
            <div class="flex flex-col mt-5 space-y-2">
                <label for="name">Name</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 rounded w-full">   
                <label for="description">Description</label>
                <textarea name="description" id="description" class="bg-gray-50 border border-gray-300 rounded w-full h-20"></textarea>
                <label for="active">Is it active?</label>
                <div class="flex items-center">
                    <input checked id="checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm">
                    <label for="checkbox" class="ms-2 text-sm font-medium text-gray-900"></label>
                </div>
            </div>
        </form>
    </div>
</x-layout>
