<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
        }
        ul {
            list-style: none;
        }
        body {
            color: #fff;
            font-family: Helvetica,sans-serif;
            font-size: 16px;
            width: 100vw;
            height: 100vh;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(82,82,235,1) 1%, rgba(0,231,249,1) 64%, rgba(0,212,255,1) 100%);
        }
  
         /* Layout */
        form {
            margin: 20px auto;
            text-align: center;
            width: 800px;
            nav-index: auto;
        }

        form button {
            background-color: #3b3b3a;
            border: 1px solid #70cbce;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            height: 40px;
            min-height: 40px;
            padding: 0 30px;
            transition: 0.3s all;
        }
        form button:hover {
            background: rgb(232,210,30);
            background: linear-gradient(90deg, rgba(232,210,30,1) 0%, rgba(213,52,174,1) 35%, rgba(0,212,255,1) 100%);
            border: 1px solid #de4a1e;
        }

        form input[type=text] {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 4px;
            font-size: 17px;
            padding: 10px 10px;
            width: 360px;
            border-color: bisque;
        }
    </style>    
</head>
<body>
    <form action="/auth/register" method = "post">
    @csrf
        <input type="text" name = "username" placeholder = "Username"><br><br>
    {{-- @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror --}}
        <input type="text" name = "password" placeholder = "Password"><br><br>
        <input type="text" name = "name" placeholder = "Name"><br><br>
        <input type="text" name = "email" placeholder= "Email"><br><br>
        <input type="text" name = "phone_number" placeholder= "Phone number"><br><br>
        <input type="text" name = "role" placeholder = "Role"> <br><br>
        <p style="color:silver">{{Request::get('error')}}</p>
        <button type = "submit">Register</button>
    </form>

    {{-- <form action="/auth/login" method="GET">
    @csrf
        <button type="submit">Login</button>
    </form>
     --}}
</body>
</html>