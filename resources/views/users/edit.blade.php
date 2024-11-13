<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center"center">Edit your User</h1>
    <form action="">
        Name:<input type="text" placeholder="Your name"><br>
        Email:<input type="text" placeholder="Your Email"><br>
        Password<input type="password" placeholder="Password"><br>
        Confirm Password<input type="password" placeholder="Confirm Password"><br>
        <input type="submit" name="Update">;
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Form</title>
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

        form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #337ab7;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #286090;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
    </style>
</head>
<body>
    <form action="">
        <h1>Edit Your User</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Your name" required><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Your Email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password" required><br>
        
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" placeholder="Confirm Password" required><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>