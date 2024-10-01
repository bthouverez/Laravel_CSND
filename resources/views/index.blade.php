<!DOCTYPE html>
<html lang="en">
<head>
    <title>All the characters</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Label</th>
        <th>Price</th>
        <th>Desc</th>
        <th>Birth date</th>
        <th>Image</th>
    </tr>
    @foreach($characters as $character)
        <tr>
            <td>{{ $character->id }}</td>
            <td>{{ $character->label }}</td>
            <td>{{ $character->price }}</td>
            <td>{{ $character->desc }}</td>
            <td>{{ $character->birth_date }}</td>
            <td><img src="img/avatar.png" alt="avatar"></td>
        </tr>
    @endforeach
</table>

</body>
</html>
