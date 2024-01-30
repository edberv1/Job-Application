<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-blue-100">
    <nav class="bg-white border-gray-200 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
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
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
              <li>
                <a href="/" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent border ">Home</a>
              </li>

              <li>
                <a href="sign-in" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 dark:text-black md:dark:text-black md:hover:text-blue-700" aria-current="page">Sign In</a>
              </li>

              <li>
                <a href="sign-up" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Sign Up</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <br>

    <div class="flex-col lg:flex lg:flex-2 lg:justify-end items-center">
      <li style="list-style-type: none">
        <a href="#" class="text-3xl text-black hover:text-laravel font-steelfish font-bold"><i class="fa-solid fa-gear"></i>Jobs to Apply</a>
      </li>
    </div>

    <div class="flex justify-around pt-16">

        <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>
          <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div> <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>
          <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>


    </div>

    <div class="flex justify-around pt-32">

        <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>

          <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>
          <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>
          <div class="m-5">
            <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
              <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
                <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
                  <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
                </div>
              </a>
              <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
                <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                  <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
                  <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
                </div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('dashboards.employee.card3') }}">View</a>
                  </button>
              </div>
            </div>
          </div>
      </div>
      <x-flash-message />
</body>
</html>
