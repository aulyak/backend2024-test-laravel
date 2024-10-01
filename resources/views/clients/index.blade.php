<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <a href="" class="btn btn-primary">Add Client</a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients as $client)
            <tr>
              <td>{{ $client->id }}</td>
              <td>{{ $client->name }}</td>
              <td>{{ $client->address }}</td>
              <td>{{ $client->phone }}</td>
              <td>{{ $client->email }}</td>
              <td>
                <a href="" class="btn btn-info">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
