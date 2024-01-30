<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-3</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-100">


































    <div class="flex justify-start p-2"><a class="px-8 py-2 text-blue-900 text-md bg-white hover:bg-blue-400 rounded-md" href="{{ route('dashboards.employee.index') }}">←</a></div>
    <div class="h-28"></div>




    <div class="m-5">
        <div class="bg-blue-200 group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
          <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
            <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
              <img src="/images/Googl.png" alt="" class="h-full w-full object-cover text-gray-700" />
            </div>
          </a>
          <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
            <h3 class="text-sm text-gray-600">Google Inc</h3>
            <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> Sr. Frontend Engineer </a>
            <p class="overflow-hidden pr-7 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna . Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus?</p>

            <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
              <div class="">Experience:<span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900"> 2 Years </span></div>
              <div class="">Salary:<span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">180-250k</span></div>
            </div>
            <br>
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                APPLY
              </button>
          </div>
        </div>
      </div>


    </div>
</body>
</html>
