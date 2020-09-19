@if(session('message'))
    <div class="alert bg-{{ session('success') ? 'success' : 'danger' }} alert-dismissible text-white" id="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>{{ session('title') }}</h4>
        {{ session('message') }}
    </div>
@endif