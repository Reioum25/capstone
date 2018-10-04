@extends('owner.owner-layouts.app')

@section('content')
<div class="container" style="padding-top: 50px; padding-bottom: 150px;">
    <section class="jumbotron text-center">
        <div class="container">
        <form class="form-inline" action="/home/search" method="GET">
                <select class="form-control col-md-10 font-weight-bold" name="s">
                    <option value="Ayala">Ayala</option>
                    <option value="Boalan">Boalan</option>
                    <option value="Camino Nuevo">Camino Nuevo</option>
                    <option value="Canelar">Canelar</option>
                    <option value="Divisoria">Divisoria</option>
                    <option value="Guiwan">Guiwan</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Pasonanca">Pasonanca</option>
                    <option value="Pueblo" selected>Pueblo</option>
                    <option value="Putik">Putik</option>
                    <option value="Recodo">Recodo</option>
                    <option value="San Roque">San Roque</option>
                    <option value="San Jose Gusu">San Jose Gusu</option>
                    <option value="Sta. Barbara">Sta. Barbara</option>
                    <option value="Sta. Catalina">Sta. Catalina</option>
                    <option value="Sta. Maria">Sta. Maria</option>
                    <option value="Suterville">Suterville</option>
                    <option value="Talon-Talon">Talon-Talon</option>
                    <option value="Tetuan">Tetuan</option>
                    <option value="Tugbungan">Tugbungan</option>
                    <option value="Zambowood">Zambowood</option>
                </select>
                <button type="button" class="btn btn-dark col-md-2">Search</button>
              </form>
        </div>
    </section>

    <div class="album py-6 bg-light">
        <div class="container">

        <div class="row">

            @if(count($commercialspace) > 0)
            @foreach($commercialspace as $commercialspaces)
                @if($commercialspaces->owner_id == $owner_id)
                    <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 250px" src="/storage/images/{{$commercialspaces->image1}}" alt="Card image cap">
                        <div class="card-body">
                        <blockquote class="blockquote">
                        <h3 class="card-text mb-0">{{$commercialspaces->space_name}}</h3>
                        <footer class="blockquote-footer"><i class="fa fa-map-marker" style="font-size:15px;color:red;"></i> {{$commercialspaces->barangay}}, {{$commercialspaces->street}}</footer>
                        </blockquote>
                        <p class="card-text lead text-primary">&#8369;{{$commercialspaces->price}} <small class="text-muted">/ {{$commercialspaces->type}}</small></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="/home/{{$commercialspaces->id}}/show" class="btn btn-lg btn-outline-dark" role="button">View More</a>
                            <a href="/home/{{$commercialspaces->id}}/edit" class="btn btn-lg btn-outline-dark" role="button">Edit</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @else
                    <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 250px" src="/storage/images/{{$commercialspaces->image1}}" alt="Card image cap">
                        <div class="card-body">
                        <blockquote class="blockquote">
                        <h3 class="card-text mb-0">{{$commercialspaces->space_name}}</h3>
                        <footer class="blockquote-footer"><i class="fa fa-map-marker" style="font-size:15px;color:red;"></i> {{$commercialspaces->barangay}}, {{$commercialspaces->street}}</footer>
                        </blockquote>
                        <p class="card-text lead text-primary">&#8369;{{$commercialspaces->price}} <small class="text-muted">/ {{$commercialspaces->type}}</small></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="/home/{{$commercialspaces->id}}/show" class="btn btn-lg btn-outline-dark" role="button">View More</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @endif
            @endforeach
                {{$commercialspace->links()}}
            @else
            
            @endif

        </div>
        </div>
    </div>
</div>
@endsection