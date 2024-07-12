<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
@extends('back.back')
@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Horizontal Form</h6>
                    <form method="post" action="{{route('edit.form')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$check->name}}" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{$check->email}}"  class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{$check->phone}}"  class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="text" name="date" value="{{$check->date}}"  class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <input type="text" name="time" value="{{$check->time}}"  class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Number Of Guest</label>
                            <div class="col-sm-10">
                                <input type="text" name="nog" value="{{$check->guest}}"  class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Event Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="event" value="{{$check->event}}"  class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$check->id}}">
                       
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
          
        </div>
    </div>
    <!-- Form End -->


   
</div>
<!-- Content End -->

@endsection()