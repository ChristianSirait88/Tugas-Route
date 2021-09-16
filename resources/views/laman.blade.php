<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anime</title>
</head>
<body>
    <h1>Daftar Anime</h1>
    <table border ='1'>
        <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Studio</th>
        <th>Genre</th>
        <th>Rating</th>
        </tr>
        <?php $i=0 ?>    
        @foreach($daftar as $dt)   
        <tr>
            <td><?php $i++; echo $i; ?></td>
            <td>{{$dt['Judul']}}</td>
            <td>{{$dt['Studio']}}</td>
            <td>{{$dt['Genre']}}</td>
            <td>{{$dt['Rating']}}</td>
        </tr>
        @endforeach
    <?php 
    ?>
</table>
<a href="tes">Film Barat</a>
</body>
</html>