<x-layout>
<form >
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
            <div class="mt-2">
                <x-inputf id="position" type="text" autocomplete="position"></x-inputf>
              </div>
            </div>
          </div>
  
          <div class="col-span-full">
            <label for="about" class="block text-sm/6 font-medium text-gray-900">Description</label>
            <div class="mt-2">
              <x-texta id="about" rows="3" name="about"></x-texta>
            </div>
          </div>
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
            <div class="mt-2">
              <x-inputf type="text" id="city" autocomplete="city"></x-inputf>
            </div>
          </div>
        </div>
      </div>
  
      
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
    </div>
  </form>
</x-layout>