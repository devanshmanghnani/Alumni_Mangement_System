<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <div class="m-4">
        <h2>Update data</h2>
        <form action="/update_admin/{{$admins->id}}" method="POST" class="contact-form">
          @csrf
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control"name="name" value={{ $admins->name}}>
          </div>
          <div class="mb-3">
            <label  class="form-label"></label>Email
            <input type="email" class="form-control" placeholder="Your Email" name="email" value={{ $admins->email}}>
          </div>
          <div class="mb-3">
            <label  class="form-label"></label>Staffid
            <input type="number" class="form-control" placeholder="Subject" name="staffid" value={{ $admins->staffid}}>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
        </div>
  </body>
</html>
</body>
</html>