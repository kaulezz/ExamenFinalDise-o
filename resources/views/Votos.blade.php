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
    <th>Votos</th>
    <th>DATE</th>
   </tr> 
   @foreach($Votos as $vot)
   <tr>
    <td>{{$vot->contador}}</td>
    <td>{{$vot->date}}</td>
   </tr>

    @endforeach
    </table>
</body>
</html>