<?php
/**
* add.php view page for generic Venue controller
*
* views/venues/add.php
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Venues
* @author Anna Atiagina, Jenny Crimp
* @version 2.0 2015/08/11
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Venues_model.php
* @see Venues.php
* @todo none
*/

$this->load->view($this->config->item('theme').'header');
$attributes = array('class'=>'form-horizontal', 'role'=>'form');
?>

<div class="container">
  <div class="col-lg-10">
      <!--error messages for form validation -->

      <?php echo form_open('venues/add', $attributes); ?>
        <!--<form class="form-horizontal" role="form" method="post">-->

            <fieldset>
                <div class="form-group">
                <h1><strong>Add a Startup Venue</strong></h1><br />
                    <p>Job seekers and startups alike need public places to meet with potential employers and team members. We hope to provide them with great places they can gather and do business. Or, perhaps, to have something delicious to drink and to brainstorm.</p>
                    <p>Please add your gathering place below. Thanks for the input!</p>
                <legend><h3><strong>Venue Information</strong></h3></legend>

            </div>
            <div class="form-group">
                <label for="VenueName" class="col-lg-3 control-label" required><em>Venue Name</em></label>
                    <div class="col-md-6">

              <?php echo form_error('VenueName'); ?>
                        <input type="text" class="form-control" id="VenueName" name="VenueName" placeholder="Venue Name" value="<?php echo set_value('VenueName'); ?>">
                    </div>
            </div>

            <div class="form-group">
                <label for="VenueAddress" class="col-lg-3 control-label" required><em>Venue Address</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('VenueAddress'); ?>
                        <input type="text" class="form-control" id="VenueAddress" name="VenueAddress" placeholder="Venue Address" value="<?php echo set_value('VenueAddress'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="City" class="col-lg-3 control-label"><em>City</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('City'); ?>
                        <input type="text" class="form-control" id="City" name="City" placeholder="City" value="<?php echo set_value('City'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="State" class="col-lg-3 control-label"><em>State</em></label>
                    <div class="col-md-6">
                       <select class="form-control" id="state" name="state">
                        <option value="">State</option>
                        <option value="AK">Alaska</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="AZ">Arizona</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DC">District of Columbia</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="IA">Iowa</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MD">Maryland</option>
                        <option value="ME">Maine</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MO">Missouri</option>
                        <option value="MS">Mississippi</option>
                        <option value="MT">Montana</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="NE">Nebraska</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NV">Nevada</option>
                        <option value="NY">New York</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VA">Virginia</option>
                        <option value="VT">Vermont</option>
                        <option value="WA">Washington</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WV">West Virginia</option>
                        <option value="WY">Wyoming</option>
                    </select>



                    </div>
            </div>
            <div class="form-group">
                <label for="ZipCode" class="col-lg-3 control-label"><em>Zip Code</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('ZipCode'); ?>
                        <input type="text" class="form-control" id="ZipCode" name="ZipCode" placeholder="Zip Code" value="<?php echo set_value('ZipCode'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="VenuePhone" class="col-lg-3 control-label"><em>Phone number</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('VenuePhone'); ?>
                        <input type="text" class="form-control" id="VenuePhone" name="VenuePhone" placeholder="Venue Phone Number" value="<?php echo set_value('VenuePhone'); ?>">
                    </div>
             </div>
            <div class="form-group">
                <label for="VenueWebsite" class="col-lg-3 control-label"><em>Website</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="VenueWebsite" name="VenueWebsite" placeholder="Venue Website" value="<?php echo set_value('VenueWebsite'); ?>">
                    </div>
            </div>
           <div class="form-group">
            <label for="VenueHours" class="col-lg-3 control-label"><em>Hours</em></label>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="VenueHours" name="VenueHours" placeholder="Venue Hours" value="<?php echo set_value('VenueHours'); ?>">
                </div>
           </div>
          <div class="form-group">
              <label for="VenueTypeKey" class="col-lg-3 control-label"><em>Venue Type </em>
              </label>
                  <div class="col-md-6">
                      <select class="form-control" id="VenueTypeKey" name="VenueTypeKey">
                          <option value="select">Select One</option>
                          <option value="1" <?php echo  set_select('VenueTypeKey', '1'); ?>>Cafe/Coffee Shop</option>
                          <option value="2" <?php echo  set_select('VenueTypeKey', '2'); ?>>Library</option>
                          <option value="3" <?php echo  set_select('VenueTypeKey', '3'); ?>>School</option>
                          <option value="4" <?php echo  set_select('VenueTypeKey', '4'); ?>>Community Center</option>
                          <option value="5" <?php echo  set_select('VenueTypeKey', '5'); ?>>Shared Work Space</option>
                          <option value="6" <?php echo  set_select('VenueTypeKey', '6'); ?>>Other</option>
                      </select>
                  </div>
                </div>

        </fieldset>

        <fieldset>
        <legend><h3><strong>Venue Amenities</strong></h3></legend>
           <div class="form-group">
              <label for="Food"><em>Select Your Venue Amenities</em></label>

              <div class="checkbox">
                <label style="background-color:mintcream"><input type="checkbox" name="Food" value="Yes"<?php echo set_radio('Food', 'Yes', TRUE); ?>>Food</label>
              </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input type="checkbox" name="Bar" value="Yes"<?php echo set_radio('Bar', 'Yes', TRUE); ?>>Bar</label>
              </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input type="checkbox" name="Outlets" value="Yes" <?php echo set_radio('Outlets', 'Yes', TRUE); ?>>Electrical Outlets</label>
                          </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input class="form-check-input" type="checkbox" name="WiFi" value="Yes" <?php echo set_radio('WiFi', 'Yes', TRUE); ?>>WiFi</label>
              </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input class="form-check-input" type="checkbox" name="Outdoor" value="Yes" <?php echo set_radio('Outdoor', 'Yes', TRUE); ?>>Outdoor Seating</label>
          </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input type="checkbox" name="Wheelchair" value="Yes" <?php echo set_radio('Wheelchair', 'Yes', TRUE); ?>>Wheelchair Access</label>
          </div>

              <div class="checkbox">
                <label style="background-color:mintcream"><input type="checkbox" name="Parking" value="Yes" <?php echo set_radio('Parking', 'Yes', TRUE); ?>>Parking</label>
          </div>

               </div>
            </div>

                        <div class="border2">
                        <button type="submit">Submit</button>
                        </div>
               </div>

            </div>
      </fieldset>

    </div>
</div>

<?php
$this->load->view($this->config->item('theme').'footer'); ?>
