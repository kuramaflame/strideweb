<x-layout>

    @foreach ($listings as $listing)
    <div>
        <div class="border rounded-xl shadow-md p-4 bg-white flex items-center space-x-4">
            <div class="flex items-center justify-center w-12 h-12 bg-pink-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-800">Internship position</h3>
                <div class="text-sm text-gray-600 flex flex-wrap items-center space-x-2 mt-1">
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3-3 7 7-3 3m-3 3l-7-7" />
                        </svg>
                        <span>{{$listing->position}}</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2h-2m-4 0H7a2 2 0 01-2-2V10a2-2-2 0 012-2h6m5-3h-6m5 0a2 2 0 100-4 2 2 0 00-4 0" />
                        </svg>
                        <span>{{$listing->firm}}</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v6h6M9 13v6h6" />
                        </svg>
                        <span>{{$listing->created_at}}</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 11V3H5v8m7-6h4a2 2 0 012 2v8m-4-4h2" />
                        </svg>
                        <span>{{$listing->pay}}</span>
                    </div>
                </div>
            </div>
            <!-- Alpine.js Modal -->
            <div x-data="{ open: false }">
                <button class="flex font-bold items-center" @click="open = true">
                    Open
                </button>
                <!-- Modal -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-80 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-90"
                     class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Internship Details</h2>
                        <p class="text-gray-600 mb-4">Position: {{$listing->position}}</p>
                        <p class="text-gray-600 mb-4">Firm: {{$listing->firm}}</p>
                        <p class="text-gray-600 mb-4">Pay: {{$listing->pay}}</p>
                        <p class="text-gray-600">Posted on: {{$listing->created_at}}</p>
                        <div class="mt-4 flex justify-end space-x-2">
                            <button class="bg-gray-300 text-gray-800 px-4 py-2 rounded" @click="open = false">Close</button>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <span class="bg-pink-100 text-pink-500 text-xs font-medium px-2 py-1 rounded-full">Internship</span>
            </div>
        </div>
    </div>
    @endforeach

</x-layout>
