@extends('layouts.email')

@section('content')
<p>{{ $fullname }} sent feedback to your website. Down below is a comment left by {{$fullname}}.
<p>{{ $comment }}</p>
@endsection