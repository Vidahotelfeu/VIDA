<?php
require_once("/app/includes/initialize.php");

if (isset($_POST['submit'])){

  @$arival   = $_SESSION['from']; 
  @$departure = $_SESSION['to'];
  @$ROOMID = $_SESSION['ROOMID'];

	 @$_SESSION['name']   		= $_POST['name'];
	 @$_SESSION['last']   		= $_POST['last'];
	 @$_SESSION['dbirth']   		= $_POST['dbirth'];
	 @$_SESSION['nationality']   = $_POST['nationality'];
	 @$_SESSION['city']   		= $_POST['city'];
	 @$_SESSION['address'] 		= $_POST['address'];
	 @$_SESSION['company']  		= $_POST['company'];
	 @$_SESSION['caddress']  	= $_POST['caddress'];
	 @$_SESSION['zip']   		= $_POST['zip'];
	 @$_SESSION['phone']   		= $_POST['phone'];
	 @$_SESSION['cemail']		= $_POST['cemail'];
	 @$_SESSION['username']		= $_POST['username'];
	 @$_SESSION['pass']  		= $_POST['pass'];
	 @$_SESSION['pending']  		= 'pending';

	 
	  	 @$A = 0;
         @$B = $_POST['name']; 
         @$C = $_POST['last'];
         @$D = $_POST['city'];
         @$E = $_POST['address'];
         @$F = $_POST['dbirth'];
         @$G = $_POST['phone'];
         @$H = $_POST['nationality'];
         @$I = $_POST['company'];
         @$J = $_POST['caddress'];
         @$K = 1;
         @$L = $_POST['cemail'];
         @$M = $_POST['username'];
         @$N = sha1($_SESSION['pass']);
         @$O = $_POST['zip'];

      
      $sql = "INSERT INTO `tblguest`(`REFNO`, `G_FNAME`, `G_LNAME`, `G_CITY`, `G_ADDRESS`, `DBIRTH`, `G_PHONE`, `G_NATIONALITY`, `G_COMPANY`, `G_CADDRESS`, `G_TERMS`, `G_EMAIL`, `G_UNAME`, `G_PASS`, `ZIP`) VALUES ('0','$B','$C','$D','$E','$F','$G','$H','$I','$J','1','$L','$M','$N','$O')";
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 




      $sql = "UPDATE `tblauto` SET `start` = `start` + 1 WHERE `autoid`=1";
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 
redirect('index.php?view=payment');
}

?>

			 
					<?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
							echo '<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
								echo '<li>',$msg,'</li>'; 
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
						}
					?> 
					


		<form class="form-horizontal" action="personalinfo.php" method="post"  name="personal" >    

					  <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "name">FIRST NAME:</label>
			              <div class="col-md-12">
			              	<input name="" type="hidden" value="">
			                <input name="name" type="text" class="form-control input-sm" id="name" />
			              </div>
			            </div>
			          </div> 

			            <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "last">LAST NAME:</label>
			              <div class="col-md-12">
			                <input name="last" type="text" class="form-control input-sm" id="last" />
			              </div>
			            </div>
			          </div>

			           <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "city">CITY:</label>

			              <div class="col-md-12">
			                <input name="city" type="text" class="form-control input-sm" id="city" />
			              </div>
			            </div>
			          </div>
			           <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "address">ADDRESS:</label>
			              <div class="col-md-12">
			                <input name="address" type="text" class="form-control input-sm" id="address" />
			              </div>
			            </div>
			          </div> 

			            <div class="form-group  ">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "dbirth">DATE OF BIRTH:</label>
			              <div class="col-md-12 input-group">
			                 <input type="text" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
			                       data-link-format="yyyy-mm-dd"
			                       name="dbirth" id="dbirth" 
			                       value="" 
			                        readonly="true" class="dbirth form-control  input-sm">
			                <span class="input-group-btn">
			                    <i class="fa  fa-calendar" ></i> 
			                </span>  
			              </div>
			            </div>
			          </div>
			           <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "phone">PHONE:</label>
			              <div class="col-md-12">
			                <input name="phone" type="text" class="form-control input-sm" id="phone" />
			              </div>
			            </div>
			           </div>

			           <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "nationality">NATIONALITY:</label>
			              <div class="col-md-12">
			                <input name="nationality" type="text" class="form-control input-sm" id="nationality" />
			              </div>
			            </div>
			          </div>
			         
			             <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "company">COMPANY:</label>
			              <div class="col-md-12">
			                <input name="company" type="text" class="form-control input-sm" id="company" />
			              </div>
			            </div>
			          </div>
			              <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "caddress">ADDRESS:</label>
			              <div class="col-md-12">
			                <input name="caddress" type="text" class="form-control input-sm" id="caddress" />
			              </div>
			            </div>
			          </div>
			    
			              
			          <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "cemail">E-MAIL:</label>
			              <div class="col-md-12">
			                <input name="cemail" type="email" class="form-control input-sm" id="cemail" />
			              </div>
			            </div>
			          </div>
			            <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "username">USERNAME:</label>
			              <div class="col-md-12">
			                <input name="username" type="text" class="form-control input-sm" id="username" />
			              </div>
			            </div>
			       		 </div>
		 
			          <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "password">PASSWORD:</label>
			              <div class="col-md-12">
			                <input name="pass" type="password" class="form-control input-sm" id="password" />
			              </div>
			            </div>
			          </div>


			          <div class="form-group">
			            <div class="col-md-12">
			              <label class="col-md-4 control-label" for=
			              "zip">ZIP CODE:</label>
			              <div class="col-md-12">
			                <input name="zip" type="text" class="form-control input-sm" id="zip" />
			              </div>
			            </div>
			          </div>		
  				 <br></br>
				 <div class="form-group">
			        <div class="col-md-12"> 
			        	 <div class="col-md-12">
			        	 		I <input type="checkbox" name="condition" value="checkbox" />
					 <small>Agree the <a class="toggle-modal"  onclick="OpenPopupCenter('terms_condition.php','Terms And Codition','600','600')" /> TERMS AND CONDITION </a> of this Hotel</small> 
					 	
			        	 </div>
			
				 
					<div class="col-md-12">
					    	<input name="submit" type="submit" value="Confirm"  class="btn btn-primary" onclick="return personalInfo();"/>
					    </div>
			    </div>
			 </div> 
		</form>     




	<script type="text/javascript">
		
$('.dbirth').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/1960', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });

	</script>