@extends('layouts.app')

@section('content')
<h1>Feedback Form</h1>
<form method="POST">
    @csrf
    <label for='Fllname'>Full Name</label><br>
    <input type="text" id="Fllname" name="Fllname"><br><br>
    <label for='Email'>Email</label><br>
    <input type="text" id="Email" name="Email"><br><br>
    <label for='Comnts'>Comments</label><br>
    <input type="text" id="Comnts" name="Comnts"><br>
    let us know what you think of our website<br><br>
    <input type="submit" value="Submit">
</form>
@endsection