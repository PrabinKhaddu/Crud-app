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
    @if(Session('success'))
    <div class="alert alert-danger" role="alert">
    {{Session ('success')}}
    </div>
    @endif

    @if(Session('successDelete'))
    <div class="alert alert-danger" role="alert">
    {{Session('sessionDelete')}}
    @endif
    </div>

    @if(Session('successUpdate'))
    <div class="alert alert-danger" role="alert">
    {{Session('sessionUpdate')}}
    @endif
    </div>

    <h1>BOOK STORE</h1>

   

    <form action="{{url('addbook')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <Strong>Isbn no</Strong></br>
        <input type="text" name="isbn_no"></br>

        <Strong>Title</Strong></br>
        <input type="text" name="title"></br>

        <Strong>Author</Strong></br>
        <input type="text" name="author"></br>

        <Strong>Published year</Strong></br>
        <input type="text" name="published_year"></br>

        <Strong>Book Image</Strong></br>
        <input type="file" name="book_image"></br>

        <Strong>Price</Strong></br>
        <input type="text" name="price"></br>
        </br>

        <input type="submit" value="Add Book"></br>
        </br>

    </form>


    <form action="{{url('viewbook')}}" method="GET">
    <button type="submit">
        View Book
    </button>
    </form>
</body>
</html>