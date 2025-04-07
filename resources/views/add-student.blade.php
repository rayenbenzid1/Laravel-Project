<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student</h2>
                <a href=" {{ url('student-list') }} " class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back to student List</a>
                <form class="py-4" action=" {{ url('save-student') }} " method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="ncin" class="form-label">Ncin :</label>
                        <input type="text" class="form-control" id="ncin" name="ncin" placeholder="Enter your cin" value="{{ old('ncin') }}">
                        @error('ncin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ncin" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ncin" class="form-label">Email :</label>
                        <input type="mail" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ncin" class="form-label">Phone :</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ncin" class="form-label">Address :</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Enter your adress">
                            {{ old('address') }}
                        </textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>