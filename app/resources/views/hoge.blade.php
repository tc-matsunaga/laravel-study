<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        @foreach ($users as $user)
        <p>{{ $user->id }}　　{{ $user->name }}</p>
        @endforeach
    </body>
</html>