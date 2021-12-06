<br></br>
<form class="form-horizontal well span6" action="controller.php?action=add" enctype="multipart/form-data" method="POST">

	<fieldset>
		<legend>New Room</legend>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOM">ROOM NAME:</label>

              <div class="col-md-8">
              	<input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder=
									  "Room Name" type="text" value="">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ACCOMID">ACCOMODATION:</label>

              <div class="col-md-8">
              <select class="form-control input-sm" name="ACCOMID" id="ACCOMID"> 
                    <option value="None">None</option>
                    <?php
                    $rm = new Accomodation();
                    $cur= $rm->listOfaccomodation();
                    foreach ($cur  as $accom) {
                      echo '<option value='.$accom->ACCOMID.'>'.$accom->ACCOMODATION.' (' . $accom->ACCOMDESC.')</OPTION>';
                    }

                    ?>
                  </select> 
              </div>
            </div>
          </div>

            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMDESC">DESCRIPTION:</label>
              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder=
                    "Description" type="text" value="">
              </div>
            </div>
          </div>

         

        

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "NUMPERSON">NUMBER OF PERSONS:</label>

              <div class="col-md-8">
                <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON" placeholder=
                    "Number of Person" type="text" value="1" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>


           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PRICE">PRICE:</label>

              <div class="col-md-8"> 
                <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder=
									  "Price" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RATETYPE">RATE TYPE:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="RATETYPE" name="RATETYPE" placeholder=
                    "Ratetype" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "SEASONNAME">SEASON TYPE:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="SEASONNAME" name="SEASONNAME" placeholder=
                    "SeasonName" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "AMMENITIES">AMMENITIES:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="AMMENITIES" name="AMMENITIES" placeholder=
                    "Amenities" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RATEXTRAADULT">RATE PER EXTRA ADULT:</label>
              <div class="col-md-8"> 
                <input class="form-control input-sm" id="RATEXTRAADULT" name="RATEXTRAADULT" placeholder=
                    "RateXtraAdult" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RATEXTRAKID">RATE PER EXTRA KID:</label>
              <div class="col-md-8"> 
                <input class="form-control input-sm" id="RATEXTRAKID" name="RATEXTRAKID" placeholder=
                    "RateXtraKid" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

            <div class="form-group">
              <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMNUM">ROOM AVAILABILITY COUNTS:</label>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder=
                    "Room #" type="text" value="1">
              </div>
            </div>
          </div>
           
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "image">Upload Image:</label>

              <div class="col-md-8">
              <input type="file" name="image" value="" id="image">
              </div>
            </div>
          </div>

		
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Save</button>
              </div>
            </div>
          </div>

			
	</fieldset>	
	
</form>


</div><!--End of container-->
			
