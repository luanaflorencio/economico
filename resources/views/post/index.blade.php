<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    @foreach ($post as $p)

        
        <h2>{{$p->challenge}}</h2>
        <small>{{$p->user_id}}</small>
        <br>
    @endforeach

    @include('includes.scripts')

</body>
</html>