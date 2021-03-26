<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
body{
   
}
.banner{
    background-size:cover;
    background-position: center ;
    background-repeat: no-repeat;
    height:100vh;
    background-attachment: fixed;
    z-index:-10;
    margin-top:0;
   
    
}
.pulse:hover{
    animation: animate 3s linear infinite;
    cursor: pointer;
}
@keyframes animate {
    0% {
        box-shadow: 0 0 0 0 rgb(224, 224, 224, 0.7), 0 0 0 0 rgb(224, 224, 224, 0.7)
    }

    40% {
        box-shadow: 0 0 0 50px rgb(255, 109, 74, 0), 0 0 0 0 rgb(224, 224, 224, 0.7)
    }

    80% {
        box-shadow: 0 0 0 50px rgb(255, 109, 74, 0), 0 0 0 30px rgb(255, 109, 74, 0)
    }

    100% {
        box-shadow: 0 0 0 0 rgb(255, 109, 74, 0), 0 0 0 30px rgb(255, 109, 74, 0)
    }
}
.carousel-caption h1{
    margin-top:-250px !important;
    color:#000;

}
.bordered{
    border-right:1px solid #cccccc;
}
.formz:hover{
    background:#fff;
}
.submitbtn{
    padding:20px 5px;

}
.forminputs label{
    color:#1b1b17;
    font-weight:300px;
    font-size:17px;
}
.contact-form{
    margin-bottom:55px;
}
.btnsubmit{
    background:#e9b000;
    border:none;
}
.btnsubmit:hover{
    background:transparent;
    color:#000;
    border:1px solid #000;
}
.forminputs{
    margin-top:20px;
    padding:2px 10px;

}
.navy-link:hover{
    color:#e9b000!important;
}
@media screen and (max-width: 960px){

    .whyus{
        height:700px !important;
    }
    .nextwhy{
        margin-top:0px !important;
        padding:20px !important;
    }
    .hrconsulting{
        height:170px;
        }

        .btnsubmit{
    width:100%;
        }
        .forminputs {
            width:100% !important;
        }

        .forminputs input{
            height:40px !important;
            width:100% !important;
        }

    .txt{
            width:300px !important;
        }

    }
}

</style>
<body>
    <div id="app">
      
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
