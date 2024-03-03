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
                <th>code Color</th>
                <th>Status</th>
               
                
            </tr>
        </thead>
        <tbody>
            @foreach ($Colors as $Color)
            <tr>
                <td>{{$Color->id}}</td>
                <td>{{$Color->name}}</td>
                <td>{{$Color->code}}</td>
                <td>{{$Color->status}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>