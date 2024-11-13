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
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Prashant Adhikari</td>
            <td>subash96240@gmail.com</td>
            <td>
                <a href="/show.blade.php">
                    <button type="button">View</button>
                </a>
                <a href="/edit.blade.php">
                    <button type="button" class="edit-button">Edit</button>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>
