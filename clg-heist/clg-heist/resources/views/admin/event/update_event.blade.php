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
        <form enctype="multipart/form-data" method="post" action="/update_event/{{$events->id}}">                                    
        @csrf
            <div class="form-group">
                <label for="name">Event Title</label>
                <input name="name" class="form-control" type="text" value="{{ $events->name}}">
            </div>
            <div class="form-group">
                <label for="location">Location </label>
                <input name="location" class="form-control" type="text" value="{{ $events->location}}">
            </div>
            <div class="form-group">
                <label for="organised_by">Organised By </label>
                <input name="organised_by" class="form-control" type="text" value="{{ $events->organised_by}}">
            </div>

            <div class="form-group">
                <label for="date">Event Date</label>
                <input name="date" data-toggle="datepicker" class="form-control" value="{{ $events->date}}"
                    type="date">

            </div>
            <div class="form-group">
                <label for="time">Event Time</label>
                <input name="time"  class="form-control" type="text" value="{{ $events->time}}">
            </div>
            <h6>Event Details</h6>
            <div class="form-group">
                <label for="description"></label>
                <textarea class="textarea" name="description"  cols="80"
                    rows="5">{{ $events->description}}</textarea>
            </div>
            <div class="input-group mb-3">
                <div>
                    <input name="image" type="file" value="{{ $events->image}}">
                    <label>Choose cover image</label>
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