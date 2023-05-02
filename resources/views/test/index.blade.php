<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body class="body">
    
        <div class="container">

            <form >
                <div class="title">
                    <h1>REGISTER</h1>
                </div>
                <div >
                    <label>Name</label>
                    <br/>
                    <input type="text" name="name" placeholder="name"></input>
                    <br/>
                </div>
                <div >
                    <label>Login</label>
                    <br/>
                    <input type="text" name="login" placeholder="login"></input>
                    <br/>
                </div>
                <div>
                    <label>Password</label>
                    <br/>
                    <input type="password" name="password" placeholder="password"></input>
                    <br/>
                </div>
                <div>
                    <br/>
                    <a class="btn btn-secondary" href="/">Register</a>
                    <a class="btn btn-secondary" href="/">Back</a>
                    <br/>
                </div>

            </form>
            
            
        </div>   
    
    </body>
</html>
