<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
@extends('back.back')
@section('content')

 <!-- Table Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
         
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Client E-mail</th>
                                <th scope="col">Client Number</th>
                                <th scope="col">Number Of Guest</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Event Time</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sl=1)
                            @foreach ($show as $show)
                                
                          
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>{{$show->name}}</td>
                                <td>{{$show->email }}</td>
                                <td>{{$show->phone}}</td>
                                <td>{{$show->guest}}</td>
                                <td>{{$show->event}}</td>
                                <td>{{$show->time}}</td>
                                <td>{{$show->date}}</td>
                                <td>
                                    
                                        <div class="m-n2">
                                            <a href="{{route('event.edit',$show->id )}}"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('event.del',$show->id )}}"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    
                                </td>
                            </tr>
@endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection()