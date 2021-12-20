@extends('layouts.main')
@section('content')
<table class="table table-bordered " style=" width: 50%;margin-left: auto;margin-right: auto;">
    <thead>
        <tr>
            <th class="text-center" scope="col" colspan="2">THÔNG TIN TÀI KHOẢN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Name</th>
            <td>{{Auth::user()->name}}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{Auth::user()->email}}</td>
        </tr>
        <tr>
            <th scope="row">Created at</th>
            <td colspan="2">{{Auth::user()->created_at}}</td>
        </tr>
        <tr>
            <th scope="row">Course total</th>
            <td colspan="3">{{count($courseBuyed)}}</td>
        </tr>
        <tr>
            <th scope="row">Course bought</th>

            <td colspan="4">
                @foreach($courseBuyed as $cb)
                <a href="/study/{{$cb->course->id}}/{{$cb->course->slug}}.html">{{$cb->course->name}}</a>
                <br>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>
@endsection