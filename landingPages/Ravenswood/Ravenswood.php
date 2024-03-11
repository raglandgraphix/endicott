<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenswood Ironspot</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <style>
        .container-fluid{
            padding: 0;
        }
        .navbar{
            height: 100px;
            padding:0px;
            margin:0px;
            width: 100vw;
        }
        #logo{
            max-height: 50px;
            cursor:pointer;
        }
        .socialIcon{
            height: 35px;
        }
        #information{
            /* position: fixed;
            
            margin-top: 100px;
            margin-left: 100px; */
            z-index: 1;
            
            height: 320px;
           
        }
        

    </style>
</head>
<body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <form method='post' action="" class="">
                <div class="form-group mb-3"><label class="me-2">First Name</label><input class="form-control"  type="text" name="firstName" value=""></div>
                <div class="form-group mb-3 "><label class="me-2">Last Name</label><input class="form-control" type="text" name="lastName" value=""></div>
                <div class="form-group mb-3"><label class="me-2">Company</label><input class="form-control" type="text" name="company" value=""></div>
                <div class="form-group mb-3"><label class="me-2">Email Address</label><input class="form-control" type="text" name="email" value=""></div>
                <div class="form-group"><label class="me-2">City</label><input class="form-control" type="text" name="city" value="">
                <label>State or Province</label>
                <select class="mt-2" name="state" value="">
                    <optgroup label="United States">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>Arkansas</option>
                    <option>California</option>
                    <option>Colorado</option>
                    <option>Connecticut</option>
                    <option>Deleware</option>
                    <option>Florida</option>
                    <option>Georgia</option>
                    <option>Hawaii</option>
                    <option>Idaho</option>
                    <option>Illinois</option>
                    <option>Indiana</option>
                    <option>Iowa</option>
                    <option>Kansas</option>
                    <option>Kentucky</option>
                    <option>Louisiana</option>
                    <option>Maine</option>
                    <option>Maryland</option>
                    <option>Massechusetts</option>
                    <option>Michigan</option>
                    <option>Nebraska</option>
                    <option>Minnesota</option>
                    <option>Mississippi</option>
                    <option>Missouri</option>
                    <option>Montana</option>
                    <option>Nebraska</option>
                    <option>Nevada</option>
                    <option>New Hampshire</option>
                    <option>New Jersey</option>
                    <option>New Mexico</option>
                    <option>New York</option>
                    <option>North Carolina</option>
                    <option>North Dakota</option>
                    <option>Ohio</option>
                    <option>Oklahoma</option>
                    <option>Oregon</option>
                    <option>Pennsylvania</option>
                    <option>Rhode Island</option>
                    <option>South Carolina</option>
                    <option>South Dakota</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Utah</option>
                    <option>Vermont</option>
                    <option>Virginia</option>
                    <option>Washington</option>
                    <option>West Virgina</option>
                    <option>Wisconsin</option>
                    <option>Wyoming</option>
                </optgroup>
                <optgroup label="Canadian Province">
                    <option>Alberta</option>
                    <option>British Columbia</option>
                    <option>Manitoba</option>
                    <option>New brunswick</option>
                    <option>Newfoundland</option>
                    <option>Labrador</option>
                    <option>Nova Scotia</option>
                    <option>Ontario</option>
                    <option>Prince Edward Island</option>
                    <option>Quebec</option>
                    <option> Saskatchewan</option>
                    <option>Yukon</option>
                </optgroup>
                </select></div>
                <p class="inline">By checking this box, you agree to be contacted by Endicott.</p><input type="checkbox" required name="agree" /><br>
                <input  type="submit"  value="SUBMIT">
                
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary" onclick="thankyou()" >Submit</button> -->
          
        </div>
      </div>
    </div>
 
</div>

   
  
        <div class="navbar border-bottom border-dark d-flex justify-content-center">          
            <img id="logo" src="assets/endicottLogoBlack.png" onclick='window.open("https://www.endicott.com/","_blank")'/>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10 text-center ">
                    <h1 class="text-uppercase">Ravenswood Ironspot</h1>
                    <p>Drawing inspiration from the iridescent feathers of a raven, this one-of-a-kind look gives off fleeting shades of black, gunmetal, silver, and indigo.  Endicott’s Ravenswood Ironspot is a through body black brick that exhibits a complex and moving blend of natural surface colors without the drawbacks of a coating.</p>
                   
                           
                            <button type="button" class="btn btn-secondary mb-5 " data-bs-toggle="modal" data-bs-target="#exampleModal">Learn More</button>
                           
        
                      
                    <h5 class="text-uppercase">Available in two sizes and two textures</h5>
                </div>
            </div>
           
            <!-- This is where the images will be held-->
            <div class="row d-flex justify-content-center">
               

                <div class="col-5">
                    <div class="card mb-2">
                        <img  class="img-responsive w-100" src="assets/ravenswoodsmofbLarge.jpg"/>
                        <div class="card-body">
                            <h5 class="text-center">Modular - Smooth</h5>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card mb-2">
                        <img  class="img-responsive w-100" src="assets/ravenswoodvelfbLarge.jpg"/>
                        <div class="card-body">
                            <h5 class="text-center">Modular - Velour</h5>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <img  class="img-responsive w-100" src="assets/ravenswoodvelNormanfbLarge.jpg"/>
                        <div class="card-body">
                            <h5 class="text-center">Norman - Velour</h5>
                        </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h3 class="mt-5">Project Spotlight Video</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/705893086?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Endicott Ravenswood Ironspot"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                      </div>        
                </div>
            </div>             -->
            <div class="row mt-5 mb-5 text-center justify-content-center">
                <div class="col-10">
                   
                    <h3>Ravenswood Ironspot Project Photography</h3>
                    <!-- <div class="row">
                        <div class='col-4'>
                            <img class='img-responsive w-100' src='assets/peabody1.jpg'/>
                        </div>
                    </div> -->
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/Dunkin1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="assets/Dunkin2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="assets/Dunkin3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="assets/Dunkin4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/peabody1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/Peabody2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/Peabody3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>
            <!-- <div class="row text-center ">
                <div class="col-12">
                    <button type="button" class="btn btn-secondary mt-5 mb-5" onclick="peaBody()">See More</button>
                </div>
            </div> -->
            <div class="row text-center ">
                <div class="col-12 border bg-secondary">
                <img class="socialIcon mt-2 mb-5 me-3" src="assets/socialIcons/facebook.png" onclick='window.open("https://www.facebook.com/endicottbrick","_blank")'/>
                <img class="socialIcon mt-2 mb-5 me-3" src="assets/socialIcons/blackLinkedIn.png" onclick='window.open("https://www.linkedin.com/company/1242322/","_blank")'/>
                <img class="socialIcon mt-2 mb-5 me-3" src="assets/socialIcons/twitter.png" onclick='window.open("https://twitter.com/EndicottBrick","_blank")'/>
                <img class="socialIcon mt-2 mb-5 me-3" src="assets/socialIcons/Instagram.png" onclick='window.open("https://www.instagram.com/endicottbrick/","_blank")'/>
                <img class="socialIcon mt-2 mb-5 me-3" src="assets/socialIcons/youtube.png" onclick='window.open("https://www.youtube.com/@endicottclayproducts927","_blank")'/>
                <img class="socialIcon mt-2 mb-5 " src="assets/socialIcons/Black_Mortarr_Logo.png" onclick='window.open("https://www.mortarr.com/endicott-clay-products-company/","_blank")'/>
            </div>

            </div>
           
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
           
             var ty = sessionStorage.getItem('val');
            
            
            let thankyou = ()=>{
            //    e.preventDefault();
                alert("Thank You for your submital, someone will be reaching out to you shortly.")
                
            }
        </script>
        <?php
			foreach($_POST as $key => $value){
				$$key = $value;
			};
			
			$emailNote = "The following is a request for Ravenswood information."."\nName:".$firstName." ".$lastName."\nCompany:".$companyName."\nEmail: ".$email."\nCity".$city."\nState".$state;

			 if(isset($_POST['agree'])){
				
				mail("jragland@endicott.com",'Ravenswood Lead',$emailNote);
				$_POST['agree']=0;
				// echo "<script>sessionStorage.setItem('tyVal',1);</script>";
				echo '<script>sessionStorage.setItem("val","yes"); thankyou(); </script>';

			}
            
		?>
         
    
</body>
</html>