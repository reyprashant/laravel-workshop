
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
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
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
    </style>
</head>
<body>
    <form action="{{route('users.store')}}" method="post" id="create_user_form">
        @csrf
        <h1>Create New User</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Your name" ><br>
        @error('name')
        <div style="color:red">{{$message}}</div>
        @enderror
        
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Your Email"><br>
        @error('email')
        <div style="color:red">{{$message}}</div>
        @enderror
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" ><br>
        @error('password')
        <div style="color:red">{{$message}}</div>
        @enderror
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="confirm_password" placeholder="Confirm Password" ><br>
        @error('password_confirmation')
        <div style="color:red">{{$message}}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
    <!-- <script>
        document.getElementById('create_user_form').addEventListener('submit',(event)=>{
            let password =document.getElementById('password').value
            let confirm_password =document.getElementById('confirm_password').value
            if(password != confirm_password){
                event.preventDefault()
                alert("Password and Confrim Password doesnot match")
            }
        })
    </script> -->
</body>
</html>
