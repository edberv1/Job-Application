<nav class="bg-white border-gray-200 dark:bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/dashboards/employee" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/bitmap.png') }}" style="width: 50px" alt="Job Application" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Job Application</span>
    </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-md text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-gray-700">

          <li style="list-style-type: none" >
            <span class="block py-2 px-3 dark:text-white rounded md:border-0 md:p-0">
              Welcome {{auth()->user()->firstname}}!
            </span>
          </li>

          <li>
            <a href="/dashboards/employee/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Jobs</a>
          </li>

          <li>
            <a href="/dashboards/employee/cv" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">CV</a>
          </li>

          <li style="list-style-type: none" >
            @auth
            <form class="inline" method="POST" action="/logout">
              @csrf
              <button class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-red-500 md:dark:hover:text-red-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" type="submit">
                <i class="fa-solid fa-door-closed"></i> Log out
              </button>
            </form>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>
