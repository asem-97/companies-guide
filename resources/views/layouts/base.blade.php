<!DOCTYPE html>
<html lang="en" >

     <head>
          <title>شركات</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <!-- New -->
          <link href={{asset("fontawesome-free-5.15.3-web/css/all.css")}} rel="stylesheet">
          <script defer src={{asset("fontawesome-free-5.15.3-web/js/all.js")}}></script>
          <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
          <!-- delete svg circle red -->
          <!-- for House Icon -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
          <style>
               @font-face {font-family: cairo, Helvetica, sans-serif;
                    /* font-family: AliFont;
                    src: url(sansation_light.woff); */
               }
@media (min-width: 768px){
.navbar-collapse.collapse {
    display: block!important;
    padding-bottom: 67px;
    overflow-y: auto!important;
}}
               body {
                font-size: 15px;
                    /*11111111111111111*/
                    font-family: AliFont;
                    /* font-family: "Lato", sans-serif; */
                    scroll-behavior: smooth;
                    /* Above tosmoothly Transition */
               }
               .container-fluid {
                    padding-right: 216px;
                    padding-left: 15px;
                    padding-top: 63px;
                }
               .navbar-fixed-bottom .navbar-collapse,
               .navbar-fixed-top .navbar-collapse {
                    max-height: 110%;
                    height: 110%!important;
                    background-color: #166cb6;
                    border-left: 1px solid #185990;
               }

               .navbar-toggle {
                    display: block;
                    position: absolute;
                    right: 0;
               }
               /* ali */
                    .navbar-inverse {
                display: inline-flex;
                padding-right: 200px;
                background-color: #166cb6;
                height: 49px;
                border: 0;}

            .navbar-fixed-top {
            top: 0px;
        }
  /* ali */
               .sidenav {
                    height: 100%;
                    width: 200px;
                    position: fixed;
                    top: -1px;
                    right: 0px;
                    background-color: #c7d1da;
               }
               .navbar-inverse .navbar-brand {
                    color: #337ab7;
                    margin-left: 17px;
                }
                h2.head-navbar{
                    color: #fff;
                    margin-top: 0;
                    background-color: #166cb6;
                    text-align: center;
                    font-size:29px;
                    font-weight: bold;
                    padding: 10px 0px;
                        }


               /*    ______________----______________Some media queries for responsiveness------------------------------------------------------------------------------------------ */
 #customers {
  margin-top: 10px;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
 text-align: center;
}

#customers tr:nth-child(even),#customers tr:nth-child(odd){background-color: #f2f2f2;}

/* #customers tr:hover {background-color: #fff;} */

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #8b939a;
  color: white;
}

h1{
    color: #337ab7;
    text-align: right;
    margin-top: 3px;
    margin-bottom: 9px;
    font-size: 40px;
    font-weight: bold;
}

               @media (max-width: 768px) {
                    body {
                         padding: 40px 2px 0px 2px;
                    }
                    .container-fluid {
                    padding-right: 0px;
                    padding-left: 15px;
                    padding-top: 63px;
                }
                    .sidenav {
                         /* visibility: hidden; */
                         display: contents;
                         right: -200px;
                         /*AboVe To Hide The DashBord In Small Screen */
                         z-index: 1;
                         position: fixed;
                    }

                    button.navbar-toggle .icon-bar {
                         position: relative;
                         background-color: white;
                         animation: ali4 1s ease-in 0s infinite alternate forwards running;
                         border: 0.5px solid #F00;
                    }
                    @keyframes ali4 {
                         100% {
                              background-color: white;
                         }
                    }
               }




  *,a:hover,a:focus{
      text-decoration: none;
            list-style: none;
        }

        ul,
        li,
        nav,
        a {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            font-family: helvetica;
        }
           .main-menu {
            border-top: 1px solid #185990;
            list-style: none;
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
             margin-top: -11px;
            margin-bottom: 150px;
        }
       .contain-submenu:not(.contain-submenu li.active){
            /* box-shadow: -2px -2px -2px -2px #444, -3px -2px 0 0 #444; */
                position: relative;
                height: 50px;
                border-right: 2px solid #8b939a;
        }
        .main-menu>li.active,.contain-submenu li.active{
             border-right:2px solid rgb(8 54 95);
            }
        /* .main-menu *{ box-shadow: 0 0 0 0 rgb(216, 61, 61), -3px 0px 0 0 rgb(176, 90, 187);} */


        .main-menu>li>a>i {
            color: #ffffff;
            width: 2em;
            height: 100%;
            line-height: 50px;
            text-align: left;
        }

        .main-menu>li:first-child,
        .submenu-1>li:first-child,
        .submenu-2>li:first-child,
        .submenu-3>li:first-child {
            box-shadow: none;
        }


        .main-menu li a,.contain-submenu a{
                            overflow: hidden;
                            text-align: right;
                            color: #fff;
                            background-color: #166cb6;
                            border-left: 1px solid #185990;
                            line-height: 15px;
                            display: block;
                            height: 50px;
                            font-size: 13px;
                            padding: 18px 9px 15px 23px;
                             }
        .main-menu>li:hover>a,
        .contain-submenu li:hover>a
        {
            text-decoration: none;
            background-color: #8b939a;
            color: #000;

        }
 /* ali */
 .navbar-toggle {
    display: block;
    position: absolute;
    right: 0;
    top: -60px;
}
        .contain-submenu>a::before {
            content:"\f060";
            float: left;
            margin-top: 1px;
            margin-left: -19px;
            font-family: 'FontAwesome';
        }  /* ali */
        /* revealing submenus */
 .submenu-1,
        .submenu-2,
        .submenu-3 {
            position: absolute;
            white-space: nowrap;
            top: -9999px;
        }
        .main-menu>li:hover .submenu-1,
        .submenu-1>li:hover .submenu-2,
        .submenu-2>li:hover .submenu-3 {
            top: 0px;
            right: 100%;
            transition: right .5s cubic-bezier(0.380, 0.820, .790, .930);
            position: absolute;z-index: 999999999999999999999999999;
        }


        /* Author */

.ancor::before{

           }
.addBtn::before{
            content:"\f067";
            float: left;
            margin-top: 1px;
            margin-right: -22px;
            font-family: 'FontAwesome';
            }



   label{
      width: 100%;
      text-align: right;
    }
    .form-control{
        border: 2px solid #b6d7f3;
        background-color: #fff;
    }

.form-control-edit {
    display: block;
    width: 30%;
    height: 28px;
    margin-bottom: -18px;
    padding: 4px 10px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border-radius: 4px;
    border: 2px solid #b6d7f3;
    background-color: #fff;
}
.addBtn{
        display: block;
    width: 30%;
    direction: rtl;
    top: -70px;
    position: relative;
}
.list-group {
     margin-left: 6px;
    margin-bottom: -2px;
    margin-top: 4px;
}
.list-group-item {
    margin-bottom: -1px;
    padding-left: 150px;
    position: relative;
    display: block;
    background-color: #fff;
    border-left: 4px solid #4494dc;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 30px;
}

.first{border:0}
.dd-handle {
    line-height: 2;
    float: left;
    margin-left: 5px;
    font-size: 22px;
    color: #4888be;
}
ol{margin-left: -160px;}
ol li{text-align: right;}
.dd-handle{margin-bottom: 2px;}

/* popap-- */
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
  width: 50%;
}

/* Add a color to the delete button */
.deletebtn {
 width: 50%;
 float: right;
 background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #25252ac2;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    border: 1px solid #ff707082;
    width: 70%;
    padding: 3%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.pop{text-align: center;}
.close {
  opacity:1;
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
  .pagebaseBtn{
     width: 100%;
    }

}


/* Asem Edition */

.form-group{
     direction: rtl;
}
/*Begin Company */
   .company-info{
       color: #626567;
    direction: ltr;
    text-align: right;
    font-size: 30px;
    }

    .company-info img {
      margin-right: -215px;
    margin-top: -48px;
    margin-bottom: 26px;
    width: 164px;
    border: 2px solid #c1b4b4e6;
        }
.form-group img{
      margin-right: 0;
    margin-top: 38px;
    margin-bottom: 26px;
    width: 164px;
    border: 2px solid #c1b4b4e6;
        }
.btn-default {
    border: 0;border-radius: 8px;
    font-weight: bold;
    font-size: 24px;
    margin-top: 20px;
    color: #5c5d5e;
    padding: 13px;
    width: 37.1%;
    background-color: #82a9dd;
    border-color: #ccc;
}
.btn-default:hover {color: #166cb6;}

.company-info:first-of-type{padding-top: 15px;}

span.title{      color: #166cb6;
    font-size: 33px;}
span.result{     color: #a19898;
font-size: 29px;}
li>span.result{ margin-right: 30px;
    background-color: #a198989e;
    color: #0e4e84;
    border-radius: 8px;
    padding: 5px 10px;
    margin-bottom: 5px;}



    ul.list-phone li{margin-bottom: 5px;}
ul.list-phone li:last-child{margin-bottom: 27px;}






.pagebaseBtn,.controlDepartment,.controlUser,.pagebaseBtnlogOut{
     background-color: #166cb6;
     width: 244px;
    line-height: 37px;
    margin-top: 0px;
    border-radius:0px;
    border: 0;
    }

    .pagebaseBtnlogOut::before{
            content:"\f08b";
            margin-right: 10px;
            font-size: 18px;
            font-family: 'FontAwesome';
            }
    a.pagebaseBtn::before{
                content:"\f015";
                margin-top: 1px;
                margin-right: 10px;
                font-size: 18px;
                font-family: 'FontAwesome';
    }
    a.controlDepartment::before{
             content:"\f085";
            margin-top: 1px;
            margin-right: 10px;
            font-size: 18px;
            font-family: 'FontAwesome';
            }
a.controlUser::before{
        content:"\f234";
         margin-top: 1px;
         margin-right: 10px;
        font-size: 18px;
        font-family: 'FontAwesome';
            }
            hr {
               border: .1px solid #c7d1da;
                margin-bottom: 5px;
                margin-top: 5px;
                }
                .btnsearch{
                        background-color: #8b939a;
                        height: 53px;
                        width: 10%;
                        z-index: 4;
                        left: 6px;
                        top: -66px;
                        position: absolute;
                }
                .btnsearch:hover{
                    background-color: #166cb6;
                    color:#8b939a;
                    }
/*End Company */
.nav-pills li{
background-color: rgba(46, 46, 46, 0.116);
border-radius:4px;
}
.nav-pills>li>a{color:#c1c1c1;}
.nav-pills>li.active>a,
.nav-pills>li.active>a:focus,
 .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #5bc0de;
}
     </style>
     </head>

     <body>
          <nav class="navbar navbar-inverse navbar-fixed-top">
                 <a class="pagebaseBtn btn btn-info" href="{{route('index')}}">الرئيسية</a>
                 <a class="controlDepartment btn btn-info" href="{{route('categories.index')}}">التحكم بالأقسام  </a>
                 <a class="controlUser btn btn-info" href="{{route('users.index')}}">التحكم بالمستخدمين  </a>
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>

          <div id="id01" class="modal">
                         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                         <form class="modal-content" action="/action_page.php">
                         <div class="pop">
                              <h1 style=" color: #000000;
                              text-align: center;
                              margin-top: 3px;
                              margin-bottom: 9px;
                              font-size: 45px;
                              font-weight: bold;"
                         >تسجيل الخروج</h1>
                              <p>هل أنت متأكد ؟</p>

                              <div class="clearfix">
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">إلغاء</button>
                              <button type="button" onclick="document.getElementById('id01').style.display='none';event.preventDefault(); document.getElementById('logout').submit();" class="deletebtn"  ><a href="{{route('logout')}}"></a> تأكيد </button>
                              </div>
                         </div>
                         </form>
                         </div>
                         <a class="pagebaseBtnlogOut btn btn-danger"  onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;">تسجيل خروج </a>
                         <form action="{{route('logout')}}" method="post" id="logout" style="display:none;">
                              @csrf
                         </form>
                    </div>
                    <div class="sidenav collapse  navbar-collapse" id="myNavbar">
                     <h2 class="head-navbar">الأقسام و الشركات</h2>


                              <ul class="main-menu">
                                   @foreach (App\Models\Category::with('childrenRecursive')->whereNull('parent_id')->get() as $category)
                                        @if ($category->children->count()>0)
                                             <li class="contain-submenu"><a href="#">{{$category->name}} </a>
                                                  @include('category-partial ',['children' => $category->children , 'x'=>1] )
                                             </li>
                                        @else
                                             <li class="active"><a href="{{route('companies.index',$category->id)}}">{{$category->name}}</a></li>
                                        @endif
                                   @endforeach
                              </ul>


                         {{-- <hr style="    margin-top: 0px;
                         margin-bottom: 0px;
                         border: 0;
                         border-top: 1px solid #141313;"> --}}









                         {{-- @foreach (App\Models\Category::with('childrenRecursive')->whereNull('parent_id')->get() as $category)
                              @if ($category->children->count()>0)
                                   <button href= "#" class="dropdown-btn btnList2">{{$category->name}}
                                        <i class="fa fa-plus-circle"></i>
                                   </button>
                                   @include('category-partial ',['children' => $category->children])

                              @else
                                   <a href= "{{route('companies.index',$category->id)}}" class="">{{$category->name}}</a>
                              @endif
                         @endforeach


                         <h3>صفحات</h3>
                         <hr>
                         <a href="{{route('categories.index')}}"><i class='fas fa-shield-alt' ></i>التحكم بالأقسام الأساسية </a>
                         <hr>
                         <a href="{{route('subcategories.index')}}"><i class='fas fa-shield-alt' ></i>التحكم بالأقسام الفرعية </a>
                         <hr>
                         <a href="{{route('users.index')}}"><i class='fas fa-shield-alt' ></i>التحكم بالمستخدمين  </a>
                         <hr> --}}
                    </div>

          </nav>


          {{-- content --}}


          @yield('content')

          {{-- end content --}}

   <script>
     //   var y=0;
        //console.log($(window).scrollTop());

        //$(document).ready(function(){
//.main-menu>li:first-child
     //$(".main-menu >li").each(function(){console.log($(this).children().eq(1));});
     // $('#myNavbar').scroll(function(){
     //      $(".main-menu >li").each(function(){$(this).children().eq(1).fadeOut(10);});
     // });
     // $(".container-fluid").scroll(function(){
     // $(".main-menu> .contain-submenu").each(function(){


     //    console.log($(this).offset().top);
     //      $(this).children().eq(1).css({"top":1,"right":($(this).width()+22),"display":"block" });

     //      $(this).siblings().children().each(function(){

     //           if($(this).hasClass("sub"))
     //           {

     //                $(this).css({"display":"none"});
     //           }
     //      });




     // });     });

     // $(".main-menu>li").hover(function(){

     //      $(this).children().eq(1).css({"position":"fixed","top":$(this).offset().top+1,"right":($(this).width()+22),"display":"block" });

     //      $(this).siblings().children().each(function(){

     //           if($(this).hasClass("sub"))
     //           {

     //                $(this).css({"display":"none"});
     //           }
     //      });


     //     $('.main-menu ul').each(function(){
     //         var temp=$(this).children().last().offset().top -$(window).scrollTop();

     //         if(temp>0 && temp>y )
     //         {
     //             y=temp;
     //              console.log(y);
     //         }
     //     });

     //    $('.main-menu').css({"margin-bottom":y});

     // });



        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";

                } else {
                    dropdownContent.style.display = "block";

                }
            });
        }
     //Add Phones
        document.getElementById('add-email').onclick = function() {
            var divInput = document.getElementById('InputEmails');
            var newInput = document.createElement('div');
            newInput.innerHTML = ' <input type="email" class="form-control" name="email[]" placeholder="أدخل الإيميل"><br>';
            divInput.appendChild(newInput);
        }
        //Add Numbers

        document.getElementById('add-phone').onclick = function() {
            var divInput = document.getElementById('InputPhone');
            var newInput = document.createElement('div');
            newInput.innerHTML = '<input type="phone" class="form-control" name="phone[]" placeholder="أدخل الرقم"><br>';
            divInput.appendChild(newInput);
        }
        //Add Links

        document.getElementById('add-link').onclick = function() {
            var divInput = document.getElementById('InputLinks');
            var newInput = document.createElement('div');
            newInput.innerHTML = '<input type="url" class="form-control" name="link[]" placeholder="أدخل الرابط"><br>';
            divInput.appendChild(newInput);
        }
 // Get the popap
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
 // Get the popap2
 var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


    </script>
    <script>
$(".main-menu li.contain-submenu ul li.contain-submenu ul").hide();
$(".main-menu li.contain-submenu").mouseover(function(event){
//     $(this).children().eq(1).offset({left:event.pageX,top:event.pageY}) ;
var position = $(this).position();
 $(".sub").css({
     "top":position.top});
$(this).children().eq(1).css({
    "top":position.top,
     "left": $(this).offset().left-200,
     "position": "fixed",
     "width": "200px",
     "overflow":"auto",
     "height":"200px"}).fadeIn("fast");
}).mouseleave(function(){
$(this).children().eq(1).fadeOut("fast");

});






//level1
     $("#myNavbar").scroll(function(){
  $(".main-menu li.contain-submenu").children().eq(1).each(function(){
       $(".main-menu li.contain-submenu ul").fadeOut("fast");});
    }).mouseover(function(){
           $(this).children().eq(1).each(function(){
        $(".main-menu li.contain-submenu ul").children().fadeIn("fast");});
     });

//level2
    $(".main-menu li.contain-submenu").children().eq(1).scroll(function(){
  $(this).children().eq(1).each(function(){
       $(".main-menu li.contain-submenu ul li.contain-submenu ul").children().fadeOut("fast");});
    }).mouseover(function(){
          $(this).children().eq(1).each(function(){
       $(".main-menu li.contain-submenu ul li.contain-submenu ul").children().fadeIn("fast");});
    });

    </script>
</body>
</html>
