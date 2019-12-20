<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="3">
   <tr>
    <th>location</th>
    <th>code</th>
    <th>dni</th>
   </tr> 
   @foreach($cabins as $cab)
   <tr>
    <td>{{$cab->location}}</td>
    <td>{{$cab->code}}</td>
    
   </tr>

    @endforeach
    </table>
</body>
</html>