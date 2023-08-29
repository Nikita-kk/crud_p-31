<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <a href="{{ route('form') }}"><button class="btn btn-info">add</button></a>
    <table class="table">

        @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('msg') }}
                <a href=" "class="close" data-dismissable="alert" aria-label="close">X</a>
            </div>
        @endif

        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>

                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>

                    <td><a href="{{ route('edit', $d->id) }}"><button class="btn btn-success">edit</button></a>
                        <a href="{{ route('delete', $d->id) }}"><button class="btn btn-danger">delete</button></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
