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

                <form action="{{ url('cvs') }}" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @if($errors->get('titre')) is-invalid @endif" value="{{ old('titre') }}">

                        @if($errors->get('titre'))
                            @foreach ($errors->get('titre') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Présentation</label>
                        <textarea name="presentation" class="form-control @if($errors->get('presentation')) is-invalid @endif">{{ old('presentation') }}</textarea>
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
                        <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
