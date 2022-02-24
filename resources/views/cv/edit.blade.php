@extends('layouts.app')

@section('content')


    {{--
        Systéme de Validation
         @if(count($errors))
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $message)
                <il>{{ $message }}</il><br>
            @endforeach
        </ul>
    </div>
    @endif  --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ url('cvs/'.$cv->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @if($errors->get('titre')) is-invalid @endif" value="{{ $cv->titre }}">
                        @if($errors->get('titre'))
                            @foreach ($errors->get('titre') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Présentation</label>
                        <textarea name="presentation" class="form-control @if($errors->get('presentation')) is-invalid @endif">{{ $cv->presentation }}</textarea>
                        @if($errors->get('presentation'))
                        @foreach ($errors->get('presentation') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input class="form-control" type="file" name="photo">
                    </div>

                    <div class="form-group">
                        <br>
                        <input type="submit" class="form-control btn btn-danger" value="Enregistrer">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
