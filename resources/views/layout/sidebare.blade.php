
<!-- ===================================================================================================== -->

<main id="main">

<section id="blog" class="blog" style="top: 200px; position: relative">
    
    <section id="services" class="services" style="position: relative; margin-right:auto; margin-left:auto; margin-bottom: 50px; left:0px; right:0px; top:0px; width:auto">
    
      <div class="container" data-aos="fade-up" style=" position: relative; top:0px; width:100%; padding:0%" >

        <!-- Left Side Bar -->
        <div class="col-lg-4" style=" width:40%; height:fit-content; position:relative; float:left; margin-top:0px; top:40px; right:0px; padding:0px" >
          
          <div class="sidebar" style="position:relative; min-height:fit-content; width:100%; text-align:left; height:clac(fit-content + 10px); padding:20px">                

            <!-- Left Side / Bar First Part [Fast Search] -->
            <h3 class="sidebar-title" style="width:100px; font-size:25px">Search</h3>
            <div class="sidebar-item search-form" style="width:auto;">
              <form action="{{route('university.search')}}" method="get">
                @csrf
                <input type="text" name="name" placeholder=" University/Faculty Name">
                <button type="submit"><i class="icofont-search"></i></button>
              </form>          
            </div>  
            
      
            <!--Left Side / Bar second Part -->
            <!-- <h3 class="sidebar-title"> Nurseries Main Type </h3> -->
            <!-- <div id='criM' class="sidebar-item categories" > -->
            
            <!-- End sidebar categories-->
            
            
            <!-- Main Criteria (Filters) -->
            <h3 id='cri' class="sidebar-title">Main Filters</h3>
            <!-- <div class="sidebar-item tags" style="margin-bottom:10px; display:grid; grid-template-columns: 50% 50%;"> -->
              
              <!-- Main Criteria -->
              
            <form action="{{route('university.side.search')}}" method="get" style="max-height:fit-content; display:inline; left: 100px;">
                @csrf
            <div class="sidebar-item tags" style="margin-bottom:10px;">
              <!-- A) Disciplines -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom: 10px;"> A) Disciplines <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->                                                
                    <ul id='catListM' class="innerCities"  style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="display:inline; margin-left:20px; width:auto; border:none; " > <a href="#criM" > Agriculture & Forestry <input type="checkbox" name="item[1]" value="Agriculture & Forestry" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Applied Sciences & Professions <input type="checkbox" name="item[2]" value="Applied Sciences & Professions" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Arts, Design & architecture <input type="checkbox" name="item[3]" value="Arts, Design & architecture" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Business & Management  <input type="checkbox" name="item[4]" value="Business & Management" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Computer Science & IT <input type="checkbox" name="item[5]" value="Computer Science & IT" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Education & Training <input type="checkbox" name="item[6]" value ="Education & Training" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Engineering & Technology <input type="checkbox" name="item[7]" value="Engineering & Technology" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:350px; border:none;" > <a href="#criM" > Environmental Studies & Earth Sciences <input type="checkbox" name="item[8]" value="Environmental Studies & Earth Sciences" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Hospitality , Leisure & Sports <input type="checkbox" name="item[9]" value="Hospitality , Leisure & Sports" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Humanities <input type="checkbox" name="item[10]" value="Humanities" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Jornalism & Media <input type="checkbox" name="item[11]" value="Jornalism & Media" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Law <input type="checkbox" name="item[12]" value="Law" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Medicine & Health <input type="checkbox" name="item[13]" value="Medicine & Health" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Natural Sciences & Mathematics <input type="checkbox" name="item[14]" value="Natural Sciences & Mathematics" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto; border:none;" > <a href="#criM" > Social Sciences <input type="checkbox" name="item[15]" value="Social Sciences" style="margin-left:10px ;" > </a>  </li>                                                                                      
                  </ul>                        
                </details>
              </dialog>
        
              <!-- B) Location -->                                                      
              <!-- Check Boxes -->
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom:10px;"> B) Location <i class="icofont-arrow-down"></i></summary>
                                        
                  <!-- Short Access Input List -->
                  <label type="text" name="name" class="MCriT" id="name" placeholder="Your Contact" for="contact" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="width:auto; margin-left:10px " >
                    Choose your Location and area
                  </label>
                  <div style="margin-left:-10px; display:grid; grid-template-columns: 50% 50%;">
                    <input id='stateListId' list="stateList" name="stateListName" class='orientation' placeholder="Choose your State" style="width:170px; padding:10px; margin-right:20px; font-size:14px; display:inline; border-radius:10%; text-align:center" onchange="getListValue()">  
                    <input id='areaListId' list="areaList" name="areaListName" class='orientation' placeholder="Choose your area" style="width:170px; padding:10px; font-size:14px; display:inline; border-radius:10%; text-align:center" onchange="getListValue()">
                  </div>

                  <script src="ShowHide.js"></script>

                  <!-- States Main List  -->
                  <datalist id="stateList" >
                    <option id='' value="Alexandria" > Alexandria </option>
                    <option value="Cairo" > Cairo  </option>
                    <option value="Giza" > Giza </option>
                    <option value="Assiut" > Assiut </option>
                    <option value="Aswan" > Aswan </option>
                    <option value="Behera" > Behera </option>
                    <option value="Bani Souwaif" >  Bani Souwaif </option>
                    <option value="Dakahliya" >  Dakahliya </option>
                    <option value="Qalubia" >  Qalubia </option>
                    <option value="Monofiya" >  Monofiya </option>
                    <option value="Qena" >  Qena </option>
                    <option value="Damietta" >  Damietta </option>
                    <option value="Fayoum" > Fayoum </option>
                    <option value="Gharbia" > Gharbia </option>
                    <option value="Ismailia" > Ismailia </option>
                    <option value="Kafr El Sheikh" > Kafr El Sheikh </option>
                    <option value="Luxor" > Luxor </option>
                    <option value="Matrouh" > Matrouh </option>
                    <option value="Menia" > Menia </option>
                    <option value="North Senai" > North Senai </option>                        
                    <option value="South Senai" > South Senai </option>
                    <option value="Port Said" > Port Said </option>
                    <option value="Red Sea" > Red Sea </option>
                    <option value="Sharkia" > Sharkia </option>
                    <option value="Sohag" > Sohag </option>
                    <option value="Suez" > Suez </option>
                    <option value="ElWadi ElGeded" > ElWadi ElGeded </option>
                    <!-- <option value="Training Institute"> Training Institute </option> -->
                  </datalist> 
                  
                  <!-- Cairo List -->
                  <datalist id="Cairo" >
                    <option value="NastCity" > </option>
                    <option value="New Cairo" >  </option>
                    <option value="Heliopolis" >  </option>
                    <option value="Maadi" >  </option>
                    <option value="New Maadi" >  </option>
                    <option value="Mokattam" >  </option>
                    <option value="Helwan" >  </option>
                    <option value="El Nozha" >   </option>
                    <option value="Ain Shams" >  </option>
                    <option value="El Shorouq City" >  </option>
                    <option value="Fifth Settlement" >   </option>
                    <option value="Hadayek ElKobba" >   </option>
                    <option value="El Salam City" >  </option>
                    <option value="Shoubra Misr" >  </option>
                    <option value="El Matareya" >  </option>
                    <option value="El Sayeda Zeinab" >  </option>
                    <option value="Gesr El Suez" >  </option>
                    <option value="El Marg" >  </option>
                    <option value="El Bassateen" >  </option>
                    <option value="AinShams Sharkeya" >  </option>                        
                    <option value="Al-Zeitoun" >  </option>
                    <option value="Hadayek Helwan" >  </option>
                    <option value="Dar El Salam" >  </option>
                    <option value="First Settlement" >  </option>
                    <option value="Downtown" >  </option>
                    <option value="El Zawia ElHamra" >  </option>
                    <option value="Wailey" > </option>
                    <option value="Al Rehab City" > </option>
                    <option value="Helmeyet Zaitoun" > </option>
                    <option value="El Tebeen" > </option>
                    <option value="El Sahel" > </option>
                    <option value="15Th Of May City" > </option>
                    <option value="Misr El Qadima" > </option>
                    <option value="Abdeen" > </option>
                    <option value="Ezbet El Nakhl" > </option>
                    <option value="El Manyal" > </option>
                    <option value="El Khalifa" > </option>
                    <option value="Road El Farag" > </option>
                    <option value="El Sharabeya" > </option>
                    <option value="El Amireya" > </option>
                    <option value="Almaza" > </option>
                    <option value="Hadayek El Zaitoon" > </option>
                    <option value="Sheraton" > </option>
                    <option value="Wadi Houf" > </option>
                    <option value="Mansheyet Nasser" > </option>
                    <option value="Badr City" > </option>
                    <option value="West Cairo" > </option>
                    <option value="El Zaher" > </option>
                    <option value="Hadayek El Maadi" > </option>
                    <option value="Manial El Roda" > </option>
                    <option value="Zamalek" > </option>
                    <option value="Abbasseya" > </option>
                    <option value="El Herafeyeen" > </option>
                    <option value="El Katameya" > </option>
                    <option value="Bab Elshaareya" > </option>
                    <option value="Garden City" > </option>
                    <option value="Kobry El Kobba" > </option>
                    <option value="Qubaa City" > </option>
                    <option value="Tura" > </option>
                    <option value="AinShams Gharbeya" > </option>
                    <option value="Aghakhan" > </option>
                    <option value="El Helmeya" > </option>
                    <option value="El Koba El Gadida" > </option>
                    <option value="El Sawah" > </option>
                    <option value="Saray El Koba" > </option>
                    <option value="Third Settlement" > </option>
                    <option value="El Darb El Ahmar" > </option>
                    <option value="El Fustat" > </option>
                    <option value="Helmeya Gdidah" > </option>
                    <option value="El Khalafawy" > </option>
                    <option value="El Marg El Gadida" > </option>
                    <option value="Ghamrah" > </option>
                    <option value="Hmamat El Kobba" > </option>
                    <option value="Madinaty" > </option>                        
                    <!-- <option value="Training Institute"> Training Institute </option> -->
                  </datalist>                       
                  
                  
                  <!-- Alex List -->
                  <datalist id="Alexandria" >
                    <option value="El Montazah" > </option>                        
                    <option value="Al Ameraya" >  </option>
                    <option value="Borg El Arab" >  </option>
                    <option value="Abees" >  </option>
                    <option value="Somoha" >  </option>
                    <option value="Moharram Baik" >  </option>
                    <option value="Miami" >  </option>
                    <option value="Al Gomrok" >   </option>                        
                    <option value="El Agamy" >  </option>
                    <option value="Central Alexandria" >  </option>
                    <option value="El Shatby" >   </option>
                    <option value="Abo El Dardaa" >   </option>
                    <option value="Matrouh Road" >  </option>
                    <option value="East Alexandria" >  </option>
                    <option value="Sedi Beshr" >  </option>                        
                    <option value="El Attaren" >  </option>
                    <option value="El Raml" >  </option>
                    <option value="West Alexandria" >  </option>
                    <option value="El Lababn" >  </option>
                    <option value="El Ras Sodda" >  </option>                        
                    <option value="El Wardian" >  </option>
                    <option value="Vectoria" >  </option>
                    <option value="Ganaklees" >  </option>
                    <option value="Ras El Teen" >  </option>
                    <option value="El Seiuf" >  </option>
                    <option value="El Mandara" >  </option>
                    <option value="Hanovil" > </option>
                    <option value="Al Ibrahimya" > </option>
                    <option value="Abou Qeer" > </option>
                    <option value="El Asafra" > </option>
                    <option value="El Betash" > </option>
                    <option value="Gleem" > </option>
                    <option value="Karmooz" > </option>
                    <option value="Sedi Gaber" > </option>
                    <option value="Al Anfoshy" > </option>
                    <option value="Bab Sharq" > </option>
                    <option value="Stanly" > </option>
                    <option value="Saba Basha" > </option>
                    <option value="Mahettet Masr" > </option>                        
                    <!-- <option value="Training Institute"> Training Institute </option> -->
                  </datalist>                       
                  
                  <!-- Giza List -->
                  <datalist id="Giza" >
                    <option value="Fiasal" > </option>                        
                    <option value="El Mohadeseen" >  </option>
                    <option value="El Dokki" >  </option>
                    <option value="El Agguza" >  </option>
                    <option value="Boulaq ElDakror" >  </option>
                    <option value="El Omranya" >  </option>
                    <option value="El Haram" >  </option>
                    <option value="El Warraq" >   </option>                        
                    <option value="Imbaba" >  </option>
                    <option value="El Munaib" >  </option>
                    <option value="Bein ElSarayat" >   </option>
                    <option value="El Kitkat" >   </option>
                    <option value="El Ayyat" >  </option>
                    <option value="El Badrashein" >  </option>
                    <option value="El Hawamdeya" >  </option>                        
                    <option value="Sheikh Zayed City" >  </option>
                    <option value="El Saff" >  </option>
                    <option value="Atfeh" >  </option>
                    <option value="El Talbia" >  </option>
                    <option value="Ossim" >  </option>                        
                    <option value="Kerdasa" >  </option>
                    <option value="6th of October City" >  </option>
                    <option value="Abou El Numrus" >  </option>
                    <option value="Manufacturing Area" >  </option>
                    <option value="Abou Rawash" >  </option>
                    <option value="Dahshour" >  </option>                        
                    <!-- <option value="Training Institute"> Training Institute </option> -->
                  </datalist>                       
                  
                  <!-- Assiut List -->
                  <datalist id="Assiut" >
                    <option value="Assiut" > </option>                                                
                    <option value="Dairoot" >  </option>
                    <option value="Al Quseya" >  </option>
                    <option value="Al Badary" >  </option>
                    <option value="Manfolot" >  </option>                        
                    <option value="Abanoob" >  </option>
                    <option value="Abou Teeg" >  </option>
                    <option value="Al Fath" >   </option>                        
                    <option value="Sedfa" >  </option>
                    <option value="Al Ghanayem" >  </option>
                    <option value="Sahel Salem" >   </option>
                    <option value="Akhmeem" >   </option>                                                
                  </datalist>                       
                  
                  <!-- Aswan List -->
                  <datalist id="Aswan" >
                    <option value="Aswan" > </option>                                                                        
                  </datalist>                       
                  
                  <!-- Behera List -->
                  <datalist id="Behera" >
                    <option value="Koum Hamada" > </option>                                                                        
                    <option value="Abou Hommus" > </option>                                                                        
                    <option value="El Dalangat" > </option>                           
                    <option value="Kafr El Dawar" > </option>                                                                        
                    <option value="Etay El barood" > </option>                                                                        
                    <option value="Damanhour" > </option>                                                                        
                    <option value="El Mahmoudya" > </option>                                                                        
                    <option value="Shubrakheet" > </option>                                                                        
                    <option value="El Tahreer" > </option>                                                                                                
                    <option value="Edku" > </option>                                                                                                
                    <option value="Abou El Matamer" > </option>                                                                                                
                    <option value="El Nobaria" > </option>                                                                                                
                    <option value="Housh Essa" > </option>                                                                                                
                    <option value="Rasheed" > </option>                                                                                                
                    <option value="Wadi El Natroon" > </option>                                                                        
                  </datalist>                       
                  
                  <!-- Bani Souwaif List -->
                  <datalist id="Bani Souwaif" >
                    <option value="Bani Souwaif" > </option>                                                                                                
                    <option value="Ahnasia" > </option>                                                                                                
                    <option value="Bia" > </option>                           
                    <option value="El Wasety" > </option>                                                                        
                    <option value="Simesta" > </option>                                                                        
                    <option value="Naser" > </option>                                                                        
                    <option value="El Fashn" > </option>                                                                        
                    <option value="Sharq El Niel" > </option>                                                                                                                        
                  </datalist>                       
                  
                  <!-- Dakahliya List -->
                  <datalist id="Dakahliya" >
                    <option value="Meat Ghamr" > </option>                                                                                                
                    <option value="Belqas" > </option>                                                                                                
                    <option value="Agaa" > </option>                           
                    <option value="Sinbelawian" > </option>                                                                        
                    <option value="Sherbean" > </option>                                                                        
                    <option value="Dakarnas" > </option>                                                                                                
                    <option value="Gharb ElMansura" > </option>                                                                        
                    <option value="Sharq ElMansura" > </option>                                                                                                                                                
                    <option value="Talkha" > </option>                                                                                                                                                
                    <option value="El Manzala" > </option>                                                                                                                                                
                    <option value="Meniat El Nasr" > </option>                                                                                                                                                
                    <option value="Tama El Amded" > </option>                                                                                                                                                
                    <option value="Nebaru" > </option>                                                                                                                                                
                    <option value="Bani Ebaid" > </option>                                                                                                                                                
                    <option value="El Matarya" > </option>                                                                                                                                                
                    <option value="El Gamalya" > </option>                                                                                                                                                
                    <option value="Meat Salseel" > </option>                                                                                                                                                
                    <option value="El Mansura" > </option>                                                                                                                        
                  </datalist>                       
                  
                  <!-- Qalubia List -->
                  <datalist id="Qalubia" >
                    <option value="Masr El Ismaelia Sahrawi" > </option>                                                                                                                        
                  </datalist>                       
                  
                  <!-- Monofiya List -->
                  <datalist id="Monofiya" >
                    <option value="Shebien El Koum" > </option>                                                                                                                        
                  </datalist>                       
                                        
                  <!-- Qena List -->
                  <datalist id="Qena" >
                    <option value="Qena" > </option>                                                                                                                                              
                    <option value="Nagea Hamadi" > </option>                                                                                                                        
                    <option value="Qous" > </option>                                                                                                                        
                    <option value="Dishna" > </option>                                                                                                                        
                    <option value="Abou Tesht" > </option>                                                                                                                        
                    <option value="Neqada" > </option>                                                                                                                                                
                    <option value="Qaft" > </option>                                                                                                                        
                    <option value="Farshoot" > </option>                                                                                                                                                
                    <option value="El Waqf" > </option>                                                                                                                        
                  </datalist>                       
                                        
                  <br>
                    
                </details>
              </dialog>
              </dialog>
              
              <!-- C) Tuition -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom: 10px;"> C) Tuition Fee <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->                                                
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >0 - 5000 LE/year <input type="checkbox" name="fee_range[1]" value="0-5000" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >5000 - 10,000 LE/year <input type="checkbox" name="fee_range[2]" value="5000-10000" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >10,000 - 20,000 LE/year <input type="checkbox" name="fee_range[3]" value="10000-20000" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >20,000 - 50000 LE/year <input type="checkbox" name="fee_range[4]" value="20000-50000"style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >50,000 - 100000 LE/year <input type="checkbox" name="fee_range[5]" value="50000-100000"style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >100,000 - 150,000 LE/year <input type="checkbox" name="fee_range[6]" value="100000-150000"style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >150,000 - 200,000 LE/year <input type="checkbox" name="fee_range[7]" value="150000-200000"style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >200,000 - 500,000 LE/year <input type="checkbox" name="fee_range[8]" value="200000-500000"style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >500,000 - 1,000,000 LE/year <input type="checkbox" name="fee_range[9]" value="500000-1000000"style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >1,000,000 - 1,500,000 LE/year <input type="checkbox" name="fee_range[10]"value="1000000-1500000" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >1,500,000 - 2,000,000  LE/year <input type="checkbox" name="fee_range[11]" value="1500000-2000000"style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >more than 2,000,000  LE/year <input type="checkbox" name="fee_range[12]" value="2000000"style="margin-left:10px ;" > </a>  </li>                                                                                      
                  </ul>                        
                </details>
              </dialog>

              <!-- D) Duration -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom: 10px;"> D) Duration <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->                                                
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >4 years <input type="checkbox" name="duration[1]" value="4" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >5 year <input type="checkbox" name="duration[2]" value="5" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" >more than 5 year <input type="checkbox" name="duration[3]" value="7" style="margin-left:10px ;" > </a>  </li>                       
                  </ul>                        
                </details>
              </dialog>

              <!-- E) Format -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom: 10px;"> E) Format <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->                                                
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Full Time <input type="checkbox" name="format[1]" value="full" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Part Time <input type="checkbox" name="format[2]" value="part" style="margin-left:10px ;" > </a>  </li>                                                            
                  </ul>                        
                </details>
              </dialog>
        
              <!-- F) University/Faculty Legal Type: -->
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom:10px;"> F) University Legal Type <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->
                                            
                    <label type="text" name="name" class="MCriT"  id="name"  for="SchlsList" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="width:auto; margin-left:20px " >                          
                       University Legal Main Sector
                    </label>
                    
                    <input list="univList" class="orientation" name="university_sector" id="UniMainSec" onchange="getUniList()" placeholder="Choose University Main Sector" data-rule="email" data-msg="Please enter a valid email" style="width:250px; margin-left:20px; padding:10px; border-radius: 20%; font-size:smaller" />          
                    <br> <br>
            

                    <label type="text" name="name" class="hidden" id="name"  for="SchlsList" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="width:auto; margin-left:-35px " >
                       University Legal Internal Sector
                    </label>
                    
                    <input list="" class="hidden" name="UniversitesList" id="UniInternalSec" placeholder="Choose University Internal Sector" data-rule="name" data-msg="Please enter a valid email" style="width:250px; margin-left:20px; padding:10px; border-radius: 20%; font-size:smaller" />          
                    
                    <script src='ShowHide.js'></script>
                    
                    <!-- 1) University Legal Main Sector list -->
                    <datalist class='orientation' id="univList" style="width:300px; padding:10px">          
                        <option value="Private University" >  </option>              
                        <option value="Public University" >  </option>              
                    </datalist>                  
                    
                    <!-- 2) University Legal Internal Sector list -->
                    <datalist class='orientation' id="PrivateList" style="width:300px; padding:10px">          
                        <option value="Egyptian Private University" >  </option>              
                        <option value="Competence University" >  </option>              
                        <option value="International University" >  </option>              
                        <option value="Technical University" >  </option>              
                        <option value="University with international Agreements" >  </option>              
                    </datalist>                  
                    
                    
                    <!-- <ul id='catListM' style="text-indent:10px; display:grid; grid-template-columns: 50% 50% ;"> -->                        
                    
                      <!-- <ul id='catListM' style="text-indent:10px; margin-top:20px ;display:grid; grid-template-columns: 50% 50%">                          
                      <li class='Nund' id='Inter' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckInter()"> International <input type="checkbox" style="margin-left:10px ;" > </a>  </li>
                      <li class='Nund' id='Lang' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckLang()"> Languages <input type="checkbox" style="margin-left:30px ;" > </a>  </li>
                      <li class='Nund' id='Mont' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckMont()"> Montessori <input type="checkbox" style="margin-left:20px ;" > </a>  </li>
                      <li class='Nund' id='specNeds' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckspecNeds()"> Special Needs <input type="checkbox" style="margin-left:10px ;" > </a>  </li>
                      <li class='Nund' id='Ste' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckSte()"> Steiner <input type="checkbox" style="margin-left:45px ;" > </a>  </li>
                      <li class='Nund' id='PlyG' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckPlyG()"> Play Grounds <input type="checkbox" style="margin-left:18px ;" > </a>  </li>
                      <li class='Nund' id='ChildM' style="margin-left:-10px; width:170px"> <a href="#criM" onclick="nursCheckChildM()"> Child Minder <input type="checkbox" style="margin-left:8px ;" > </a>  </li>                                                    
                    </ul>           -->

                </details>
              </dialog>
              
              <!-- G) Degree Type                                                       
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom:10px;"> G) Degree Type <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List                                           
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" class="MCriT" > B.Sc. Bachelor of Science <input type="checkbox" name="degree_type[1]" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > B.A. Bachelor of Arts <input type="checkbox" name="degree_type[2]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > L.B.B. Bachelor of Laws <input type="checkbox" name="degree_type[3]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > B.Eng. Bachelor of Engineering <input type="checkbox" name="degree_type[4]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:350px" style="border:none;" > <a href="#criM" > B.B.A. Bachelor of Bussiness Administration <input type="checkbox" name="degree_type[5]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Associate Degree <input type="checkbox" name="degree_type[6]" style="margin-left:10px;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Academy Proffession  <input type="checkbox" name="degree_type[7]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Advanced Diploma <input type="checkbox" name="degree_type[8]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Graduate Certificate <input type="checkbox" name="degree_type[9]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Graduate Diploma <input type="checkbox" name="degree_type[10]" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Pre-Bachelor <input type="checkbox" name="degree_type[11]" style="margin-left:10px ;" > </a>  </li>                                                                                      
                  </ul>                        
                </details>
              </dialog>
              -->
              <!-- H) Attendance -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom: 10px;"> H) Attendance <i class="icofont-arrow-down"></i></summary>                        
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > On Campus Learning <input type="checkbox" name="attendence[1]" value="on campus" style="margin-left:10px ;" > </a>  </li>                                  
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Online Learning <input type="checkbox" name="attendence[2]"  value="online" style="margin-left:10px ;" > </a>  </li>                                                            
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Blended Learning <input type="checkbox" name="attendence[3]" value="blended" style="margin-left:10px ;" > </a>  </li>                                                            
                  </ul>                        
                </details>
              </dialog>

              <!-- I) Special Programes -->                                                      
              <dialog class="Note" style="margin-left:-10px;" open>
                <details>
                  <summary class='MCriT' style="font-size:15px; margin-bottom:10px;"> I) Special Programes <i class="icofont-arrow-down"></i></summary>
                    <!-- Main Category List -->                                                
                    <ul id='catListM' class="innerCities" style="text-indent:0px;">                                                                                                                
                      <li class='Nund' id='cities' style="margin-left:20px; width:auto" style="border:none;" > <a href="#criM" > Joint Programmes <input type="checkbox" name="joint_programmes" style="margin-left:10px ;" > </a>  </li>                                                            
                  </ul>                        
                </details>
              </dialog>
              <input style="background-color:tomato; border-radius:10px; width:50%; color:white" type="submit" value="Filter"/>
              
            </div>
            </form>