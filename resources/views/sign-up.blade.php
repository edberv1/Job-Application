<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
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

    <br><br>

  <div class="justify-center">




    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="/images/bitmap.png" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up for an account</h2>
      </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/users" method="POST">
              @csrf
              <div>
                <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Firstname</label>
                <div class="mt-2">
                  <input type="text" name="firstname" id="firstname" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('firstname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <div>
                <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Lastname</label>
                <div class="mt-2">
                  <input type="text" name="lastname" id="lastname" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('lastname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                  <input type="email" name="email" id="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-2">
                  <input type="password" name="password" id="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>



              <div>
                <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                <div class="mt-2">
                  <input type="password" name="confirm-password" id="confirm-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('confirm-password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>


              <select name="roleId" id="roleId" class="block py-2.5 w-full text-md text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                <option value="" disabled selected>Select position</option>
                <option class="text-gray-900" value="2">Employee</option>
                <option class="text-gray-900" value="3">Employer</option>
            </select>





              <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
              </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
              Already have an account?
              <a href="sign-in" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
          </div>
        </div>






</div>

</body>
</html>
