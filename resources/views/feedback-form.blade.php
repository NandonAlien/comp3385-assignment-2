@extends('layouts.app')

@section('content')
<h1>Feedback Form</h1>
<form action ="{{url ('/send') }}" method="post">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for='fullname'>Full Name</label><br>
        <input type="text" id="fullname" name="fullname">
    </div>
    <div>
        <label for='email'>Email</label><br>
        <input type="text" id="email" name="email">
    </div>
    <div>
        <label for='comment'>Comments</label><br>
        <textarea id="comment" name="comment">
    </div>
    
    let us know what you think of our website<br>

    <button type="submit"></button>
    
</form>
@endsection