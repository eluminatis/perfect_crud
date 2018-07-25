@if ($errors->any())           
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach        
        </ul>                  
    </div>
@endif
@if(Session::has('flash_msg'))
    <div class="alert alert-primary text-center">
        <p><b>{{Session::get('flash_msg')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_primary'))
    <div class="alert alert-primary text-center">
        <p><b>{{Session::get('flash_msg_primary')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_success'))
    <div class="alert alert-success text-center">
        <p><b>{{Session::get('flash_msg_success')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_info'))
    <div class="alert alert-info text-center">
        <p><b>{{Session::get('flash_msg_info')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_warning'))
    <div class="alert alert-warning text-center">
        <p><b>{{Session::get('flash_msg_warning')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_danger'))
    <div class="alert alert-danger text-center">
        <p><b>{{Session::get('flash_msg_danger')}}</b></p>
    </div>
@endif
@if(Session::has('flash_msg_alert'))
    <script>
        alert('{{Session::get("flash_msg_alert")}}');
    </script>
@endif