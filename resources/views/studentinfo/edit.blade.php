<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .card {
            margin-top: 50px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-control {
            border-radius: 10px;
        }

        .error-list {
            color: red;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-title text-center">Update Student Information</h3>
                    <div class="card-body">
                        <form action="{{ route('studentinfo.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $student->name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone', $student->phone) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ old('address', $student->address) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age"
                                    value="{{ old('age', $student->age) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </form>
                    </div>
                </div>

                <!-- Display form errors -->
                <div class="error-list">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFx1ZOI1nG2JVRgU5FmdF5WbRhwRaI8aP9RAK5hv1A2a1ycY4b2OK/uxt" crossorigin="anonymous"></script>
</body>

</html>
