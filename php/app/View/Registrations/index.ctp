<span class="label label-important" style="float:right; margin:20px;"><sup>* </sup>FIELDS ARE MANDATORY </span>
<div class="well well-small">
 <h2>PG Registration Form</h2>
</div>
<div name="dealerRegestrationForm" id = "dealerRegestrationForm" >
<form name = "registration" action = "" method ="post" enctype="multipart/form-data" id="UserSignupForm" >
<div class="form-horizontal well">
<div class="breadcrumb">
     <h3>PG Information:</h3>
</div><br/>
        <fieldset style="width:90%;">
            <div class="control-group pull-left">
                <label for="first_name" class="control-label">Name Of PG Accomadation:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <input type = "text" class="required" name='pg_name' id = 'pg_name'/>
                </div>
            </div>
            <div class="control-group pull-right">
                <label class="control-label">Contact No- 1<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <input type = "text" class="required number" name='pg_phone_1' id='pg_phone_1' />
                </div>
            </div>
            <div class="clear"></div>
            <div class="control-group pull-left">
                <label class="control-label">Contact No- 2<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <input type = "text" class="required number" name='pg_phone_2' id='pg_phone_2' />
                </div>
            </div>
            <div class="control-group pull-right">
                <label for="pg_state" class="control-label">State:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <select name='pg_state' id= 'pg_state' class="required input-small" style="width:100px;">
						<option value="" >Select</option>
						<?php foreach( $states as $key => $state ) { ?>
							<option value="<?php echo $key ?>"><?php echo $state ?></option>
						<?php } ?>
					</select>
					 <label for="pg_orientation" class="text-error" generated= "true" ></label>
                </div>
            </div>
            <div class="control-group pull-left">
                <label for="pg_pincode" class="control-label">Pin Code:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <input type='text' name='pg_pin' class="required number" id='pg_pin' minlength="6" maxlength="6"/>
                </div>
            </div>
            <div class="clear"></div>
            <div class="control-group pull-right">
                <label for="email" class="control-label">Email:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
					<input type='text' name='pg_email' class="required email" id='pg_email' />
                </div>
            </div>
            <div class="control-group pull-left">
                <label for="location" class="control-label">Location:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
					<input type='text' name='pg_location' class="required" id='pg_location' />
                </div>
            </div>
            <div class="clear"></div>
            <div class="control-group pull-right">
                <label for="orientation" class="control-label">Orientation:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
					<select name='pg_orientation' id= 'pg_orientation' class="required input-small" style="width:218px;">
						<option value="" >Select</option>
						<option value="N">North</option>
						<option value="S">South</option>
						<option value="E">East</option>
						<option value="W">West</option>
					</select>
					 <label for="pg_orientation" class="text-error" generated= "true" ></label>
                </div>
            </div>
            <div class="control-group pull-left">
                <label for="pg_address" class="control-label">Address:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                    <textarea name='pg_address' class="required" id='pg_address' cols='5' rows='5' ></textarea>
                </div>
            </div>
            </div>
<div class="form-horizontal well">
<div class="breadcrumb">
 <h3>Finance Information:</h3>
</div><br/>
		<fieldset style="width:90%;">
             <div class="control-group input-append">
                <label for="min_rent" class="control-label">Minimum rent:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                   <input type='text' name='min_rent' class="required number" id='min_rent' />
                </div>
            </div>
            <div class="control-group" >
                <label for="deposit" class="control-label">Deposit:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='deposit' class="required deposit"  type='radio' value='true' style="margin:-3px 5px 0 0;" >Required
					<span style="margin-left:10px; display:inline-block;">
					<input name='deposit' class="required deposit"  type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Required</span>
					 <label for="deposit" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group hide" id="deposit-amt-div">
                <label for="deposit_amt" class="control-label">Deposit Amount:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input type='text' name='deposit_amt' class="required number" id='deposit_amt' />
				</div>
            </div>
            <div class="control-group" >
                <label for="food" class="control-label">Food available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='food' class="required food" type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='food' class="required food" type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="food" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group hide" id="food-amt-div" >
                <label for="food_amt" class="control-label">Food Amount:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input type='text' name='food_amt' class="required number" id='food_amt' />
				</div>
            </div>
        </fieldset>
</div>
<div class="form-horizontal well">
<div class="breadcrumb">
 <h3>Room Details:</h3>
</div><br/>
		<fieldset style="width:90%;">
             <div class="control-group input-append">
                <label for="room_type" class="control-label">Room Occupancy type:<font color = "red"><sup>*</sup></font></label>
                <div class="controls">
                   <select name='room_type' id= 'room_type' class="required input-small" style="width:100px;">
						<option value="" >Select</option>
						<option value="single">Single Room</option>
						<option value="shared">Shared Room</option>
					</select>
					 <label for="room_type" class="text-error" generated= "true" ></label>
                </div>
            </div>
            <div class="control-group" >
                <label for="tv" class="control-label">Tv Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='tv' class="required" id='tv' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='tv' class="required" id='tv' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="tv" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="gender_preffred" class="control-label">Gender Prefered:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='gender_preffred' class="required" id='gender_preffred' type='radio' value='male' style="margin:-3px 5px 0 0;" >Male
					<span style="margin-left:10px; display:inline-block;">
					<input name='gender_preffred' class="required" id='gender_preffred' type='radio' style="margin:-3px 5px 0 0;" value='female' >Female</span>
					<label for="gender_preffred" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="suitable_for" class="control-label">Suitable For Profession:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<select name='suitable_for' id= 'suitable_for' class="required input-small" style="width:100px;">
						<option value="" >Select</option>
						<option value="job">Job</option>
						<option value="student">Student</option>
						<option value="both">Both</option>
					</select>
				</div>
            </div>
            <div class="control-group" >
                <label for="pg_capacity" class="control-label">Pg Capicity:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input type='text' name='pg_capacity' class="required number" id='pg_capacity' />
				</div>
            </div>
            <div class="control-group" >
                <label for="clean_routine" class="control-label">Cleanliness Routine:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<select name='clean_routine' id= 'clean_routine' class="required input-small" style="width:100px;">
						<option value="" >Select</option>
						<option value="daily">Daily</option>
						<option value="weekly">Weekly</option>
						<option value="self">Self</option>
					</select>
				</div>
            </div>
            <div class="control-group" >
                <label for="almirah" class="control-label">Almirah Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='almirah' class="required" id='almirah' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='almirah' class="required" id='almirah' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="almirah" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="computer" class="control-label">Computer Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='computer' class="required" id='computer' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='computer' class="required" id='computer' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="computer" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="study_table" class="control-label">Study Table Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='study_table' class="required" id='study_table' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='study_table' class="required" id='study_table' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="study_table" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="internet" class="control-label">Internet Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='internet' class="required" id='internet' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='internet' class="required" id='internet' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="internet" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="wifi" class="control-label">Wi-Fi Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='wifi' class="required" id='wifi' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='wifi' class="required" id='wifi' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="wifi" class="text-error" generated= "true" ></label>
				</div>
            </div>
        </fieldset>
</div>
<div class="form-horizontal well">
<div class="breadcrumb">
 <h3>Kitchen Details:</h3>
</div><br/>
		<fieldset style="width:90%;">
            <div class="control-group" >
                <label for="purification_system" class="control-label">Water purification System Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='purification_system' class="required" id='purification_system' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='purification_system' class="required" id='purification_system' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="purification_system" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="fridge" class="control-label">Fridge Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='fridge' class="required" id='fridge' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='fridge' class="required" id='fridge' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="fridge" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="gas_stove" class="control-label">Gas Stove Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='gas_stove' class="required" id='gas_stove' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='gas_stove' class="required" id='gas_stove' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="gas_stove" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="induction_cooker" class="control-label">Induction Cooker Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='induction_cooker' class="required" id='induction_cooker' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='induction_cooker' class="required" id='induction_cooker' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="induction_cooker" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="microwave_oven" class="control-label">Microwave Oven Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='microwave_oven' class="required" id='microwave_oven' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='microwave_oven' class="required" id='microwave_oven' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="microwave_oven" class="text-error" generated= "true" ></label>
				</div>
            </div>
        </fieldset>
</div>
<div class="form-horizontal well">
<div class="breadcrumb">
 <h3>Bathroom:</h3>
</div><br/>
		<fieldset style="width:90%;">
            <div class="control-group" >
                <label for="shower" class="control-label">Shower Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='shower' class="required" id='shower' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='shower' class="required" id='shower' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="shower" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="washing_machine" class="control-label">Washing Machine Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='washing_machine' class="required" id='washing_machine' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='washing_machine' class="required" id='washing_machine' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="washing_machine" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="bucket" class="control-label">Buckets and Hand mugs Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='bucket' class="required" id='bucket' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='bucket' class="required" id='bucket' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="bucket" class="text-error" generated= "true" ></label>
				</div>
            </div>
        </fieldset>
</div>
<div class="form-horizontal well">
<div class="breadcrumb">
 <h3>Other Features:</h3>
</div><br/>
		<fieldset style="width:90%;">
            <div class="control-group" >
                <label for="nearest_metro" class="control-label">Distance From Nearest metro( in Km ):<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='nearest_metro' class="required number" id='nearest_metro' type='text'>
				</div>
            </div>
            <div class="control-group" >
                <label for="metro_name" class="control-label">Nearest Metro Station:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='metro_name' class="required" id='metro_name' type='text'>
				</div>
            </div>
            <div class="control-group" >
                <label for="parking_car" class="control-label">Car Parking Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='parking_car' class="required" id='parking_car' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='parking_car' class="required" id='parking_car' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="parking_car" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="parking_bike" class="control-label">Bike Parking Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='parking_bike' class="required" id='parking_bike' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='parking_bike' class="required" id='parking_bike' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="parking_bike" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="laundry" class="control-label">Laundry Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='laundry' class="required" id='laundry' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='laundry' class="required" id='laundry' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
					<label for="laundry" class="text-error" generated= "true" ></label>
				</div>
            </div>
            <div class="control-group" >
                <label for="power_backup" class="control-label">Power Backup Available:<font color = "red"><sup>*</sup></font></label>
				<div class="controls">
					<input name='power_backup' class="required" id='power_backup' type='radio' value='true' style="margin:-3px 5px 0 0;" >Available
					<span style="margin-left:10px; display:inline-block;">
					<input name='power_backup' class="required" id='power_backup' type='radio' style="margin:-3px 5px 0 0;" value='false' >Not Available</span>
				</div>
				<label for="power_backup" class="text-error" generated= "true" ></label>
            </div>
            <div class="control-group pull-left">
                <label for="comment" class="control-label">Comments:</label>
                <div class="controls">
                    <textarea name='comment' id='comment' cols='5' rows='5' ></textarea>
                </div>
            </div>
            <div class="clear"></div>
            <div class="pull-right">
   <input type ="submit" name = "submit" value="Proceed Next" id = 'formSubmit' class="btn btn-success" style="float:right;">
</div>
        </fieldset>
</div>

</form>
</div>
<script>
	jQuery(document).ready( function() {
		jQuery('.deposit').click( function() {
				if( jQuery(this).val() =='true' ) jQuery('#deposit-amt-div').show();
				else jQuery('#deposit-amt-div').hide();
		});
		jQuery('.food').click( function() {
				if( jQuery(this).val() =='false' ) jQuery('#food-amt-div').show();
				else jQuery('#food-amt-div').hide();
		});
	});
</script>
