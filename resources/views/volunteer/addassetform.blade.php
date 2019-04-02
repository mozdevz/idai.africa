@extends('layouts.app')
@section('content')
<div class="container">
    @auth
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Auth::user()->role_id != 2 )
            <div class="card">
                <div class="card-header">Welcome Mr {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} Auth::user()->name
                            

                        </div>
                    @endif

                    You are logged in! 

                        <a href="{{url('/')}}/admin">Go to administration dashboard</a>                           
                    
                </div>
            </div>
            @endif

            @if(Auth::user()->role_id == 2 )
            <div class="card mt-5">
                <div class="card-header">Register Volunteer</div>
                <div class="card-body">
                    <div class="card-body">
                    <form method="POST" action="{{url('/')}}/volunteer/asset/add">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Volunteer assets
                                    </div>
                                    <div class="card-body">
                                        @foreach($assets as $asset)
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="ass_{{$asset->id}}" class="h2" >{{ __($asset->name) }}</label>
                                            </div>
                                            
                                            <div class="col-md-6 float-right">
                                               <input type="checkbox" name="asset[]" class="form-control" value="{{$asset->id}}" id="ass_{{$asset->id}}" @if(in_array($asset->id,$volunteer_assets)) checked  @endif />
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row mt-5 float-right">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary float-right">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </form>
                </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endauth
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
          $("#province_select")
              .change(function () {
                $( "#province_select option:selected" ).each(function() {
                  window.location.replace("{{url('/')}}/home/" +$(this).val());
              });
            });  
        })  
    </script>
@endsection