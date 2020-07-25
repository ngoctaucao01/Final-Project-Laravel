<!DOCTYPE html>
<html>
<head>
    <title>Food Home</title>
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
        background: rgb(249,241,196);
        background: radial-gradient(circle, rgba(249,241,196,1) 0%, rgba(163,232,237,0.3477766106442577) 100%);
    }

    /*layout*/
    .grid-container {
        display: grid;
        grid-gap: 50px;
        grid-template-columns: auto auto auto;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(207,233,148,0.3477766106442577) 100%);
        padding: 10px;
    }

    .grid-item {
        background: rgb(131,64,28);
        background: radial-gradient(circle, rgba(131,64,28,1) 0%, rgba(186,118,28,0.3477766106442577) 100%);
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 20px;
        font-size: 30px;
        height: 300px;
        width: 300px;
        text-align: center;
    }

    form {
            margin-top: 60px;
        }
        
    form button {
        background-color: #9fbb19;
        border: 1px solid #70cbce;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        margin-bottom: 20px;
        height: 40px;
        min-height: 40px;
        padding: 0 30px;
        transition: 0.3s all;
    }
        
    form button:hover {
        background: rgb(228, 195, 2);
        background: radial-gradient(circle, rgba(228, 195, 2, 1) 0%, rgba(163, 232, 237, 0.3477766106442577) 100%);
        border: 1px solid #de4a1e;
    }
        
    form .line-through {
        text-decoration: line-through;
    }
     

    </style>
</head>
<body>
    <center>
        <h3 style="color: #fff"> FOOD HOME </h3>
    </center>
    <div class="container">
        <div class="grid-container">
             @foreach($products as $product)
                <div class="grid-item">
                    <form action="">
                        <h1>{{$product->name}}</h1>
                        <p>{{$product->newprice}}</p>
                        <p class="line-through">{{$product->oldprice}}</p>
                        
                            <button>Add</button>
            
                       
                            <button>View</button>
                       
                    </form>
                    {{-- <tbody>
                        <tr>
                            <th scope="row"> {{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->image}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->oldprice}}</td> 
                            <td>{{$product->newprice}}</td> 
                            <td>
                            {{-- <form action="/admin/foods/edit/{{$cart->id}}" method ="GET">
                            @csrf
                                <button type="submit" name ="update" style="margin-left: 30px; background: silver; font-size: 17px;"> Update </button>      
                            </form> 
                        </td>  
                        </tr>
                    </tbody> --}}
                </div>
            @endforeach
        </div>  
    </div>
</body>
</html>





