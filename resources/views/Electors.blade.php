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
    <th>Nombre</th>
    <th>Apellido</th>
   </tr> 
   @foreach($Electors as $ele)
   <tr>
    <td>{{$ele->name}}</td>
    <td>{{$ele->lastname}}</td>
    <td>{{$ele->dni}}</td>
   </tr>

    @endforeach
    </table>
</body>
</html>