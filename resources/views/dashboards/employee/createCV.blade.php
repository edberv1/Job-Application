<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create CV</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">
    <div class="flex justify-start p-2"><a class="px-8 py-2 text-blue-900 text-md bg-white hover:bg-blue-400 rounded-md" href="{{ route('dashboards.employee.cv') }}">← Back</a></div>
    <div class="flex flex-col items-center justify-center ">
        <form method="POST" action="{{ route('dashboards.employee.store') }}">
        @csrf
            <h1 class="text-center text-gray-300 text-3xl font-bold pb-4">Create your CV</h1>

                <label for="lookingjob" class="block pb-2 text-md font-medium text-gray-900 dark:text-white">What job your looking for?</label>
                <input type="text" id="lookingjob" name="lookingjob" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write the job here..." required>
                    @error('lookingjob')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="experience" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Work Experience:</label>
                <textarea name="experience" id="experience" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write your work experiences here..."></textarea>
                    @error('experience')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="education" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Your Education:</label>
                <textarea name="education" id="education" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write your education here..."></textarea>
                    @error('education')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="phonenumber" class="block pb-2 text-md font-medium text-gray-900 dark:text-white">Your Phone Number:</label>
                <input type="number" id="phonenumber" name="phonenumber" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write your phone number here..." required>
                    @error('phonenumber')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="document">Insert your CV document here:</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="document" id="document" type="file">
                    @error('document')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <div class="flex pt-4 justify-center">
                    <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-28 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
        </form>
    </div>
</body>
</html>
