<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grade Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}" >
        <link rel="icon"  type = "image/x-icon" href = " https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
    
    
    
    function togglePassword() {
    var togglePassword = document.querySelector('#togglePassword');
    var password = document.querySelector('#pwd');
    var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
}
        function langChan(e){
         n  = window.location.href;
          console.log(window.location.href = e)

        }
         function getMSG(){
    $.ajax({
        type:'POST',
        url:'getmsg',
        data:'_token = <?php echo csrf_token()?>',
        success:function(data){
            var s = data.s;
            alert(s);
        }

    });
}
      
</script>
        <style >
            body{
                background: url('{{ asset('image/rsz_w81.jpg') }}');
            }
        </style>
    </head>
    <body>

    <div class="Welcome">
       <div class="lang">
            <select style="background-color: transparent;" onchange="langChan(this.value)">
                <option>{{__('lang.l')}}</option>
                <option value="{{ url('/kz/') }}">KZ</option>
                <option value="{{ url('/ru/') }}">RU</option>
                <option value="{{ url('/eng/') }}">ENG</option>
            </select>  
        </div>
        
           <!--  <p style="color: grey">ABOUT AS</p> --><hr>
        <div style="text-align: center; width:100%; color: #fff;padding: 5px;">
            <h2>Grades Calculated</h2>

        </div>
        <hr> <div style="text-align: center;"><h4>{{__('lang.welcome')}}</h4></div>
        <div class="about_us">
            <div style="text-align: center;"> 

                <p>{{__('lang.question')}}</p>
                <h6 style="color: #666666;">{{__('lang.goal')}}</h6>
            </div>
            <div>
                <img src="{{URL::asset('/image/GGc1.png')}}" height="80%" width="90%"  onclick="getMSG()">
            </div>
        </div> 
    
        <div style="margin-top: 10%; text-align: center;" class="typewriter">
            <h6>{{__('lang.motivation')}}</h6><br>
            
        </div>
        <div id="sign_log">

            <button id = "sign_up" type="button" class="btn" onclick="SingnUpOn()">{{__('lang.sign')}}</button>
            <button id="log_in" type="button"  class="btn" onclick="LogIn()">{{__('lang.login')}}</button>
        </div>
           
    </div>

    </body>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grade Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}" >
        <link rel="icon"  type = "image/x-icon" href = " https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
      n  = window.location.href;
    function SingnUpOn(){

      m = n.substring(0, n.lastIndexOf('/'))+"/signup"+n.substring(n.lastIndexOf('/'));
       var str = n.substring(n.lastIndexOf('/'));
        var nl = str.length;
      
        if (nl == 1) {
           window.location = m + "eng";
        }else{
           window.location = m;
        }
       
       /*window.location = n+"/welcome/signup";*/
       /*  $("#overlay1").show();*/
    }
    function LogIn(){
       /*n  = window.location.href;*/
       m = n.substring(0, n.lastIndexOf('/'))+"/welcome/login"+n.substring(n.lastIndexOf('/'));
       
         var str = n.substring(n.lastIndexOf('/'));
        var nl = str.length;
        
        if (nl == 1) {
           window.location = m + "eng";
        }else{
           window.location = m;
        }
        /*  window.location = n+"/welcome/login";*/

    }
    
    
    function togglePassword() {
    var togglePassword = document.querySelector('#togglePassword');
    var password = document.querySelector('#pwd');
    var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
}
        function langChan(e){
         n  = window.location.href;
          console.log(window.location.href = e)

        }
         function getMSG(){
    $.ajax({
        type:'POST',
        url:'getmsg',
        data:'_token = <?php echo csrf_token()?>',
        success:function(data){
            var s = data.s;
            alert(s);
        }

    });
}
      
</script>
        <style >
            body{
                background: url('{{ asset('image/rsz_w81.jpg') }}');
            }
        </style>
    </head>
    <body>

    <div class="Welcome">
       <div class="lang">
            <select style="background-color: transparent;" onchange="langChan(this.value)">
                <option>{{__('lang.l')}}</option>
                <option value="{{ url('/kz/') }}">KZ</option>
                <option value="{{ url('/ru/') }}">RU</option>
                <option value="{{ url('/eng/') }}">ENG</option>
            </select>  
        </div>
        
           <!--  <p style="color: grey">ABOUT AS</p> --><hr>
        <div style="text-align: center; width:100%; color: #fff;padding: 5px;">
            <h2>Grades Calculated</h2>

        </div>
        <hr> <div style="text-align: center;"><h4>{{__('lang.welcome')}}</h4></div>
        <div class="about_us">
            <div style="text-align: center;"> 

                <p>{{__('lang.question')}}</p>
                <h6 style="color: #666666;">{{__('lang.goal')}}</h6>
            </div>
            <div>
                <img src="{{URL::asset('/image/GGc1.png')}}" height="80%" width="90%"  onclick="getMSG()">
            </div>
        </div> 
    
        <div style="margin-top: 10%; text-align: center;" class="typewriter">
            <h6>{{__('lang.motivation')}}</h6><br>
            
        </div>
        <div id="sign_log">

            <a href="{{ route('signup') }}"><button id = "sign_up" type="button" class="btn">{{__('lang.sign')}}</button></a>  
            
            <button id="log_in" type="button"  class="btn" onclick="LogIn()">{{__('lang.login')}}</button>
        </div>
           
    </div>

    </body>
</html>