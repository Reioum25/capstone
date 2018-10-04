@extends('admin.admin-layouts.app')

@section('content')
<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Admin Account</div>
        
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($user) > 0)
                            @foreach($user as $users)
                                @if($users->admin == 1)
                                    <tr>
                                        <th scope="row">{{$users->id}}</th>
                                        <td>{{$users->firstname}}</td>
                                        <td>{{$users->lastname}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>{!! Form::open(['action' => ['AccountController@destroy', $users->id], 'method' => 'POST']) !!}
                                                {{Form::hidden('_method','DELETE')}}
                                                <a href="/home/{{$users->id}}/editaccount" class="btn btn-outline-primary" role="button">Edit</a>
                                                {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                                {!! Form::close() !!}</td>
                                    </tr>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="font-family: Century Gothic; font-size: 20px">Owner Account</div>
            
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($user) > 0)
                                @foreach($user as $users)
                                    @if($users->admin == 2)
                                        <tr>
                                            <th scope="row">{{$users->id}}</th>
                                            <td>{{$users->firstname}}</td>
                                            <td>{{$users->lastname}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{!! Form::open(['action' => ['AccountController@destroy', $users->id], 'method' => 'POST']) !!}
                                                {{Form::hidden('_method','DELETE')}}
                                                <a href="/home/{{$users->id}}/editaccount" class="btn btn-outline-primary" role="button">Edit</a>
                                                {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                                {!! Form::close() !!}</td>
                                        </tr>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="font-family: Century Gothic; font-size: 20px">User Account</div>
            
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($user) > 0)
                                @foreach($user as $users)
                                    @if($users->admin == 0)
                                        <tr>
                                            <th scope="row">{{$users->id}}</th>
                                            <td>{{$users->firstname}}</td>
                                            <td>{{$users->lastname}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{!! Form::open(['action' => ['AccountController@destroy', $users->id], 'method' => 'POST']) !!}
                                                {{Form::hidden('_method','DELETE')}}
                                                <a href="/home/{{$users->id}}/editaccount" class="btn btn-outline-primary" role="button">Edit</a>
                                                {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                                {!! Form::close() !!}</td>
                                        </tr>
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