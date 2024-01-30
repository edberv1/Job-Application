
@vite('resources/css/app.css')
<script src="//unpkg.com/alpinejs" defer></script>
<div>
    <div class="flex justify-center fixed">
        <x-side-dashboard/>
    </div>
<div class="py-12 pl-56 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            All Registered Users
            <div class="flex justify-end p-2">
                <a class="px-4 py-2 text-white bg-green-500 hover:bg-green-800 rounded-md" href="{{ route('dashboards.admin.users.create') }}">Create User</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Lastname
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                {{ $user->firstname }}
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                {{ $user->lastname }}
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                {{ $user->email }}
                              </div>
                            </td>
                            <td>
                              <div class="flex justify-end">
                                <div class="flex space-x-2">
                                  <a href="{{ route('dashboards.admin.users.edit', $user->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                                    <i class="fa-solid fa-pencil"></i>
                                  </a>
                                  <button class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md deleteBtn" data-user-id="{{ $user->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                  </button>
                                </div>
                              </div>
                            </td>
                          </tr>

                        @endforeach
                        @include('dashboards.admin.users.delete')
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
<x-flash-message />
