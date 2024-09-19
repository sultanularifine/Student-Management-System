<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .btn {
            transition: 0.3s ease;
        }
        .btn:hover {
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.6);
        }
        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('studentinfo.create') }}" class="btn btn-primary">Add Student Info</a>
            <a class="btn btn-outline-secondary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>
                            @if ($student->image)
                                <img src="{{ asset($student->image) }}" alt="{{ $student->name }}" width="45px" height="55px">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('studentinfo.edit', $student->id) }}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{ route('studentinfo.destroy', $student->id) }}" method="Post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFx1ZOI1nG2JVRgU5FmdF5WbRhwRaI8aP9RAK5hv1A2a1ycY4b2OK/uxt" crossorigin="anonymous">
    </script>
</body>

</html>
