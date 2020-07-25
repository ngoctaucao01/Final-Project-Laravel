<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelFinalProjectManagementFoods</title>
</head>
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
    color: #333;
    font-family: Helvetica,sans-serif;
    font-size: 16px;
    width: 100vw;
    height: 100vh;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(82,82,235,1) 1%, rgba(0,231,249,1) 64%, rgba(0,212,255,1) 100%);
  }
  /* Layout */
    .form{
    margin: 20px auto;
    text-align: center;
    width: 800px;
    color: #333;
    }
    .container .row .table-table-bordered thead tr th{
        color:#fff;
    }
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

  .container .row #bordered tbody tr td{
    color: #fff;
  }
  .container .row #bordered tbody tr th{
    color: #fff;
  }

  .container .row #bordered thead tr th {
    color: beige;
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
        margin-left:215px;
        border-color: bisque;
    }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/login.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <form class="form" method="post" action="index" id="form">
    @csrf
    <div class="div1">
        <p>    
            <input type="text" name="name" placeholder="Name" value="" id="name"><br> <br>
        </p>
        <p>
            <input type="file" name="image" placeholder="Image" value="" id="image"><br> <br>
        </p>
        <p>
            <input type="text" name="description" placeholder="Description" value="" id="description"><br><br>
        </p>
    </div>
    <div class="div2">
        <p>
            <input type="text" name="quantity" placeholder="Quantity" value="" id="quantity"><br><br>
        </p>
        <p>
            <input type="text" name="oldprice" placeholder="Old price" value="" id="oldprice"><br><br>
        </p>
        <p>
            <input type="text" name="newprice" placeholder="New price" value="" id="newprice"><br><br>
        </p>
    </div>
    
    <p>
        <button type="submit">Submit</button>
    </p>
    </form> <br> <br> <br>

    <center>
        <h3 style="color: #fff"> FOOD INFORMATION </h3>
    </center>
    <div class="container">
        <div class ="row">
            <table  class="table table-bordered" class="w3-table-all w3-card-4" id="bordered">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name </th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Old price</th>
                        <th scope="col">New price</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                @foreach($products as $product)
                <tbody>
                    <tr>
                        <th scope="row"> {{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->oldprice}}</td>
                        <td>{{$product->newprice}}</td>
                         
                         <td>
                            <form action='{{"/admin/foods/index".$product->id}}' method ="POST">
                            @csrf
                            @method("DELETE")
                                <button type="submit" name ="delete" style="margin-left: 30px; background: silver; font-size: 17px;"> Delete </button>      
                            </form>
                        </td>

                        <td>
                            <form action="/admin/foods/edit/{{$product->id}}" method ="GET">
                            @csrf
                                <button type="submit" name ="update" style="margin-left: 30px; background: silver; font-size: 17px;"> Update </button>      
                            </form>
                        </td>  
                    </tr>
                </tbody> 
                @endforeach  
            </table>
        </div>
    </div>
</body>
</html>