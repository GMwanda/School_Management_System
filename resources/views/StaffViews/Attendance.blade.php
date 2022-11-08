@extends('layouts.stafflayout')
@section('staff-content')
    <h1>Attendance</h1>
    {{--
        TODO:
            1. Display all the lecture cards
            2. Show all students enrolled in that particular course with that lecturer
            3. The displayed info shoul have a radio button to mark people absent
            4. Button to "Update" 
         --}}
        <div class=" flex flex-row flex-wrap">
            <div id="card" class=" w-60 mx-7 my-4 overflow-hidden rounded-xl cursor-pointer bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
              <div class="p-5 ">
                <p class=" text-center font-bold">Course Name</p>
                <p class="text-medium font-light text-opacity-60 text-center mb-5 text-gray-700">SCES BICS 2A</p>
                <button onClick="document.location.href='{{route('updateAttendance')}}';" class="w-full rounded-md bg-blue-500  py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See More</button>
              </div>
            </div>
            <div id="card" class=" w-60 mx-7 my-4 overflow-hidden rounded-xl cursor-pointer bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
              <div class="p-5 ">
                <p class=" text-center font-bold">Course Name</p>
                <p class="text-medium font-light text-opacity-60 text-center mb-5 text-gray-700">SCES BICS 2B</p>
                <button class="w-full rounded-md bg-blue-500  py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See More</button>
              </div>
            </div>
            <div id="card" class=" w-60 mx-7 my-4 overflow-hidden rounded-xl cursor-pointer bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
              <div class="p-5 ">
                <p class=" text-center font-bold">Course Name</p>
                <p class="text-medium font-light text-opacity-60 text-center mb-5 text-gray-700">SCES BICS 2C</p>
                <button class="w-full rounded-md bg-blue-500  py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See More</button>
              </div>
            </div>
            <div id="card" class=" w-60 mx-7 my-4 overflow-hidden rounded-xl cursor-pointer bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
              <div class="p-5 ">
                <p class=" text-center font-bold">Course Name</p>
                <p class="text-medium font-light text-opacity-60 text-center mb-5 text-gray-700">SCES BBIT 2A</p>
                <button class="w-full rounded-md bg-blue-500  py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See More</button>
              </div>
            </div>
            <div id="card" class=" w-60 mx-7 my-4 overflow-hidden rounded-xl cursor-pointer bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
              <div class="p-5 ">
                <p class=" text-center font-bold">Course Name</p>
                <p class="text-medium font-light text-opacity-60 text-center mb-5 text-gray-700">SCES BBIT 2B</p>
                <button class="w-full rounded-md bg-blue-500  py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See More</button>
              </div>
            </div>
        </div>


@endsection