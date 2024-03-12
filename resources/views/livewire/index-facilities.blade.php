@extends('layouts.app')

@section('content')

<div class="container m-auto mt-20">

<x-table :$headers :$rows paginate :paginator="null" />  
        


</div>
@endsection