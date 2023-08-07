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

        <link href="/css/addbook.css" rel="stylesheet">
        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body class="antialiased">
        <div class="Container">
            <div class="row">
                <div class="col-12">
                    <h2>Add Book</h2>
                    <div class="form">
                        <form action="/postbook" method="POST">
                            @csrf
                            <label>Booke Title:</label>
                            <input type="text" placeholder="Book Title" name="title">
                            <br><br>
                            <label>Author Name:</label>
                            <input type="text" placeholder="Author Name" name="name">
                            <br><br>
                            <label>Publication Year:</label>
                            <input type="date" placeholder="Publication Year" name="publication">
                            <br><br><br>
                            <div class=" add-book-a">
                                <button>Add</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
