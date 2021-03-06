<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit information of  food </title>
    
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
         .container{
            margin: 20px auto;
            text-align: center;
         }
        form {
            margin: 20px auto;
            text-align: center;
            margin-right: 300px;
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
            margin-right: 80px;
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

        form input[type=file] {
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(207,233,148,0.3477766106442577) 100%);
            border: 1px solid #eee;
            border-radius: 4px;
            font-size: 17px;
            width: 365px;
            padding: 10px 10px;
            margin-left:10  0px;
            border-color: bisque;
        }
        .container form table tr td button{
            position:fixed; 
            right: 650px;
            bottom: 380px;
        }
    </style>    

</head>
<body>
    <div class="container">
        <h1>Edit Food Information</h1>
        <form action="/admin/foods/{{$product->id}}" method="post">
            @csrf
            @method("PATCH")
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{$product->name}}"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" value="{{$product->image}}"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description" value="{{$product->description}}"></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="text" name="quantity" value="{{$product->quantity}}"></td>
                </tr>
                <tr>
                    <td>Old price</td>
                    <td><input type="text" name="oldprice" value="{{$product->oldprice}}"></td>
                </tr>
                <tr>
                    <td>New price</td>
                    <td><input type="text" name="newprice" value="{{$product->newprice}}"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>