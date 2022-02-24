@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>La liste de mes cvs</h1>
                <br>
                <div class="pull-right">
                    <a href="{{ url('cvs/create') }}" class="btn btn-success">Nouveau cv</a>
                </div>
                <br>

                    <div class="container min-vh-100">
                        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                            @foreach ($cvs as $cv)
                            <div class="col-md-4">
                                <div class="card shadow" style="width: 20rem;">
                                    <img class="card-img-top" src="{{ asset('storage/' . $cv->photo) }}" alt="Card image cap" style="height: 300px" style="width:50%">
                                    <div class="card-body text-center">
                                      <h5 class="card-title">{{ $cv->titre }}</h5>
                                      <p class="card-text">{{ $cv->presentation }} .</p>
                                      <p>
                                        <form  method="post" action="{{ url('cvs/'.$cv->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          <a href="{{route('cvs.show',['cv'=>$cv->id ])}}" class="btn btn-primary" role="button">Details</a>
                                          <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning" role="button">Editer</a>

                                            @can('delete', $cv)
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                            @endcan

                                          </form>
                                      </p>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                    </div>



                    {{-- <div class="row" style="width: 100%;">
                        @foreach ($cvs as $cv)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail col"">
                                    <img src="{{ asset('storage/' . $cv->photo) }}" class="img-thumbnail" width="300" alt="Card image cap">
                                    <div class="caption" >
                                        <h3>{{ $cv->titre }}</h3>
                                        <p> {{ $cv->presentation }} </p>
                                            <a href="" class="btn btn-primary">Details</a>
                                            <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-light">Editer</a></td>
                                            <a href="" class="btn btn-danger">Supprimer</a></td>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div> --}}










                                {{--  <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="{{ asset('storage/'.$cv->photo) }}" class="card-img-top" alt="...">
                            <div class="caption">
                              <h3>{{ $cv->titre }}</h3>
                              <p>...</p>
                              <p>
                                  <a href="#" class="btn btn-primary" role="button">Show</a>
                                   <a href="#" class="btn btn-warning" role="button">Editer</a>
                                   <a href="#" class="btn btn-danger" role="button">Supprimer</a>
                            </p>
                            </div>
                          </div>
                        </div>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
