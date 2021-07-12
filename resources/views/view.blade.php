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


<table class="table">
  <thead>
    <tr>
      <th scope="col">isbn_no</th>
      <th scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">published_year</th>
      <th scope="col">book_image</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>

    @foreach($info as $kitab) 
    <tr>
      <th scope="row">{{$kitab->id}}</th>
      <td>{{$kitab->isbn_no}}</td>
      <td>{{$kitab->title}}</td>
      <td>{{$kitab->author}}</td>
      <td>{{$kitab->published_year}}</td>
      <td><img src="{{
           asset('uploads/'.$kitab -> book_image)
       }}" style="height:40px;width: 60px;"></td>
      <td>{{$kitab->price}}</td>

      <td>
        <form action="{{url('/deleteBook/'.$kitab->id)}}"> <!-- " . " le chai concat gareko  -->
        <input type="submit" value="delete">
      </form>
      </td>
      <td>
        <form action="{{url('/editBook/'.$kitab->id)}}">
        <input type="submit" value="edit">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>