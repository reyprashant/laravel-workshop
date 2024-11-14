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
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            justify-content: center;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
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

        .create-link {
            display: inline-block;
            text-decoration: none;
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }

        .create-link:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <table border="1px">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @forelse ($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="users/{{$user->id}}/edit">
                    <button type="button">Edit</button>
                </a><br>
                <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="abc()" type="submit" class="edit-button">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center">No data found</td>
        </tr>
        @endforelse
    </table>

    <a href="{{route('users.create')}}" class="create-link">Create New User</a>

    <script>
        function abc() {
            alert("Data is deleted");
        }
    </script>
</body>
</html>
