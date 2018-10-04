@extends('user.user-layouts.app')

@section('content')
<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Pending</div>
        
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Space Name</th>
                            <th scope="col">Message</th>
                            <th scope="col">Schedule</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($appointment) > 0)
                            @foreach($appointment as $appointments)
                                @if($appointments->user_id == auth()->user()->id)
                                    @if($appointments->accept == 0)
                                        <tr>
                                            <th scope="row">{{$appointments->id}}</th>
                                            <td>{{$appointments->space_name}}</td>
                                            <td>{{$appointments->message}}</td>
                                            <td>{{$appointments->schedule}}</td>
                                            <td>{!! Form::open(['action' => ['AppointmentController3@update', $appointments->id], 'method' => 'POST']) !!}
                                                    {{Form::hidden('_method','PUT')}}
                                                    {{Form::submit('Cancel', ['class' => 'btn btn-outline-danger'])}}
                                                    {!! Form::close() !!}</td>
                                        </tr>
                                    @else

                                    @endif
                                @else 
                                
                                @endif
                            @endforeach
                            @else
                            
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Confirmed Appointment</div>
            
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Space Name</th>
                                <th scope="col">Message</th>
                                <th scope="col">Schedule</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($appointment) > 0)
                                @foreach($appointment as $appointments)
                                    @if($appointments->user_id == auth()->user()->id)
                                        @if($appointments->accept == 1)
                                            <tr>
                                                <th scope="row">{{$appointments->id}}</th>
                                                <td>{{$appointments->space_name}}</td>
                                                <td>{{$appointments->message}}</td>
                                                <td>{{$appointments->schedule}}</td>
                                                <td>{!! Form::open(['action' => ['AppointmentController3@update', $appointments->id], 'method' => 'POST']) !!}
                                                    {{Form::hidden('_method','PUT')}}
                                                    {{Form::submit('Cancel', ['class' => 'btn btn-outline-danger'])}}
                                                    {!! Form::close() !!}</td>
                                            </tr>
                                        @else
        
                                        @endif
                                    @else
                                    
                                    @endif
                                @endforeach
                                @else
                                
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <hr>
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Ignored Appointment</div>
            
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Space Name</th>
                                <th scope="col">Message</th>
                                <th scope="col">Schedule</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($appointment) > 0)
                                @foreach($appointment as $appointments)
                                    @if($appointments->user_id == auth()->user()->id)
                                        @if($appointments->accept == 2)
                                            <tr>
                                                <th scope="row">{{$appointments->id}}</th>
                                                <td>{{$appointments->space_name}}</td>
                                                <td>{{$appointments->message}}</td>
                                                <td>{{$appointments->schedule}}</td>
                                            </tr>
                                        @else
        
                                        @endif
                                    @else 
                                    
                                    @endif
                                @endforeach
                                @else
                                
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Canceled Appointment</div>
            
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Space Name</th>
                                <th scope="col">Message</th>
                                <th scope="col">Schedule</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($appointment) > 0)
                                @foreach($appointment as $appointments)
                                    @if($appointments->user_id == auth()->user()->id)
                                        @if($appointments->accept == 3)
                                            <tr>
                                                <th scope="row">{{$appointments->id}}</th>
                                                <td>{{$appointments->space_name}}</td>
                                                <td>{{$appointments->message}}</td>
                                                <td>{{$appointments->schedule}}</td>
                                            </tr>
                                        @else
        
                                        @endif
                                    @else

                                    @endif
                                @endforeach
                                @else
                                
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection