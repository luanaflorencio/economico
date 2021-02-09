<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <form action="{{route('posts.store')}}" method="POST">
    @csrf
    <textarea name="challenge" id="" cols="30" rows="10" placeholder="Qual desafio deseja propor?"></textarea>
    <input type="submit">
    </form>

    @include('includes.scripts')
</body>
</html>