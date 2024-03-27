@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Etudiant</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('Etudiants.update',$etudiant->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CNE:</strong>
                    <input type="text" name="CNE" value="{{ $etudiant->CNE }}" class="form-control" placeholder=" CNE">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CIN:</strong>
                    <input type="text" name="CIN" value="{{ $etudiant->CIN }}" class="form-control" placeholder=" CIN">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="Nom" value="{{ $etudiant->Nom }}" class="form-control" placeholder="Nom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Prenom:</strong>
                <input type="text" name="Prenom" value="{{ $etudiant->Prenom }}" class="form-control" placeholder="Prenom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>DateNaissance:</strong>
                <input type="text" name="DateNaissance" value="{{ $etudiant->DateNaissance }}" class="form-control" placeholder="DateNaissance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Filière:</strong>
                <input type="text" name="Filière" value="{{ $etudiant->Filière }}" class="form-control" placeholder="Filière">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>AdresseMail:</strong>
                <input type="text" name="AdresseMail" value="{{ $etudiant->AdresseMail }}" class="form-control" placeholder="AdresseMail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('Etudiants.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    </form>
@endsection