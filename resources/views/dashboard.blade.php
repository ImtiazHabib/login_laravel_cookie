<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-5">
    <h1>Welcome, {{ $name }} </h1>
     @if($errors->any())
          @foreach ($errors->all() as $error )
          <span class="badge badge-primary">{{ $error }}</span>
          @endforeach
        </ul>
     @endif
    <form method="POST" action="/logout">
      @csrf
      <button type="submit" class="btn btn-danger mt-3">Logout</button>
    </form>
  </div>

  <!-- Bootstrap JS Bundle CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
