

@if(session()->has('flash_message'))

<div class="alert alert-{{session()->get('flash_message_level')}} fade in alert-dismissible show">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" style="font-size:20px">×</span>
  </button>   {!! session()->get('flash_message') !!} 
</div>

@endif