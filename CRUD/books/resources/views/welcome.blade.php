<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link href="/css/welcome.css" rel="stylesheet">
        <!-- Styles -->
        <style>
          
        </style>
        
    </head>
    <body class="antialiased">
        <div class="Container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Books Store</h2>
                    <br><br><br><br>
                </div>

            
                @if(session('success'))
                    <script>
                        alert("Added Successfully")
                    </script>
                @endif
                @if(session('updated'))
                <script>
                    alert("Updated Successfully")
                </script>
                @endif
                
                <div class="table-col" class="col-12">
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publication Year</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{$book->book_title}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->publication_year}}</td>
                                <td><a href="/editbook/{{$book->id}}" ><input class="edit-btn"  type="button" value="Edit"></a></td>
                                <td><a href="/deletebook/{{$book->id}}" ><input class="delete-btn" type="button" value="Delete"></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-12 add-book-a">
                    <a  href="/addbook">Add Book</a>
                </div>
            </div>
        </div>
      
    </body>

    <script>

        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
