<?php
// session_start();
include 'db_connect.php';
include 'aheader.php';
if(isset($_SESSION['l_id']))
{
  $l_id =$_SESSION['l_id'];
  //var_dump($l_id);


}
?>
<!-- team -->
   <div class="team" id="team">
      <div class="container">
      <div class="heading">
         <h3>Our Dealers</h3>
      </div>
         <div class="wthree_team_grids">
            <div class="col-md-3 wthree_team_grid">
               <div class="hovereffect">
                  <img src="images/team1.jpg" alt=" " class="img-responsive" />
                  <div class="overlay">
                     <h6>Transporters</h6>
                     <div class="rotate">
                        <p class="group1">
                           <a href="#">
                              <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </p>
                           <hr>
                           <hr>
                        <p class="group2">
                           <a href="#">
                              <i class="fa fa-instagram"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-dribbble"></i>
                           </a>
                        </p>
                     </div>
                  </div>
               </div>
               <h4>Max Payne</h4>
               <p>Transport Dealer</p>
            </div>
            <div class="col-md-3 wthree_team_grid">
               <div class="hovereffect">
                  <img src="images/team2.jpg" alt=" " class="img-responsive" />
                  <div class="overlay">
                     <h6>Transporters</h6>
                     <div class="rotate">
                        <p class="group1">
                           <a href="#">
                              <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </p>
                           <hr>
                           <hr>
                        <p class="group2">
                           <a href="#">
                              <i class="fa fa-instagram"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-dribbble"></i>
                           </a>
                        </p>
                     </div>
                  </div>
               </div>
               <h4>Michael Lii</h4>
               <p>Transport Dealer</p>
            </div>
            <div class="col-md-3 wthree_team_grid">
               <div class="hovereffect">
                  <img src="images/team3.jpg" alt=" " class="img-responsive" />
                  <div class="overlay">
                     <h6>Transporters</h6>
                     <div class="rotate">
                        <p class="group1">
                           <a href="#">
                              <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </p>
                           <hr>
                           <hr>
                        <p class="group2">
                           <a href="#">
                              <i class="fa fa-instagram"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-dribbble"></i>
                           </a>
                        </p>
                     </div>
                  </div>
               </div>
               <h4>Mark</h4>
               <p>Transport Dealer</p>
            </div>
            <div class="col-md-3 wthree_team_grid">
               <div class="hovereffect">
                  <img src="images/team4.jpg" alt=" " class="img-responsive" />
                  <div class="overlay">
                     <h6>Transporters</h6>
                     <div class="rotate">
                        <p class="group1">
                           <a href="#">
                              <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </p>
                           <hr>
                           <hr>
                        <p class="group2">
                           <a href="#">
                              <i class="fa fa-instagram"></i>
                           </a>
                           <a href="#">
                              <i class="fa fa-dribbble"></i>
                           </a>
                        </p>
                     </div>
                  </div>
               </div>
               <h4>John smith</h4>
               <p>Transport Dealer</p>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
<!-- //team -->
<?php

include 'footer.php';
?>