<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Baby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>

       body{
            background-color: #f1f3f4;
            font-family : sans-serif;
       }

       .topnavbar{
            height: 57px;
            top:0;
            position: sticky;
            background : #fff;
            margin-bottom: 20px;
            border-bottom: 3px solid orange;
            z-index: 2;
       }

       .logo{
        height: 40px;
        width: 60px;
        margin: 5px 10px;
       }

       .barlogo, .closelogo{
        font-size:30px;
        color:orange;
        height: 40px;
        margin: 5px 10px;
        display:none;
       }

       .formcontrol{
            width:80%;
            margin-top: 9px;
            margin-left: 30px;
            border: 1px solid orange;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            box-shadow: none;
       }

       .inputgrouptext{
            background: orange;
            border: 1px solid orange;
            margin-top: 8.5px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            cursor: pointer;

       }

       .searchbox{
            display: inline-flex;
            width:60%;
       }

       .search{
            height: 20px;
            width: 30px; 
            margin-top: 10px;
       }

       .menubar{
            width: 40%;
            height: 57px;
            float: right;
       }

       .menubar ul{
            display: inline-flex;
            float: right;
            border:solid red;
       }

       .menubar ul li{
            border-left: 1px solid #fff;
            list-style-type: none;
            padding: 15px 35px;
            text-align:center;
            background-color: orange;
            cursor:pointer;
            border:solid blue;
       }

       .menubar ul li a{
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            text-decoration:none;
       }

       .cart{
            height: 20px;
            width: 30px; 
            margin-right: 5px;
       }

       @media only screen and (max-width:900px){

            .topnavbar{
                height:118px;
                border-bottom:0;
            }
            .searchbox{
                width:100%;
            }
            .menubar{
                width:100%;
            }
            .menubar ul{
                margin:10px 0;
                width:100%;
            }
            .menubar ul li{
                height:57px;
                width:100%;
            }
       }

       .angle{
            height:20px;
            width: 20px;
            float:right;
       }

       .sidemenu{
            height: 79%;
            width: 15%; 
            font-size: 14px; 
            float: left; 
            z-index: 2; 
            background-color: #ddd; 
       }

       .sidemenu ul{
            margin-left:10px;
       }

       .sidemenu ul li{
        list-style-type: none ;
        font-weight: bold;
        margin-top: 10px;
        cursor: pointer;
       }

       .sidemenu ul li:hover{
            color: orange;
       }

       .sidemenu ul li ul{
        display:none;
        z-index: 10;
        top: 77px;
       }

       .sidemenu ul li:hover ul{
            display: block;
            height:400px;
            margin-left:12%;
            padding:0 100px 10px 10px;
            position: fixed;
            background: #ececec;
            box-shadow: 1px 1px 4px 1px  rgba(0,0,0,0.5);
       }

       #menubtn{
            display: none;
        }

       @media only screen and (max-width:900px){
        .sidemenu{
            width: 34%;
            z-index: 20;
            top: 133px;
            position: fixed;
            font-size: 12px;
            display: none;

        }

        .sidemenu ul li ul{
            top: 133px;
        }

        .sidemenu ul li:hover ul{
            margin-left:25%;
        }

        #menubtn{
            display: block;
        }

       }

       /* slidercss----------------------------------- */

       .slider{
            width:85%;
            margin-left:15%;
            padding:0 10px;
            
            
       }

       .carousel{
            box-shadow: 1px 1px 4px 1pxrgba(0,0,0,0.5);
       }

       @media only screen and (max-width:900px){

            .slider{
                width: 100%;
                margin-left:0;
            }

            /* catogeries */
       }

       .featuredcatogeries{
          margin: 50px 0;
       }

     .featuredcatogeries img{
          width:100%;
          padding: 20px 0;
          transition:1s;
          cursor:pointer;
     }

     .featuredcatogeries img:hover{
          transform:scale(1.1);
     }

     /* onsale */

     .titlebox{
          background:orange;
          color:#fff;
          width:180px;
          padding:4px 10px;
          height: 40px;
          margin-bottom: 30px;
          display:flex;
     }

     .titlebox h2{
          font-size: 24px;
     }

     .titlebox::after{
          content:'';
          border-top:40px solid orange;
          border-right: 50px solid transparent;
          position: absolute;
          display: flex;
          margin-top: -4px;
          margin-left: 170px;
     }

     /* product top */

     .producttop{
          position:relative;
     }

     .topimg{
          width:100%;
     }

     .overlayright{
          display:block;
          opacity: 0;
          position: absolute;
          top: 10%;
          margin-left:0;
          width: 70px;
     }

     .overlayright img{
          cursor:pointer;
          background-color:#fff;
          color: #000;
          height:35px;
          width:35px;
          font-size:20px;
          padding:7px;
          margin-top:5%;
          margin-bottom:5%;
     }

     .overlayright .btn-secondary{
          background:none;
          border:none;
          box-shadow:none;

     }

     .producttop:hover .overlayright{
          opacity: 1;
          margin-left:5%;
          transition:0.5s;
     }

     .productbottom h3{
          font-size: 20px;
          font-weight: bold;
     }

     .productbottom h5{
          font-size:15px;
          padding-bottom:10px;
     }

     .newproducts{
          margin: 50px 0;
          
     }

     .websitefeatures img{
          width:50px;
          height:50px;
     }

     .featuretext{
          margin-top: 10px;
          float:right;
          width: 80%;
          padding-left: 20px;
     }
     .featurebox{
          padding-top:20px;
     }

     /* footer */

     .footer{
          margin-top: 50px;
          background: #000;
          color: #fff;
     }

     .footer h1{
          font-size:15px;
          margin: 25px 0;
     }

     .footer p{
          font-size:12px;
     }

     .copyright{
          margin-bottom: -80px;
          text_align:center;
          font-size:15px;
          padding-bottom:20px;
     }

     .footer hr{
          margin-top: 10px;
          background-color: #ccc; 
     }

    </style>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>