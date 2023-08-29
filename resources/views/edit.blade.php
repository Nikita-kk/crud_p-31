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
    <form action="{{ route('update', $data->id) }}" method="post">
        @csrf
        <div class="container" style="margin-top:80px;">

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter name"
                    name="name" value="{{ $data->name }}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter email"
                    name="email" value="{{$data->email }}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <button class="btn btn-success">update</button>

        </div>

    </form>
</body>

</html>
