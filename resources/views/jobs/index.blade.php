
<!-- http://la1project.test/jobs -->

@extends('layout')

@section('content')

<h1>Available Jobs</h1>

<ul>
    @forelse($jobs as $job)
        <li>
            {{json_encode($loop->first)}}
            {{json_encode($loop->even)}}
            {{json_encode($loop->odd)}}
            {{json_encode($loop->last)}}
            {{$loop->index}}
            {{$loop->iteration}}
            {{$loop->remaining}}
            {{$loop->count}}
            {{$job}}
        </li>
    @empty
        <li>
            no jobs
        </li>
    @endforelse


</ul>

@endsection
