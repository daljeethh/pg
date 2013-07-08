<div class="row"><h3>Get PG - Find your PG </h3></div>
<div class="row">
	<div class="first-span span3 box-color box">
	   <div style="padding:20px;" class="margin-top10">
		   <h4>Find Your PG</h4>
		   <p>Thousands of PG listed</p>
		   <div style="border-bottom: 1px dashed #BABABA;">
			    <div>
			        <select id="city_search" name="city_search">
						<option value="">--Select City--</option>
						<?php foreach( $states as $key => $state ) { ?>
							<option value="<?php echo $key; ?>"><?php echo $state ?></option>
						<?php } ?>
					</select>
				</div>

			    <div class="margin-top5">
			        <select id="budget_search" name="budget_search">
						<option value="">-- Select Budget --</option>
						<option value="0^3">0-3 Thousands</option>				
						<option value="3^5">3-5 Thousands</option>				
						<option value="5^8">5-8 Thousands</option>				
						<option value="8^10">8-10 Thousands</option>				
						<option value="10^15">10-15 Thousands</option>				
						<option value="15^20">15-20 Thousands</option>				
						<option value="20^30">20-30 Thousands</option>				
						<option value="30^99">more than 30 Thousands</option>				
					</select>
			   	</div>
			    <div class="margin-top5">
			        <select id="gender_search" name="gender_search">
						<option value="">-- Gender --</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
			    </div>
			    <div class="margin-top5">
			        <select id="Orientation_search" name="gender_search">
						<option value="">-- Orientation --</option>
						<option value="N">North</option>
						<option value="S">South</option>
						<option value="E">East</option>
						<option value="W">West</option>
					</select>
			    </div>
			    <div class="margin-top10">
			                        <input type="button" class="btn btn-primary" value="Find Used PG" id="btnSearchPG" name="btnSearchPG"> <div class="clearfix"></div>
			    </div>
			    <br>
		    </div>
		    <div class="margin-top5" id="divSearchProfile">
		        <h4>Search by Profile Id</h4>
		        <div>
					<form name = "registration" action = "" method ="post" enctype="multipart/form-data" id="UserSignupForm" >
		            <input type="text" class="required" style="width:190px;" placeholder="Profile Id" id="pgid" name="pgid">
		            &nbsp;
		        </div>
		        <div class="margin-top10">
		            <input type="submit" class="btn btn-primary" value="Go" id="btnSearchProfileId" name="searchpgid">
		        </div>
		        </form>
		    </div>
	  </div>       
  </div>
  <!-- span3 div end here -->
</div>
<!-- row div end here -->
