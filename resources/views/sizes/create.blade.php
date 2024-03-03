<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body class="container">
    <form action="{{route('sizes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>
      
      <div class="mb-3">
        <label for="status" class="form-label">status</label>
        <input type="text" class="form-control" id="status" placeholder="status" name="status">
      </div>
      <button>ENVOYER</button>
    </form>

    
</body>
</html>