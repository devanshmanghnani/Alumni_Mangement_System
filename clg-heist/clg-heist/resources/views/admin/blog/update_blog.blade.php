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

        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <div class="m-4">
        <h2>Update data</h2>
        <form enctype="multipart/form-data" method="post" action="/update_blog/{{$blogs->id}}">                                    
        @csrf
            <div class="form-group">
                <label>Blog Title</label>
                <input name="title" class="form-control" type="text" value="{{ $blogs->title}}">
            </div>
            <div class="form-group">
                <label>Written by </label>
                <input name="written_by" class="form-control" type="text" value="{{ $blogs->written_by}}">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input name="date" data-toggle="datepicker" class="form-control"  type="date" value="{{ $blogs->date}}">
            </div>

            <h6>Blog Details</h6>
            <div class="form-group">
                <textarea class="textarea" name="description"  cols="80"
                    rows="5">{{ $blogs->description}}
                </textarea>
            </div>
            <div class="input-group mb-3">
                <div>
                    <input name="image" type="file" value={{ $blogs->image}}>
                </div>
            </div>
            <button type="submit" style="height: 35px;width: 250px"
                class="btn btn-dark">Submit</button>
            <br><br>
        </form>
        </div>
  </body>
</html>
</body>
</html>