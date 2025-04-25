
<!-- http://la1project.test/jobs -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs List</title>
</head>
<body>
<h1>{{$title}}</h1>

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

</body>
</html>
