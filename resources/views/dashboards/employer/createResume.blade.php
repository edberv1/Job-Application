<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Resume</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-100">
    <div class="flex justify-start pt-2 pl-2"><a class="px-8 py-1 text-blue-900 text-md bg-white hover:bg-blue-400 rounded-md" href="{{ route('dashboards.employer.resume') }}">←</a></div>
    <div class="flex flex-col items-center justify-center ">
        <form method="POST" action="{{ route('dashboards.employer.store') }}">
        @csrf
            <h1 class="text-center text-gray-300 text-3xl font-bold pb-2">Create Company Resume</h1>

                <label for="company" class="block pb-2 text-md font-medium text-gray-900 dark:text-black">Company name</label>
                <input type="text" id="company" name="company" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name"" placeholder="Write the company name here..." required>
                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="education" class="block mb-2 text-md font-medium text-gray-900 dark:text-black">Position</label>
                <input name="education" id="education" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write the position here..."></input>
                    @error('education')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="skills" class="block mb-2 text-md font-medium text-gray-900 dark:text-black">Years of experience</label>
                <input name="skills" id="skills"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write years of experience of the company.."></input>
                    @error('skills')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="workExperience" class="block mb-2 text-md font-medium text-gray-900 dark:text-black">Write other info about the job:</label>
                <textarea name="workExperience" id="workExperience" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write information about the job here..."></textarea>
                    @error('workExperience')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label for="phoneNumber" class="block pb-2 text-md font-medium text-gray-900 dark:text-black">Your Phone Number:</label>
                <input type="number" id="phoneNumber" name="phoneNumber" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write your phone number here..." required>
                    @error('phoneNumber')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="document">Insert your Resume document here:</label>
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
