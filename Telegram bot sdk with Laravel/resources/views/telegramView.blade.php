<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="padding-top: 20px">
        <form action=" {{url('/send-Message')}} " method="post">
            {{ csrf_field() }}
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" >
          </div>
          <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" name="message"  rows="3"></textarea>
        </div>
        <div class="form-group">

        <button type="button" class="btn btn-primary">Submit</button>
        </div>

    </form>


    <form action="{{url('/store-photo')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="formFile" class="form-label">Send Photo</label>
        <div class="form-group">
            <div class="custom-file">
                <input class="custom-file-input" type="file" name="file" id="file">
                <label for="formFile" class="custom-file-label">Chose file</label>
            </div>
        </div>
        <br>
            <button type="button" class="btn btn-primary">Submit</button>

        </form>

    </div>






















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
