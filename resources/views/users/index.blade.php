<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table with Buttons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td button {
            background-color: #337ab7;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 5px;
        }

        td button:hover {
            background-color: #286090;
        }

        .edit-button {
            background-color: #f0ad4e;
        }

        .edit-button:hover {
            background-color: #ec971f;
        }
    </style>
</head>
<body>
    <a href="{{route('users.create')}}">create new user</a>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="users/{{$user->id}}/edit">
                    <button type="button">Edit</button>
                </a><br>
                <form action="{{route('users.destroy',$user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="abc()" type="submit" class="edit-button">Delete</button>
                </form>
        
            </td>
        </tr>
        @endforeach
        
    </table>
    <script>
        function abc(){
            alert("Data is deleted");
        }
    </script>
</body>
</html>
