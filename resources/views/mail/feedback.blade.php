@extends('layouts.email')

@section('content')
<p>{{ $fullname }} sent feedback to your website. Below are the comments left by {{$fullname}}
<p>{{ $comment }}</p>
@endsection