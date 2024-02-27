<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-info ">
    <br><a href="{{ route('studentinfo.form') }}" class="btn btn-primary ms-3">Login</a>
    <a href="{{ route('studentinfo.register') }}" class="btn btn-primary ms-3">register</a>
    <br><br>
    <a href="{{ route('studentinfo.create') }}"><button type="button" id="" class="btn btn-primary ms-3">Add
            Student Info</button></a>

    <div class="row m-2">
        <form action="">
            <div class="form group">
                <input type="search" name="search" class="form-control" placeholder="Search by name or email">
            </div><br>
            <button class="btn btn-light" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <tbody>
                <tr>
                    <td>{{ $student->name }} </td>
                    <td>{{ $student->phone }} </td>
                    <td>{{ $student->address }} </td>
                    <td>{{ $student->age }} </td>
                    <td>{{ $student->gender }} </td>
                    <td>
                        <form action="{{ route('studentinfo.destroy', $student->id) }}" method="Post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger ms-2">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('studentinfo.edit', $student->id) }}"><button type="button" id=""
                                class="btn btn-primary ms-3">Edit</button></a>
                    </td>
                    <td>
                        <a href="{{ route('studentinfo.view', $student->id) }}"><button type="button" id=""
                                class="btn btn-primary ms-3">View</button></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
