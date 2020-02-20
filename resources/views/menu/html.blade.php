

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

        <title>Double Moments</title>

        
       
        <style>
        h3{
            color:#ddff99;
            font-size:20px;
            font-family:Courier, monospace;
        }
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background:black;
            }


            .fa {
                padding: 20px;
                font-size: 30px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .down-center{
                
                text-align:center;
                down: 18px;

            }

            .content {
                text-align: left;
                
            }

            .title {
                font-family:American Typewriter, serif;
                color:#040c33;
                font-size: 40px;
            }

            .links > a {
                color: #808080;
                padding: 0 10px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h3{
                text-align:right;
                color:#808080;
            }
            .fa:hover {
    opacity: 0.7;
}

      
    
        </style>
    </head>
    <body>
    @yield('content')
    </body>
</html>