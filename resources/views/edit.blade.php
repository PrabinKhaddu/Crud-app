<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<form action="{{url('/updatebook/'.$book->id)}}" method="POST" enctype="multipart/form-data">
@csrf
    <Strong>Isbn no</Strong></br>
    <input type="text" name="isbn_no" value="{{$book->isbn_no}}"></br>

    <Strong>Title</Strong></br>
    <input type="text" name="title" value="{{$book->title}}"></br>

    <Strong>Author</Strong></br>
    <input type="text" name="author" value="{{$book->author}}"></br>

    <Strong>Published year</Strong></br>
    <input type="text" name="published_year" value="{{$book->published_year}}"></br>

    <Strong>Book image</Strong></br>
    <input type="file" name="book_image" value="{{$book->book_image}}"></br>

    <Strong>Price</Strong></br>
    <input type="text" name="price"value="{{$book->price}}" ></br>


    <input type="submit" value="Update"></br>

</form>
</body>
</html>