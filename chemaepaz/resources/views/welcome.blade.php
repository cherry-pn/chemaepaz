<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css"  href="{{ asset('/css/che.css') }}">
        <!-- Styles -->
       
    </head>
    <h1>LIST OF DATA</h1>
    <body>
    <table border=1 style="border-color:violet"   table align="center" >
    <tr>
    <th>first_name</th>
    <th>middle_name</th>
    <th>last_name</th>
    <th>age</th>
    <th>address</th>
    <th>email</th>
    <th>password</th>
    </tr>
    @foreach($result as $res)
        <tr>
            <td>{{$res['first_name']}}</td>
            <td>{{$res['middle_name']}}</td>
            <td>{{$res['last_name']}}</td>
            <td>{{$res['age']}}</td>
            <td>{{$res['address']}}</td>
            <td>{{$res['email']}}</td>
        </tr>
    
 
    @endforeach
    </table>
     </body>
</html>
