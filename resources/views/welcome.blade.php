<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <title>Taldor System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="{{ URL::asset('css\myCss.css') }}" />
    </head>
    <body>

            <div id='first' class="content" >
                <div class="title m-b-md">
                    Taldor-Systems - Made by BPO
                    
                </div> 
                     <div class="container">
                     Enter your ID Number: <input type="text" name="id" >
                                &nbsp;
                                <br>
                                <br>

                                <button type="button" class="btn btn-primary" name="submitbutton">Submit</button>
                                
                    </div>
                    
            <span></span>
            </div>
            <div id='detailss' class="container" hidden>
                    <table id='userTable' style='border-collapse: collapse;'>
                        <thead>
                            <tr>
                            <th><h1>ID</h1></th>
                            
                            <th><h1>Name</h1></th>
                            
                            <th><h1>Last Name</h1></th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        

                        </tbody>
                        </table>

                        <div id="webcam"></div>
                        <div id="canvas"></div>
                        <br>
                        <a href="javascript:webcam.capture();void(0);">Take A Picture</a>
                        
            </div>
        </div>
    </body>
</html>

<script type="text/javascript" src="{{ URL::to('js/sendinfoandrecive.js') }}"></script>

<script type="text/javascript" src="{{ URL::to('js/jquery.webcam.min.js') }}"></script>
