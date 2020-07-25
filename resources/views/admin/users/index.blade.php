<!DOCTYPE html>
<html>
<head>
    <title>Manager user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/login.css"> 
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

    /*layout*/
    form button {
    background-color: #9fbb19;
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
    

    </style>
</head>
<body>
    {{-- <form action="/admin/dashboard">
        <button type = "submit">Back</button>
    </form> --}}
    {{-- <div>
        @include('/partials/danhmuc') 
    </div> --}}
    <center>
        <h3 style="color:#fff">USERS INFORMATION</h3>
    </center>
    <div class="container">
        <div class ="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Username </th>
                        <th scope="col">Password</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Role</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td >{{$user->password}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->role}}</td>

                        <td>
                            <form action='{{"/admin/users/index/".$user->id}}' method ="POST">
                            @csrf
                            @method("DELETE")
                                <button type="submit" name ="delete" style="margin-left: 30px; background: silver; font-size: 17px;"> Delete </button>      
                            </form>
                        </td>

                        <td> 
                        <form action="/admin/users/edit/{{$user->id}}" method ="GET">
                            @csrf
                                <button type="submit" name ="update" style="margin-left: 30px; background: silver; font-size: 17px;"> Update </button>      
                            </form>
                        </td>
                    </tr>
                    @endforeach 
                </tbody> 
                
            </table>
        </div>
    </div>
</body>
</html>





