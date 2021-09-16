<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Film Barat</title>
</head>
<body>
    <h1>Daftar Film Barat</h1>
    <table border ='1'>
        <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Rating</th>
        </tr>
        <?php $i=0 ?>    
        @foreach($movie as $mv)   
        <tr>
            <td><?php $i++; echo $i; ?></td>
            <td>{{$mv['Judul']}}</td>
            <td>{{$mv['Genre']}}</td>
            <td>{{$mv['Rating']}}</td>
        </tr>
        @endforeach
    <?php 
    ?>
</table>
<a href="/">Anime</a>
</body>
</html>