<?php
	include_once ( 'inc/config.php' );
	include_once ( 'inc/functions.php' );
	$page_name = 'Harleen Dhillon';
	$page_parent = 'Meet Our Team';
	$page_desc = 'Harleen is currently an Articling Student at The Republic Law and is pursuing her path toward becoming a lawyer in Alberta.';
	$page_image = 'images/Harleen.png';
	
	include_once ( 'inc/head.php' );
?>
<body>
  <app-root _nghost-ruf-c21="" ng-version="15.2.8">
    
	<?php include_once( 'inc/preloader.php' ); ?>	
	<?php include_once( 'inc/nav.php' ); ?>
	
    <router-outlet _ngcontent-ruf-c21=""></router-outlet>
    <app-lawyer-details class="ng-star-inserted">
      <div class="lawyer-details">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-1 col-md-6">
              <div class="attor-details-item">
                <div class="attor-details-name">
                  <h1>Harleen Dhillon</h1>
                  <h3 style="color: #C8B085; padding-bottom: 0px;"></h3>
                </div>
                <img alt="Details" class="lawyer-img" srcset="images/Harleen.Png">
                <div class="attor-details-left">
                  <div class="attor-social-details" style="padding-top: 50px;">
                    <h3>Contact Info</h3>
                    <ul>
                      <li class="ng-star-inserted">
                        <i class="flaticon-call" style="padding-right: 10px;"></i>
                       <!-- <a href="tel:1-587-319-5916 Ext. 103">1-587-319-5916 Ext. 104</a>-->
                      </li>
                      <!--bindings={"ng-reflect-ng-if": "1-587-319-5916 Ext. 104"}-->
                      <li class="ng-star-inserted">
                        <i class="flaticon-email" style="padding-right: 10px;"></i>
                        <a href="mailto:Hdhillon@Republiclaw.ca">Hdhillon@Republiclaw.ca</a>
                      </li>
                      <!--bindings={"ng-reflect-ng-if": "harrieti@republiclaw.ca"}-->
                      <li class="ng-star-inserted">
                        <i style="padding-right: 10px;" class="icofont-linkedin"></i>
                       <!-- <a target="_blank" href="https://ca.linkedin.com/in/david-ike-phd-60897a7" class="ng-star-inserted">LinkedIn Profile</a>-->
                        <!--bindings={"ng-reflect-ng-if": "https://ca.linkedin.com/in/david-ike-phd-60897a7"}-->
                      </li>
                      <!--bindings={"ng-reflect-ng-for-of": "[object Object]"}-->
                    </ul>
                  </div>
                </div>
                <!--<div class="attor-prev">
                  <ul>
                    <li ng-reflect-ng-class="nav-prev" class="nav-prev">
                      <a ng-reflect-router-link="/meet-our-team,4,Harriet Igwe" href="/meet-our-team/0/Ugo%20Ukpabi">Previous</a>
                    </li>
                    <li ng-reflect-ng-class="nav-prev" class="nav-prev">
                      <a ng-reflect-router-link="/meet-our-team,2,Theodore Owar" href="/meet-our-team/2/Theodore%20Oware">Next</a>
                    </li>
                  </ul>
                </div>-->
              </div>
            </div>
            <div class="col-lg-7 col-md-6 ng-star-inserted">
				<div class="attor-details-item">
					<div class="attor-details-right">
						<div class="attor-details-name">
							<h1>Harleen Dhillon</h1>
							<h3 style="color: #C8B085; padding-bottom: 0px;">Student-At-Law</h3>
						</div>
						
						<div class="accordion accordion-flush" id="accordionFlushExample">
							 <div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Biography </button>
								</h2>
								<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										Harleen is currently an Articling Student at The Republic Law and is pursuing her path toward becoming a lawyer in Alberta. Born and raised in Calgary, Alberta, Harleen developed a strong sense of discipline, teamwork, and determination through years of competitive soccer, qualities that continue to shape her professional approach and commitment to client service.
										<br><br>

										Prior to entering the legal profession, Harleen gained valuable professional experience working in the banking sector with RBC, where she developed strong skills in client relations, financial services, and business operations. Her experience in banking has provided her with practical insight into the commercial and financial considerations that often arise in legal matters.
										<br><br>
										
										Harleen also brings a global perspective to her work, having travelled to more than 25 countries and experienced a wide range of cultures and international environments. These experiences have strengthened her interest in international matters and enhanced her ability to work with clients from diverse backgrounds.
										<br><br>

										As part of her articling experience at The Republic Law, Harleen is committed to providing thoughtful, client-focused support while continuing to develop her legal knowledge and advocacy skills. She values professionalism, continuous learning, and building strong relationships with clients and colleagues alike.
										<br><br>
										Outside of work, Harleen enjoys travelling, staying active, and spending time with family and friends.

									</div>
								</div>
							</div>
							<!--  
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Areas of Practice</button>
								</h2>
								<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<ul>
											<li>Litigation</li>
											<li>Personal Injury</li>
											<li>Immigration</li>
											<li>Corporate and Commercial Transactions</li>
											<li>Intellectual Property</li>											
											<li>Privacy Law</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Education</button>
								</h2>
								<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<ul>
											<li>Ph.D. in Corporate & Commercial Law from Abia State University, Nigeria</li>
											<li>LL.M from Queen Mary University of London, United Kingdom</li>
											<li>LL.B (Hons) from the Lagos State University, Nigeria</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Admissions</button>
								</h2>
								<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<ul>
											<li>Nigeria Bar, 2003</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Membership</button>
								</h2>
								<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<ul>
											<li>Law Society of Alberta</li>
											<li>Nigerian Bar Association</li>
											<li>Canadian Bar Association</li>
											<li>International Law Association, Canada</li>
											<li>Calgary Bar Association</li>											
											<li>Member of the Chartered Institute of Arbitrators</li>											
										</ul>
									</div>
								</div>
							</div>
							-->
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingSeven">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">Languages</button>
								</h2>
								<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<ul>
											<li>English</li>
										<!--	<li>Igbo</li>-->
										</ul>
									</div>
								</div>
							</div>							
							
						</div> 
                  
					</div>
				</div>
            </div>
            <!--bindings={"ng-reflect-ng-if": "[object Object]"}-->
          </div>
        </div>
      </div>
    </app-lawyer-details>
	
    <?php include_once( 'inc/footer.php' ); ?>
</body>
