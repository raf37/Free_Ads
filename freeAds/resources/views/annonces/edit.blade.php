    @extends('layouts.app')
    @section('content')
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Modifier une annonce</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('annonces.update', $annonce->id) }}">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $annonce->title }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-md-4 control-label">Content</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ $annonce->content }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture" class="col-md-4 control-label">Picture</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="password" value="{{ $annonce->picture }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">Price</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="password" value="{{ $annonce->prix }}" required>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="password" class="col-md-4 control-label">user_id</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="text" class="form-control" name="password" value="{{ $annonce->user_id }}" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
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