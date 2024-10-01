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
    <form action="{{route('clients.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Client Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label for="client_prefix">Client Prefix</label>
            <input type="text" name="client_prefix" id="client_prefix" class="form-control">
          </div>
          <div class="col">
            <div class="form-group">
              <input class="form-check-input" type="checkbox" value="" id="is_project">
              <label class="form-check-label" for="is_project">
                Is Project
              </label>
            </div></div>
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control">
      </div>
      <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="form-control">
      </div>
      <div class="form-group">
        <label for="client_logo">Client Logo</label>
        <input type="file" name="client_logo" id="client_logo" class="form-control">
      </div>
      <div class="row mt-5">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>
