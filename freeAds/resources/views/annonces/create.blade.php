@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer une annonce</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('annonces.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">title</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-md-4 control-label">Content</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">price</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture" class="col-md-4 control-label">picture</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection