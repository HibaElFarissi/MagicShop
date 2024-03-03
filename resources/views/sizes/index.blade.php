<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
               
                <th>Status</th>
               
                
            </tr>
        </thead>
        <tbody>
            @foreach ($Sizes as $Size)
            <tr>
                <td>{{$Size->id}}</td>
                <td>{{$Size->name}}</td>
                
                <td>{{$Size->status}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>