<table class="min-w-full mt-5">
    <thead class="bg-gray-50 border-b border-gray-200">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900">
          Nbr
        </th>
        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900">
          Nom
        </th>
        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900">
          Age
        </th>
        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900">
          Genre
        </th>
        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900">
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      @forelse ($membres as $item)
        <tr class="odd:bg-white even:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            #. {{ $item->id }}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{ $item->nom }}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
           {{$item->age}}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
            {{ $item->genre }}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
            <form action="{{ route('membre.destroy', $item->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>

            </form>
          </td>
        </tr>
          
      @empty
          <p>pas de membres disponibles pour l'instant</p>
          
      @endforelse

    </tbody>
  </table>