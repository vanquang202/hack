<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quang</title> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            font-family: Arial, Helvetica, sans-serif;
        }
        html,
        body{
            overflow: hidden;
            width: 100%;
            height: 100%;
            background-image: url('https://i0.wp.com/www.printmag.com/wp-content/uploads/2021/02/4cbe8d_f1ed2800a49649848102c68fc5a66e53mv2.gif?fit=476%2C280&ssl=1');
            background-size:cover;
            background-repeat: no-repeat;
        }
        .bb{
            margin-top: 100px;
            width: 1000px;
            height: 100%;
            margin:100px  auto;
        }
        h2{
            color: #fff;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgb(0 0 0 / 10%), 0 0 5px rgb(0 0 0 / 10%), 0 1px 3px rgb(0 0 0 / 30%), 0 3px 5px rgb(0 0 0 / 20%), 0 5px 10px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 20%), 0 20px 20px rgb(0 0 0 / 15%);
        }
        .div{ 
            background: rgba(0,0,0 , 0.7);
            color:white;
            padding: 100px 40px;
            height:500px;
            width:1000px;
            text-align: center;
            display: block;
            font-size: 150px;
            margin:auto;  
        }
        @media  (max-width: 768px){
            .bb{  
                margin-top: 50%; 
                height: 100%;
                width: 100%;
              }
            .div{ 
            padding:0;
            background: rgba(0,0,0 , 0.7);
            height:150px; width:100%;
            color:white; 
            text-align: center;
            display: block;
            font-size: 52px;
            margin:auto;  
        }

        }
        @media  (max-width: 348px){
            .bb{  
                margin-top: 50%; 
                height: 100%;
                width: 100%;
              }
            .div{ 
            padding:0;
            background: rgba(0,0,0 , 0.7);
            height:150px; width:100%;
            color:white; 
            text-align: center;
            display: block;
            font-size: 42px;
            margin:auto;  
        }
        
        }
    </style>
</head>
<body> 
    <div class="bb">
    <div class="div"></div>
    </div>
<script>
        $(document).ready(function(e) {

            function fetch_data() { 
                $.ajax({
                    url: "data.php",
                    method: "POST", 
                    success: function(data) {  
                        $('.div').html(data)
                        fetch_data();
                    },
                });
            }
            fetch_data();
        });
    </script>
</body>

</html>
