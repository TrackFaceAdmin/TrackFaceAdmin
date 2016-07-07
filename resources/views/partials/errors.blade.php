@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>       
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@elseif(isset($_GET['out']))
<div class="alert alert-danger">
    <ul> 
        <li>{{$_GET['out']}}</li>
    </ul>
</div>
@endif