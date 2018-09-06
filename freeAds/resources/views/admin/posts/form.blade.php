<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
    <label for="picture" class="control-label">{{ 'Source img' }}</label>
    <textarea class="form-control" rows="5" name="picture" type="textarea" id="picture" >{{ $post->picture or ''}}</textarea>
    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $post->content or ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ $post->price or ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
{{--<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">--}}
    {{--<label for="user_id" class="control-label">{{ 'User Id' }}</label>--}}
    {{--<input class="form-control" name="user_id" type="number" id="user_id" value="{{ $post->user_id or ''}}" >--}}
    {{--{!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}--}}
{{--</div>--}}


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
