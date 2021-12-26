<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ICEF Main Page</title>
  <meta content="Welcome to our Website " name="description">
  <meta content="E learning Schools uneversity internship employment IECF " name="keywords">

  <!-- Favicons -->
  
  <!-- This is the icon of the our company in the web site-Pc {to be changend} -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  
  <!-- This is the icon of the our company in the web site- smart Mobiles {to be changend} -->
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts [improted from google website]-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files [from internal project tree file] -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File [from internal project tree file] -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- ======================================================== --> 
  <!-- <script src="func2.js"> -->
  
  <style>
      .hidden {
          visibility: hidden;
          display: none;
          width: 0px;
          height: 0px;
          position:absolute;
          /* transition: all ease-in-out 3s; */
      }

      .show {
        visibility:visible;
        display:block;
        width: 100%;
        height: fit-content;
        position:relative;
        /* transition: all ease-in-out 3s; */
      }

      /* .show {
          visibility:visible;
          display:block;
          width: 100%;
          height: fit-content;
          position:relative;
      } */
  </style>
        
    <script type="text/javascript">
    
      // function inputSelect(){
      //     var input_select = $("#input").val();
      
      //     var after_value = input_select.split(".");
      
      //     var new_value = after_value[0] + "." + after_value[1] + "." + after_value[2] + ".xxx";
      
      //     $("#input").val(new_value);
      
      //     var option_length = $("#orientationList").find("option").length;
      
      //     var data_id = '';
      
      //     var firstIp = 1;
      
      //     var lastIp = 255;
      
      //     for(var i = 0; i < option_length; i++){
      //         var option_value = $("option").eq(i).attr('data-value');
      //         if(input_select == option_value){
      //             data_id = $("option").eq(i).attr('data-id');
      //             firstIp = $("option").eq(i).attr('firstIp');
      //             lastIp = $("option").eq(i).attr('lastIp');
                  
      //             var elem = document.getElementById('formStudyingLocally');        
      //             elem.classList.toggle("hidden");
      //             break;
      //         }
      //     }
      //     console.log("input_select:" + input_select + ",option_length:" + option_length);
      //     console.log("data_id:" + data_id + ",firstIp:" + firstIp + ",lastIp:" + lastIp);
      // };            
     </script>
     <!-- <script src="ShowHide.js"></script> -->

</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="padding:3px; background-color: white; color:rgb(55, 65, 75); margin-left:-200px; margin-top:-40px;" >
    
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top " style="background-color:transparent; width:200px; margin-left:1100px;   ">    
      
      <div id="topbar-container" class="container d-flex align-items-center">          
        <div class="cta" style="margin-top:-20px; ">            
          <a href="#GetListedForFree" class="scrollto" style="background-color: #f6b024;">Get Listed for Free </a> 
        </div> 
      </div>
    </div>

    <!-- First Item Container of Header -->
    <!-- <div class="container d-flex align-items-center" style="padding:3px; background-color: white; color:dodgerblue; margin-top:10px; height: fit-content;" > -->
    <div class="container d-flex align-items-center" style="padding:3px; background-color: white; color:dodgerblue; margin-top:10px; height: fit-content;" >
            
      <!-- <a href="#header" class="logo mr-auto scrollto" style="margin:10px; height: auto; overflow:visible">        
        <img src="M:\Shadi\Project1 test\IECF Logo HD.jpg" alt="IECF Logo" class="img-fluid" style=" margin-left: 150px; height: 500px; width: auto; display: block; position: absolute; ">
      </a> -->

      <!-- This is our image logo -->
      <a href="#header" style="margin-right: 150px; margin-top: -7px;">        

        <img src="{{asset('assets/img/favicon.png')}}" alt="IECF Logo" class="img-fluid" style="height: 150px; width: auto; display: block;">
      </a>
      <!-- Main Foundation/Firm Name -->
      <h1 class="logo mr-auto" style="margin-left:-150px; margin-top: -50px;">
        <a href="#header" class="scrollto" style="font-family:Minion Variable Concept; background-color:white; color:rgb(11, 1, 49); letter-spacing: 10px ;font-size: 50px; font-weight:bold;">IECF</a>
      </h1>

      <!-- Main Slogan Name -->
      <h1 class="logo mr-auto" style="margin-left:-160px; margin-top:30px; left:0px">
        <a href="#header" class="scrollto" style="font-family:Minion Variable Concept; background-color:white; color:rgb(11, 1, 49); font-size: 10px; font-weight:bold;">Back to the Future</a>
      </h1>
      
      <!-- Navigation Bar Container 2 (Menu Items)-->
      <div class="container d-flex align-items-center" style="margin: 30px -300px 50px auto;" >            
        <!-- {Second Nav Bar}: This is Nav Bar {Deep Data List Menu only}  -->
        <nav class="nav-menu d-none d-lg-block">              
          
          <ul>
            <!-- NavBar / 1) Direct links   -->
            <li class="active"><a  href="{{route('home')}}" style="color:dodgerblue">Home</a></li>
            <!-- <li><a href="#about" style="color:dodgerblue">About Us</a></li> -->
            <li><a href="#Partners" style="color:dodgerblue">Partners & Sponsers</a></li>          
            
            <li><a href="#Disciplines" style="color:dodgerblue"> Disciplines </a></li>
            
            <!-- 4) [Exhibitions] Menu Item -->
            <li class="drop-down">                        
              <a href="" style="color:dodgerblue"> Events </a>                                
              <ul class='secNav'>
                <li><a href="#Vedioes" style="color:dodgerblue">Videoes</a></li>                        
                <li><a href="#">Exhibitions </a></li>
                <li><a href="#">Conferences</a></li>
                <li><a href="#">Seminars</a></li>                  
                <li><a href="#">Workshops</a></li>                  
              </ul>                            
            </li>                    
            <!-- <li><a href="#events" style="color:dodgerblue">Events</a></li>                               -->
         
            <!-- 5) [Consulting Firms] Menu Item -->
            <li class="drop-down">            
              <a href="" style="color:dodgerblue"> Consulting Firms </a>                                
              <ul class='secNav'>
                <li><a href="#">Strategy Consulting </a></li>
                <li><a href="#">Operation Consulting </a></li>
                <li><a href="#">Financial Consulting </a></li>
                <li><a href="#">Human Resources Consulting </a></li>
                <li><a href="#">Risk & Compliance Consulting </a></li>
                <li><a href="#">IT Consulting </a></li>
                <li><a href="#">Business Consulting </a></li>
                <li><a href="#">Environmental Consulting </a></li>
                <li><a href="#">Software Consulting </a></li>
                <li><a href="#">Social Media Consulting </a></li>
                <li><a href="#">Career Coaching </a></li>
                <li><a href="#">Management Consulting </a></li>
                <li><a href="#">Educational Consulting </a></li>
                <li><a href="#">Engineering Consulting </a></li>
                <li><a href="#">Legal Consulting </a></li>
                <li><a href="#"> Consulting </a></li>              
              </ul>                            
            </li>
  
            <!-- 6) Think Tanks item -->
            <li class='drop-down'>            
              <a href="#thinkTank" style="color:dodgerblue">Think Tanks</a>
              <ul>
                <li><a href="#thinkTank">Environmental Issues</a></li>
                <li><a href="#thinkTank">Social Issues</a></li>
                <li><a href="#thinkTank">Economic Issues</a></li>                                
              </ul>
            </li>          
  
            <!-- 7) Inter. Organizations item -->
            <li><a href="#" style="color:dodgerblue">Inter. Organizations</a></li>                    
  
  
            <!-- 8) [Research Centers] Menu Item  -->
              <li class="drop-down">            
              <a href="" style="color:dodgerblue"> Research Centers  </a>                                
              <ul>
                <li><a href="#">Private Sector</a></li>
                <li><a href="#">Public Sector</a></li>              
              </ul>                            
            </li>                                                            
            
            <!-- 9) [Libraries]: Menu Item -->
            <!-- <li class="drop-down">            
              <a href="" style="color:dodgerblue"> Libraries  </a>                                
              <ul>
                <li><a href="#">Public</a></li>
                <li><a href="#">Private</a></li>                
              </ul>                            
            </li> -->
            
            <!-- 10) [Publishing Agencies]: Menu Item -->
            <!-- <li class="drop-down">            
              <a href="" style="color:dodgerblue"> Publishing Agencies  </a>                                
              <ul>
                <li><a href="#">Public</a></li>
                <li><a href="#">Private</a></li>                    
              </ul>                            
            </li> -->
   
            <!-- <li><a href="#contact" style="color:dodgerblue">Contact</a></li>                                                                                                                                                                                             -->
          </ul>      
  
        </nav>
        <!-- .nav-menu -->
      </div>      
      
    </div>
    <!--  --------------------------------------------------------------------------  -->
    
    <!-- Second Item Container of Header -->
    <!-- <div class="container d-flex align-items-center" style="padding:3px; background-color: white; color:dodgerblue; margin-top:10px; height: fit-content;" ></div> -->
    
    <!-- <div class="container d-flex align-items-right" >             -->
      
    <!-- Navigation Bar Container 1 (Home)-->
    <div class="container d-flex align-items-center" style="margin-right:130px; margin-top:-10px;">            
      <!-- {First Nav Bar}: This is Nav Bar {Links Menu only}  -->
      <nav class="nav-menu d-none d-lg-block"  >        
        
        <ul>          
          <!-- Direct List item (with internal links [into current Page section / other page]) -->                    
          <!-- 1) [Education] Menu Item -->
          <li class="drop-down"  >            
                        
            <a href="#Education" style="color:dodgerblue"> Education </a>                
            <!-- Each internal item of deep drop menu => will access to certain internal section / external page  -->
            <ul class='secNav'>                                                          

              <!-- 1) [Education] / a)[Nursering]: Menu Item -->
              <li class="drop-down">                                                
                <a href="{{route('university')}}" style="color:dodgerblue"> Nurseries </a>                
                  <ul>
                    <li><a href="{{route('university')}}"> International </a></li>
                    <li><a href="{{route('university')}}"> Languages </a></li>
                    <li><a href="{{route('university')}}"> Montessori </a></li>                  
                    <li><a href="{{route('university')}}"> Special Needs </a></li>                  
                    <li><a href="{{route('university')}}"> Steiner </a></li>                  
                    <li><a href="{{route('university')}}"> Play Grounds </a></li>                  
                    <li><a href="{{route('university')}}"> Child Minder </a></li>                  
                  </ul>                            
              </li>
                            
              <!-- 1) [Education] / b)[Schools]: Menu Item -->
              <li class="drop-down">                                                
                <a href="{{route('university')}}" style="color:dodgerblue"> Schools </a>                                                  
                  <ul class='school' style="overflow: visible; top: -20px; padding: 3px auto;">                                          
                    <li class='drop-down' >                                              
                      <a href="{{route('university')}}" style="color:dodgerblue;">International</a>
                      <ul  style=" overflow:inherit;">
                        <!-- <li><a href="#">International</a></li> -->
                        <li><a href="{{route('university')}}">American Schools</a></li>
                        <li><a href="{{route('university')}}">German Schools</a></li>                  
                        <li><a href="{{route('university')}}">British Schools</a></li>                  
                        <li><a href="{{route('university')}}">French Schools</a></li>                  
                        <li><a href="{{route('university')}}">Japanese Schools</a></li>                  
                        <li><a href="{{route('university')}}">Canadian Schools</a></li>
                      </ul>                      
                    </li>                                                              
                    <li><a href="{{route('university')}}">Azharian Schools Arabic </a></li>                                            
                    <li><a href="{{route('university')}}">Phoniatrics & Behavior Correction</a></li>                  
                    <li><a href="{{route('university')}}">Boarding Schools</a></li>                  
                    <li><a href="{{route('university')}}">Summer Schools</a></li>                  
                    <li><a href="{{route('university')}}">Music & Dance Schools</a></li>                  
                    <li><a href="{{route('university')}}">Ballet Schools</a></li>                  
                    <li><a href="{{route('university')}}">Sports Schools</a></li>                  
                    <li><a href="{{route('university')}}">Arts Schools </a></li>                  
                    <li><a href="{{route('university')}}">Aviation Schools </a></li>                  
                    <li><a href="{{route('university')}}">Banking Schools </a></li>                  
                    <li><a href="{{route('university')}}">Cooking Schools</a></li>                  
                    <li><a href="{{route('university')}}">Design Centers</a></li>                  
                    <li><a href="{{route('university')}}">Special Needs Schools</a></li>                  
                    <li><a href="{{route('university')}}">Riding Schools </a></li>                  
                    <li><a href="{{route('university')}}">Equestrian Schools </a></li>                                      
                  </ul>       
              </li>

              <!-- 1) [Education] / c)[Vocals & Technical]: Menu Item -->
              <li class="drop-down">                                                
                <a href="{{route('university')}}" style="color:dodgerblue"> Vocals & Technical </a>                                                  
                <ul class='school' style="overflow: visible; top: -40px; padding: 1px auto;">                      
                  <li><a href="{{route('university')}}">Arts & Design</a></li>
                  <li><a href="{{route('university')}}">Communication & Media</a></li>
                  <li><a href="{{route('university')}}">Computer Technology & IT</a></li>                  
                  <li><a href="{{route('university')}}">Cosmatology</a></li>                  
                  <li><a href="{{route('university')}}">Culinary Art</a></li>                  
                  <li><a href="{{route('university')}}">Health & Medical Assistance</a></li>                  
                  <li><a href="{{route('university')}}">Health Care</a></li>                  
                  <li><a href="{{route('university')}}">Health Technology</a></li>                  
                  <li><a href="{{route('university')}}">Liberal Art</a></li>                  
                  <li><a href="{{route('university')}}">Nursing</a></li>                  
                  <li><a href="{{route('university')}}">Psychology</a></li>                  
                  <li><a href="{{route('university')}}">Technical institutions</a></li>                  
                  <li><a href="{{route('university')}}">Junior Colleges</a></li>                  
                  <li><a href="{{route('university')}}">Vocational Schools</a></li>                  
                  <li><a href="{{route('university')}}">Trade Schools</a></li>                  
                  <li><a href="{{route('university')}}">Aesthetic & Beauty School</a></li>                  
                  <li><a href="{{route('university')}}">Office Administration Schools</a></li>                                    
                </ul>                            
              </li>
              
              <!-- 1) [Education] / d)[Institutes]: Menu Item -->
              <li class="drop-down">            
                <a href="{{route('university')}}" style="color:dodgerblue"> Institutes  </a>                                
                <ul>                  
                  <li><a href="{{route('university')}}">Accounting</a></li>                  
                  <li><a href="{{route('university')}}">Advanced Studies</a></li>                  
                  <li><a href="{{route('university')}}">Agricultural Co-operation</a></li>                                    
                  <li><a href="{{route('university')}}">Alson</a></li>                                    
                  <li><a href="{{route('university')}}">Applied Arts</a></li>                                    
                  <li><a href="{{route('university')}}">Bank Administration and Financial Markets</a></li>                                                      
                  <li><a href="{{route('university')}}">Business Administration</a></li>                                                      
                  <li><a href="{{route('university')}}">Communications</a></li>                                    
                  <li><a href="{{route('university')}}">Computer Science</a></li>                                    
                  <li><a href="{{route('university')}}">Engineering</a></li>                                    
                  <li><a href="{{route('university')}}">Higher</a></li>                                    
                  <li><a href="{{route('university')}}">Industrial Technical</a></li>                                    
                  <li><a href="{{route('university')}}">Information Systems</a></li>                                    
                  <li><a href="{{route('university')}}">Information Technology</a></li>                                    
                  <li><a href="{{route('university')}}">Islamic Studies</a></li>                                    
                  <li><a href="{{route('university')}}">Language</a></li>                                    
                  <li><a href="{{route('university')}}">Management Sciences</a></li>                                    
                  <li><a href="{{route('university')}}">Media</a></li>                                    
                  <li><a href="{{route('university')}}">Military Technical</a></li>                                    
                  <li><a href="{{route('university')}}"> Nursing </a></li>                                    
                  <li><a href="{{route('university')}}"> Optics </a></li>                                    
                  <li><a href="{{route('university')}}"> Private </a></li>                                    
                  <li><a href="{{route('university')}}"> Social Work </a></li>                                    
                  <li><a href="{{route('university')}}"> Software Engineering </a></li>                                    
                  <li><a href="{{route('university')}}"> Specific Studies </a></li>                                    
                  <li><a href="{{route('university')}}"> Tourism and Hotels </a></li>                                    
                  <li><a href="{{route('university')}}"> Wireless </a></li>                                      
                </ul>                            
              </li>
              
              <!-- 1) [Education] / e)[Universities]: Menu Item -->
              <li class="drop-down">            
                <a href="{{route('all.universities')}}" style="color:dodgerblue"> Universities  </a>                                
                <ul>
                  <li><a href="{{route('university')}}">Public Universities</a></li>
                  <li><a href="{{route('private.university')}}">Private Universities</a></li>
                  <li><a href="{{route('university')}}">Universities of Applied Science</a></li>                  
                  <li><a href="{{route('university')}}">Colleges of Art films & Music</a></li>                  
                  <li><a href="{{route('university')}}">Dual Studies</a></li>                  
                  <li><a href="{{route('university')}}">Remote Education Unit</a></li>                                  
                </ul>                            
              </li>

              <!-- 1) [Education] / F)[Masters, PHDs & More]: Menu Item -->
              <li>            
                <a href="{{route('university')}}" style="color:dodgerblue"> Masters, PHDs & More </a>                                                
              </li>
              
              <!-- 1) [Education] / G)[Trainging]: Menu Item -->              
              <!-- <li class="drop-down">            
                <a href="" style="color:dodgerblue"> Training </a>                                                
                <ul style="overflow: visible; padding: 1px auto; margin-top:-350px;">
                  <li><a href="#"> High Schools Equivalency </a></li>
                  <li><a href="#"> Short Trems Training </a></li>
                  <li><a href="#"> Certification </a></li>
                  <li><a href="#"> Apperenticeships </a></li>
                  <li><a href="#"> Professional Development </a></li>
                  <li><a href="#"> Internship </a></li>
                  <li><a href="#"> Management & Leadership  </a></li>
                  <li><a href="#"> Audit & Qulity Assurance </a></li>
                  <li><a href="#"> Finance & Accounting </a></li>
                  <li><a href="#"> HR Management </a></li>
                  <li><a href="#"> Public Relations </a></li>
                                                      
                  <li class='drop-down'><a href="#"> More <i class="icofont-arrow-right"> </i> </a> 
                    <ul style="overflow: visible; padding: 1px auto; margin-top:-400px;">                                    
                      <li><a href="#"> Project Management </a></li>
                      <li><a href="#"> Prosurment & Materials </a></li>
                      <li><a href="#"> Mechanical Engineering </a></li>
                      <li><a href="#"> Power Utilities & Energy, Oil & Gas Training  </a></li>                  
                      <li><a href="#"> Information Technology </a></li>                  
                      <li><a href="#"> Information Technology </a></li>                  
                      <li><a href="#"> Aeronautics & Aviation Strategy </a></li>
                      <li><a href="#"> Sales & Marketing </a></li>                  
                      <li><a href="#"> Banking & Investment </a></li>
                      <li><a href="#"> Administrative Support </a></li>
                      <li><a href="#"> Proffessional Development for Women </a></li>
                                      
                      <li class='drop-down'><a href="#"> More <i class="icofont-arrow-right"> </i> </a> 
                        <ul style="overflow: visible; padding: 1px auto; margin-top:-400px;">           
                          <li><a href="#"> Contracts Management </a></li>
                          <li><a href="#"> Maintenance Management </a></li>
                          <li><a href="#"> Electircal Engineering </a></li>
                          <li><a href="#"> Instrumentation & process Control </a></li>
                          <li><a href="#"> Tele Communication </a></li>
                          <li><a href="#"> Health, Safety & Security  </a></li>
                          <li><a href="#"> Continuing-Edu Centers </a></li>
                          <li><a href="#"> Garaphic Design Centers </a></li>
                          <li><a href="#"> Broadcasting </a></li>        
                        </ul>
                      </li>                      
                    </ul>
                  </li>
                                  
                </ul>                            
              </li> -->
                                        
              
            </ul>                            
          </li> 

          <!-- 2) [Trainging]: Menu Item -->              
          <li class="drop-down">            
            <a href="#Training" style="color:dodgerblue"> Training </a>                                                
            <ul style="overflow: visible; padding: 1px auto; margin-top:0px;">
              <li><a href="#"> High Schools Equivalency </a></li>
              <li><a href="#"> Short Trems Training </a></li>
              <li><a href="#"> Certification </a></li>
              <li><a href="#"> Apperenticeships </a></li>
              <li><a href="#"> Professional Development </a></li>
              <!-- <li><a href="#"> Internship </a></li> -->
              <li><a href="#"> Management & Leadership  </a></li>
              <li><a href="#"> Audit & Qulity Assurance </a></li>
              <li><a href="#"> Finance & Accounting </a></li>
              <li><a href="#"> HR Management </a></li>
              <li><a href="#"> Public Relations </a></li>
                                                  
              <li class='drop-down'><a href="#"> More <i class="icofont-arrow-right"> </i> </a> 
                <ul style="overflow: visible; padding: 1px auto; margin-top:-450px;">                                    
                  <li><a href="#"> Project Management </a></li>
                  <li><a href="#"> Prosurment & Materials </a></li>
                  <li><a href="#"> Mechanical Engineering </a></li>
                  <li><a href="#"> Power Utilities & Energy, Oil & Gas Training  </a></li>                  
                  <li><a href="#"> Information Technology </a></li>                                
                  <li><a href="#"> Aeronautics & Aviation Strategy </a></li>
                  <li><a href="#"> Sales & Marketing </a></li>                  
                  <li><a href="#"> Banking & Investment </a></li>
                  <li><a href="#"> Administrative Support </a></li>
                  <li><a href="#"> Proffessional Development for Women </a></li>
                                  
                  <li class='drop-down'><a href="#"> More <i class="icofont-arrow-right"> </i> </a> 
                    <ul style="overflow: visible; padding: 1px auto; margin-top:-410px;">           
                      <li><a href="#"> Contracts Management </a></li>
                      <li><a href="#"> Maintenance Management </a></li>
                      <li><a href="#"> Electircal Engineering </a></li>
                      <li><a href="#"> Instrumentation & process Control </a></li>
                      <li><a href="#"> Tele Communication </a></li>
                      <li><a href="#"> Health, Safety & Security  </a></li>
                      <li><a href="#"> Continuing-Edu Centers </a></li>
                      <li><a href="#"> Garaphic Design Centers </a></li>
                      <li><a href="#"> Broadcasting </a></li>        
                    </ul>
                  </li>                      
                </ul>
              </li>
                              
            </ul>                            
          </li>

          <!-- 2) [Career] Menu Item -->
          <li class="drop-down">                                    
            <a href="#Career" style="color:dodgerblue"> Career</a>                                
            <ul class='secNav'>                 

              <li class="drop-down">                        
                <a href="" style="color:dodgerblue"> According to Location </a>                                
                <ul class='secNav'>                                    
                  <li class="drop-down">
                    <a href="#" style="color:dodgerblue">Local</a>
                    <ul class='secNav' style="margin-top: -20px;">
                      <li><a href="#"> Alexandria jobs </a></li>
                      <li><a href="#"> Assiut jobs </a></li>
                      <li><a href="#"> Aswan jobs </a></li>
                      <li><a href="#"> Beni Suef jobs </a></li>
                      <li><a href="#"> Cairo Jobs </a></li>
                      <li><a href="#"> Dakahlia jobs </a></li>
                      <li><a href="#"> Damietta jobs </a></li>
                      <li><a href="#"> El Behera jobs </a></li>
                      <li><a href="#"> El Gharbia Jobs </a></li>
                      <li><a href="#"> El Sharkia Jobs </a></li>
                      <li><a href="#"> El Wadi El Geded jobs </a></li>
                      
                      <li class="drop-down">
                        <a href="#" style="color:dodgerblue">More</a>
                        <ul class='secNav' style="margin-top: -450px;">
                          <li><a href="#"> Fayoum jobs </a></li>
                          <li><a href="#"> Giza Jobs </a></li>
                          <li><a href="#"> Ismailia Jobs </a></li>
                          <li><a href="#"> Kafr El-Sheikh Jobs </a></li>
                          <li><a href="#"> Luxor Jobs </a></li>
                          <li><a href="#"> Matrouh Jobs </a></li>
                          <li><a href="#"> Menoufia jobs </a></li>
                          <li><a href="#"> Minya Jobs </a></li>
                          <li><a href="#"> North Sinai Jobs </a></li>
                          <li><a href="#"> Port Said jobs </a></li>
                          <li><a href="#"> Qalyubia jobs </a></li>
                          
                          <li class="drop-down">
                            <a href="#" style="color:dodgerblue">More</a>
                            <ul class='secNav' style="margin-top: -450px;">
                              <li><a href="#"> Qena Jobs </a></li>                                                                  
                              <li><a href="#"> Red sea jobs </a></li>
                              <li><a href="#"> Sohag jobs </a></li>
                              <li><a href="#"> South sinai jobs </a></li>
                              <li><a href="#"> Suez Jobs </a></li>
                              <li><a href="#"> Jobs in all States  </a></li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      
                    </ul>                  
                  </li>
                                    
                  <li><a href="#">International</a></li>                   

                </ul>                            
              </li>                    

              <li class="drop-down">                        
                <a href="" style="color:dodgerblue"> According to Specialization </a>                                
                <ul class='secNav'>
                  <li><a href="#">administrative work jobs</a></li>
                  <li><a href="#">Marketing and Sales Jobs</a></li>
                  <li><a href="#">Financial and Legal Jobs</a></li>                  
                  <li><a href="#">Tourism and Hospitality Jobs</a></li>                  
                  <li><a href="#">Construction Jobs</a></li>                  
                  <li><a href="#">Services Jobs</a></li>                  
                  <li><a href="#">Character functions</a></li>                  
                  <li><a href="#">industry and agriculture jobs</a></li>                                    
                  <li><a href="#">Driving and Delivery Jobs</a></li>                  
                  <li><a href="#">information and communication technology jobs</a></li>                  
                  <li><a href="#">architecture and engineering jobs</a></li>                                    
                  <li><a href="#">medicine and pharmacy jobs</a></li>                  
                  <li><a href="#">Education Jobs</a></li>                  
                  <li><a href="#">Vacancies in all fields</a></li>                  
                </ul>                            
              </li>                    

            </ul>                            
          </li>       

                      
          <!-- 5) [Study Abroad] Menu Item -->
          <li class="drop-down">                        
          <a href="#studyAbroad" style="color:dodgerblue"> Study Abroad </a>                                
          <ul class='secNav1' style="overflow: visible; padding: 1px auto; margin:auto;">                      
            <li><a href="#">International Universities</a></li>
            <li><a href="#">International Colleges</a></li>
            <li><a href="#">Summer Programe</a></li>                  
            <li><a href="#">Semster Programe</a></li>                  
            <li><a href="#">High School Programe</a></li>                  
            <li><a href="#">Intersession Programe</a></li>                  
            <li><a href="#">Full Degree Abroad</a></li>                  
            <li><a href="#">Study Abroad ScholerShips</a></li>                  
            <li><a href="#">Exchange Programe</a></li>                  
            <li><a href="#">Study Abroad Advisory (Consultant)</a></li>                  
            <li><a href="#">Gap year Organization</a></li>                  
            <li><a href="#">Study Service Providers</a></li>                  
            <li><a href="#">Blended Learning</a></li>                  
            <li><a href="#">Intensive Language Abroad</a></li>                  
            <li><a href="#">Internship Abroad</a></li>                  
            <li><a href="#">International institution</a></li>                  
          </ul>                            
          </li>         
                        
          <!-- 3) [Supplies & Solutions] Menu Item -->
          <li class="drop-down">         
            <a href="#SuppliesSolutions" style="color:dodgerblue"> Supplies & Solutions </a>                                
            <ul class='secNav1' style="overflow: visible; padding: 1px auto; margin:auto;">                      
              <li><a href="#">Class Room Equipment Hardware</a></li>
              
              <li><a href="#">Scientific Book for Certainty</a></li>
              
              <li><a href="#">School Leading Aids</a></li>                  

              <li><a href="#">Kids Area</a></li>                  

              <li><a href="#">Toys Children Wear</a></li>                  
              
              <li><a href="#">Office Equipment</a></li>                  

              <li><a href="#">Dietary Equipment</a></li>                  

              <li><a href="#">Arts & Craft, Music & Design</a></li>                  
              
              <li><a href="#">Books,Magazines,Publishers / E-Publishers</a></li>                  

              <li><a href="#">Curriculum</a></li>                  
              
              <li><a href="#">Distributer</a></li>                  
                        
              <li class='drop-down'><a href="#"> More <i class="icofont-arrow-right"> </i> </a>                          
                <ul class='secNav1' style="overflow: visible; padding: 1px auto; margin-top:-400px;">                       
              
                  <li><a href="#">EdTech-Coding, Digital, VR, AL</a></li>                  
              
                  <li><a href="#">Education Toys, Games & Playground</a></li>                  
                  
                  <li><a href="#">Equipment</a></li>                  
                  
                  <li><a href="#">Government & Associations</a></li>                  
                  
                  <li><a href="#">Hardware-3D printers, AV, Multimedia</a></li>                  
                  
                  <li><a href="#">Technology</a></li>                  
                  
                  <li><a href="#">Learining Environment & Furnitures</a></li>                  
                  
                  <li><a href="#">Online E-learining Resources</a></li>                  
                  
                  <li><a href="#">S.T.E.A.M (Science,Technology,Engineering,Arts,Mathematics) </a></li>                  
    
                  <li><a href="#">School Management Tools (Training Solutions/Recuritment) </a></li>                  
    
                  <li><a href="#">Special Education Needs </a></li>                  
    
                  <li><a href="#">Sprots & fitness Supplies & Solutions </a></li>                  
                  
                  <li><a href="#">Uniforms</a></li>                  
                  
                  <li><a href="#">Vocational Equipments & Resource</a></li>                
                            
                </ul>
              </li>                  
                                    
            </ul>                                          
           </li>
          

          <!-- 6) [Talent] Menu Item -->
          <li class="drop-down">                        

            <a href="#Talent" style="color:dodgerblue"> Talent & Innovation </a>                                            
            <ul>
              <li> <a href="#"> Talent 1 </a> </li>
              <li> <a href="#"> Talent 2 </a></li> 
              <li> <a href="#"> Innovation 1 </a> </li>
              <li> <a href="#"> Innovation 2 </a></li> 
            </ul>
          </li>

          <!-- 4) [Funding & ScholerShips] Menu Item -->
          <li class="drop-down">            
            <a href="" style="color:dodgerblue">Funding & ScholerShips</a>                
            <ul class='secNav'>
              <li><a href="#">Opportunities</a></li>
              <li><a href="#">Booking</a></li>                  
            </ul>
          </li>
                    
          
          <!-- 7) News Item -->
          <li class='drop-down'>            
            <a href="#news" style="color:dodgerblue">News</a>
            <ul>
              <li><a href="#">Exams Schedules</a></li>
              <li><a href="#">Exams Results</a></li>              
            </ul>                    
          </li>          


          <!-- 4) [Innovation] Menu Item -->
          <!-- <li class="drop-down">             
            <a href="#Innovation" style="color:dodgerblue">Innovation</a>                
            <ul class='secNav'>
              <li><a href="#">Training Centers</a></li>
              <li><a href="#">Training Fields</a></li>                   
            </ul>

          </li>  -->
          
          <!-- <li><a href="#Sponsers" style="color:dodgerblue">Sponsers</a></li>           -->

      
          <!-- 10) [Exhibitions] Menu Item -->
          <!-- <li class="drop-down">                        
            <a href="" style="color:dodgerblue"> Exhibitions </a>                                
            <ul class='secNav'>
              <li><a href="#">Events</a></li>
              <li><a href="#">Conferences</a></li>
              <li><a href="#">Seminars</a></li>                  
              <li><a href="#">Workshops</a></li>                  
            </ul>                            
          </li>                     -->
            
        </ul>      

    
      </nav>
      <!-- .nav-menu -->      
    </div>

    
  </header>
  <!-- End Header -->

  @yield('content')

  <footer id="footer" style='background-color:rgb(11, 1, 49)'>

     <!-- our newsletter -->
    <div class="footer-newsletter" style="background-color: dodgerblue;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4 style='margin-left:-40px'>Stay Informed Stay Inspired</h4>
            <p style='text-indent:20px; font-size:medium'>Subscribe for our Newsletter</p>
          </div>
          <div class="col-lg-6" >
            <form action="" method="post">
              <input placeholder='Insert your Email' style='left: 100px ;width: 400px;' type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top" style="background-color: rgb(11, 1, 49)" >
      <div class="container" style="background-color: rgb(11, 1, 49)">
        <div class="row"  >

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4 style='color:goldenrod'>Useful Links</h4> -->
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> 
                <a href="#">Home</a>
              </li>                            
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>            
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li> 
              <li><i class="bx bx-chevron-right"></i> <a href="#">Exhibitions</a></li> 
              <li><i class="bx bx-chevron-right"></i> <a href="#">Talents & Innovations </a></li> 
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> 
              <li><i class="bx bx-chevron-right"></i> <a href="#">Promote your Programe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Site Map</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4 style='color:goldenrod'>Our Services</h4> -->
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Career</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Innovation</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Study Abroad</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Supply & Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Funding & ScholerShips</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inter. Organizations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consulting Firms</a></li>              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Think Tanks </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consulting Firms</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Disclaimers</a></li>              
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 style='color:goldenrod'>Contact Us</h4>
            <p>
              17 B Obour Buildings/Salah Salem St.<br>
              Heliopolis, Cairo<br>
              Egypt <br><br>
              
              Phone (Office): (+202) 22625054/44  <br> <br>
              <!-- <strong>Phone (Mob):</strong> <br> 01090756620 - 01119986466  <br> <br> -->
              
              Email: <br>
              <a href="mailto:info@iecf-world.com" style='color:goldenrod'> info@iecf-world.com </a> <br> <br>
              
              Other Website: <br>
               <a class='websiteLink'  href="http://www.iecf-educationfairs.com/"> http://www.iecf-educationfairs.com/ </a> <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style='color:goldenrod'>About IECF social Networks</h3>
            <p>Follow us:</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/IECF.Educationfair/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div style='background-color:rgb(11, 1, 49)' class="container">
      <div style='background-color:rgb(11, 1, 49); color: white;' class="copyright">
        &copy; Copyright <strong><span style="color: goldenrod; font-size: large;">IECF</span></strong> All Rights Reserved
      </div>        
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Index Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>