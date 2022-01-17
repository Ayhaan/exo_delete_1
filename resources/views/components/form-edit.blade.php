<div class="mt-10">
    <div class="mt-5 md:mt-0 md:col-span-2">
        {{-- ACTION FORM --}}
      <form action="{{ route('membre.update', $membre->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">

                          <div class="col-span-6" >
                              <label for="first_name" class="block text-sm font-medium text-gray-700">nom</label>
                              <input type="text" value="{{ $membre->nom }}" name="nom" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          </div>
          
                          <div class="col-span-6 ">
                              <label for="age" class="block text-sm font-medium text-gray-700">age</label>
                              <input type="number" value="{{ $membre->age }}" name="age" id="age" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          </div>
              
                          <div class="col-span-6 ">
                              <label for="genre" class="block text-sm font-medium text-gray-700">genre</label>
                              <select id="genre" name="genre" autocomplete="genre" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              <option {{ $membre->genre == "femme" ? "selected" : "" }}>femme</option>
                              <option {{ $membre->genre == "homme" ? "selected" : "" }}>homme</option>
                              </select>
                          </div>
                      </div>
                      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                          <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          Save
                          </button>
                      </div>
              </div>
      
          </div>
      </form>
    </div>
  </div>
</div>