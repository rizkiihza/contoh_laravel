@extends('layout.app')

@section('content')
<h1>home</h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias veritatis, inventore consequuntur ducimus quia labore laudantium minima veniam odit eligendi vero aperiam consequatur ad, voluptatem corporis a? Maxime, ex asperiores. </p>
@endsection

@section('sidebar')
    @parent
    <p> this is appended to the sidebar </p>
@endsection
