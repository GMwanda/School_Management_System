@extends('layouts.staffLayout')
@section('staff-content')
<style>
    #t_heading:focus{
        border: none;
    }
    #s_btn{
        background-color: 39829B;
    }
</style>
<div class="flex flex-col justify-center items-center">
    <h1>Add Reference Material</h1>
    <form class="flex flex-col items-center border border-red-700 h-96 my-11 px-5 py-3 rounded-md shadow-sm" action="{{ url('/addNotes/upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-4">
            <label for="t_heading">Topic</label>
            <input multiple type="text" name="t_heading" id="t_heading" class="rounded-lg h-9 border border-solid bg-gray-50 px-2 w-52">
            <input type="text" value="{{$courseId->id}}" hidden name="t_courseId">
        </div>
        <div class="my-4">
            <label class=" mb-2 text-sm font-medium text-gray-900"  for="file_input">Upload file</label>
            <input class=" w-56 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" name="file_input" type="file">
        </div> <br>
        <button type="submit" id="s_btn" class="btn bg-cyan-700 text-white hover:scale-75 transition duration-150 ease-in-out delay-150">Submit</button>
    </form>
</div>






@endsection