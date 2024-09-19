<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f7fa;
        }

        .card {
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .student-info-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #007bff;
        }

        .student-info-icon {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .student-info-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .student-info-item i {
            margin-right: 10px;
        }

        .student-photo {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-back {
            border-radius: 20px;
            background-color: #007bff;
            color: white;
            padding: 8px 20px;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .student-photo {
                width: 80px;
                height: 80px;
            }

            .student-info-title {
                font-size: 1.25rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="text-center">
                        <img src="student-photo.jpg" alt="Student Photo" class="student-photo mb-3">
                    </div>

                    <h2 class="text-center student-info-title">Student Information</h2>

                    <div class="student-info-item">
                        <i class="bi bi-person-fill student-info-icon"></i>
                        <span><strong>Name:</strong> John Doe</span>
                    </div>

                    <div class="student-info-item">
                        <i class="bi bi-phone-fill student-info-icon"></i>
                        <span><strong>Phone:</strong> +123 456 7890</span>
                    </div>

                    <div class="student-info-item">
                        <i class="bi bi-geo-alt-fill student-info-icon"></i>
                        <span><strong>Address:</strong> 123 Main Street, City</span>
                    </div>

                    <div class="student-info-item">
                        <i class="bi bi-calendar2-date student-info-icon"></i>
                        <span><strong>Age:</strong> 21</span>
                    </div>

                    <div class="student-info-item">
                        <i class="bi bi-gender-ambiguous student-info-icon"></i>
                        <span><strong>Gender:</strong> Male</span>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-back">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNlZtXtPpOnLOPL9WjxlQmTk1bYChykk+8cuxmV0JEvJwE1+U99dBvEN2RWJ9o9" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGJ8fZCf3BIPLD4Zam2U5EXJb5l5uHzKCmXpC5I5ATQgpBHU/+R++8C8aTu" crossorigin="anonymous">
    </script>
</body>

</html>
