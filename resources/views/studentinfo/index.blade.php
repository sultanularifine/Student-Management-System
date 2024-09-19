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

        .btn-custom {
            transition: 0.3s;
            margin-left: 0.5rem;
        }

        .btn-custom:hover {
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);
        }

        .form-control {
            border-radius: 20px;
        }

        .table-striped tbody tr:hover {
            background-color: #e9f0f5;
        }

        @media (max-width: 768px) {
            .btn-custom {
                margin: 0.5rem 0;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="{{ route('studentinfo.form') }}" class="btn btn-primary btn-custom">Login</a>
                <a href="{{ route('studentinfo.register') }}" class="btn btn-primary btn-custom">Register</a>
            </div>
            <a href="{{ route('studentinfo.create') }}" class="btn btn-primary btn-custom">Add Student Info</a>
        </div>
    </div>

    <!-- Search Form -->
    <div class="container mb-3">
        <form action="" method="get" class="d-flex">
            <input type="search" name="search" class="form-control me-2" placeholder="Search by name or email">
            <button class="btn btn-light" type="submit">Search</button>
        </form>
    </div>

    <!-- Student Table -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>
                                <form action="{{ route('studentinfo.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('studentinfo.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('studentinfo.view', $student->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFx1ZOI1nG2JVRgU5FmdF5WbRhwRaI8aP9RAK5hv1A2a1ycY4b2OK/uxt" crossorigin="anonymous"></script>
</body>

</html>
