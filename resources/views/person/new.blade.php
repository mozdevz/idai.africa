@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col">
		<form action="{{route('addPerson')}}" method="post">
			@csrf
			<div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">{{__('Name')}}</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                    <label for="neighborhood">{{__('Neighborhood')}}</label>
                    <input type="text" class="form-control" id="name" name="neighborhood" value="{{ old('neighborhood') }}" required>
                    @if ($errors->has('neighbourhood'))
                        <span class="help-block">
                            <strong>{{ $errors->first('neighbourhood') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('Age') ? ' has-error' : '' }}">
                    <label for="Age">{{__('Age')}}</label>
                    <input type="text" class="form-control" id="name" name="Age" value="{{ old('Age') }}" required>
                    @if ($errors->has('Age'))
                        <span class="help-block">
                            <strong>{{ $errors->first('Age') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label for="gender">{{__('gender')}}</label>
                    <input type="text" class="form-control" id="name" name="gender" value="{{ old('gender') }}" required>
                    @if ($errors->has('gender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('condition_id') ? ' has-error' : '' }}">
                    <label for="condition_id">{{__('condition_id')}}</label>
                    <input type="text" class="form-control" id="name" name="condition_id" value="{{ old('condition_id') }}" required>
                    @if ($errors->has('condition_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('condition_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('photo_url') ? ' has-error' : '' }}">
                    <label for="photo_url">{{__('photo_url')}}</label>
                    <input type="text" class="form-control" id="name" name="photo_url" value="{{ old('photo_url') }}" required>
                    @if ($errors->has('photo_url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo_url') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('photo_url') ? ' has-error' : '' }}">
                    <label for="photo_url">{{__('photo_url')}}</label>
                    <input type="text" class="form-control" id="name" name="photo_url" value="{{ old('photo_url') }}" required>
                    @if ($errors->has('photo_url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo_url') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('condition_description') ? ' has-error' : '' }}">
                    <label for="condition_description">{{__('condition_description')}}</label>
                    <input type="text" class="form-control" id="name" name="condition_description" value="{{ old('condition_description') }}" required>
                    @if ($errors->has('condition_description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('condition_description') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('created_at') ? ' has-error' : '' }}">
                    <label for="created_at">{{__('created_at')}}</label>
                    <input type="text" class="form-control" id="name" name="created_at" value="{{ old('created_at') }}" required>
                    @if ($errors->has('created_at'))
                        <span class="help-block">
                            <strong>{{ $errors->first('created_at') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="form-group {{ $errors->has('updated_at') ? ' has-error' : '' }}">
                    <label for="updated_at">{{__('updated_at')}}</label>
                    <input type="text" class="form-control" id="name" name="updated_at" value="{{ old('updated_at') }}" required>
                    @if ($errors->has('updated_at'))
                        <span class="help-block">
                            <strong>{{ $errors->first('updated_at') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
					<input type="submit" href="#" class="btn btn-primary pull-right dark-theme-btn b0" id="publish_btn" value="Add User">
                </div>
            </div>
		</form>
	</div>
</div>
@endsection