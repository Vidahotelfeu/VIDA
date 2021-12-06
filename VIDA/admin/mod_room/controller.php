<?php 
require_once("/app/includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;

	case 'editimage' :
	editImg();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
	 
			
			if ($_POST['ROOM'] == "" OR $_POST['ROOMNUM'] == "" OR $_POST['PRICE'] == "") {
			 
					message("All fields required!", "error");
					redirect("index.php?view=add");
				
			}else{
				$room = new Room();
				$res = $room->find_all_room($_POST['ROOM']);			
				if ($res >=1) {
					message("Room name already exist!", "error");
					redirect("index.php?view=add");
				}else{
				$location = '';
				if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
						$file=$_FILES['image']['tmp_name'];
						$image= $_FILES['image']['tmp_name'];
						$image_name= $_FILES['image']['name'];
						$image_size= getimagesize($_FILES['image']['tmp_name']);
						
						if ($image_size==FALSE) {
							message("That's not an image!");
							redirect("index.php?view=add");
					   }else{
						
							
							$location="rooms/".$image_name;
							move_uploaded_file($image,"rooms/".$image_name);
						}
				}
					 
				$room->ROOMNUM 		=	$_POST['ROOMNUM'];
				$room->ROOM 		=	$_POST['ROOM'];
				$room->ACCOMID 		=	$_POST['ACCOMID'];
				$room->ROOMDESC 	=	$_POST['ROOMDESC'];
				$room->NUMPERSON 	=	$_POST['NUMPERSON'];
				$room->PRICE 		=	$_POST['PRICE'];
 				$room->ROOMIMAGE    = $location;
 				$room->OROOMNUM 	=	$_POST['ROOMNUM'];
 				$room->RateType		=	$_POST['RATETYPE'];
 				$room->SeasonName	=	$_POST['SEASONNAME'];
 				$room->Amenities	=	$_POST['AMMENITIES'];
				$room->RateXtraAdult	=	$_POST['RATEXTRAADULT'];
				$room->RateXtraKid	=	$_POST['RATEXTRAKID'];

				$istrue = 1;

						@$ROOMNUM =	$_POST['ROOMNUM'];
						@$ROOM = $_POST['ROOM'];
						@$ACCOMID =	$_POST['ACCOMID'];
						@$ROOMDESC 	= $_POST['ROOMDESC'];
						@$NUMPERSON = $_POST['NUMPERSON'];
						@$PRICE = $_POST['PRICE'];
		 				@$ROOMIMAGE = $location;
		 				@$OROOMNUM 	= $_POST['ROOMNUM'];
		 				@$RateType = $_POST['RATETYPE'];
		 				@$SeasonName = $_POST['SEASONNAME'];
		 				@$Amenities	= $_POST['AMMENITIES'];
						@$RateXtraAdult	= $_POST['RATEXTRAADULT'];
						@$RateXtraKid =	$_POST['RATEXTRAKID'];

						global $mydb;
					 	$sql = "INSERT INTO tblroom (ROOMNUM, ACCOMID, ROOM, ROOMDESC, NUMPERSON, PRICE, ROOMIMAGE, OROOMNUM, RoomTypeID, RateType, SeasonName, Amenities, RateXtraAdult, RateXtraKid) VALUES ('$ROOMNUM','$ACCOMID','$ROOM','$ROOMDESC','$NUMPERSON','$PRICE','$ROOMIMAGE','$OROOMNUM','0','$RateType','$SeasonName','$Amenities','$RateXtraAdult','$RateXtraKid')";  // Booking_id = GUEST NUMBER;
      					$mydb->setQuery($sql);
      					$mydb->executeQuery(); 

					 if ($istrue == 1){

					 	message("New [". $_POST['ROOM'] ."] created successfully!", "success");
					 	redirect('index.php');
					 	
					 }
				}	  
			}
  		}
//}
//function to modify rooms

 function doEdit(){


           		$room = new Room();
           		$location = '';
				if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
					$file=$_FILES['image']['tmp_name'];
					$image= $_FILES['image']['tmp_name'];
					$image_name= $_FILES['image']['name'];
					$image_size= getimagesize($_FILES['image']['tmp_name']);
					
					if ($image_size==FALSE) {
						message("That's not an image!");
						redirect("index.php?view=edit");
				   }else{
					
						
						$location="rooms/".$image_name;
						$move = move_uploaded_file($image,"rooms/".$image_name);
					}
					}
				$room->ROOMNUM 		=	$_POST['ROOMNUM'];
				$room->ROOM 		=	$_POST['ROOM'];
				$room->ACCOMID 		=	$_POST['ACCOMID'];
				$room->ROOMDESC 	=	$_POST['ROOMDESC'];
				$room->NUMPERSON 	=	$_POST['NUMPERSON'];
				$room->PRICE 		=	$_POST['PRICE'];
				$room->OROOMNUM 	=	$_POST['ROOMNUM'];
				if(!empty($location))
 				$room->ROOMIMAGE    = $location;
				
				$room->update($_POST['ROOMID']); 
				
			 	message($_POST['ROOM'] ." Upadated successfully!", "success");
			 	unset($_SESSION['id']);
			 	redirect('index.php');
				 
}

function doDelete(){
@$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$rm = new Room();
		$rm->delete($id[$i]);
	}

		message("Room already Deleted!","info");
		redirect('index.php');
 }
 
 //function to modify picture
 
function editImg (){
		if (!isset($_FILES['image']['tmp_name'])) {
			message("No Image Selected!", "error");
			redirect("index.php?view=list");
		}else{
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			
			if ($image_size==FALSE) {
				message("That's not an image!");
				redirect("index.php?view=list");
		   }else{
			
		
				$location="rooms/".$_FILES["image"]["name"];
				

	 				$rm = new Room();
	          		$rm_id		= $_POST['id'];
				
			    	move_uploaded_file($_FILES["image"]["tmp_name"],"rooms/".$_FILES["image"]["name"]);
					
					$rm->ROOMIMAGE = $location;
					$rm->update($rm_id); 
					
				 	message("Room Image Upadated successfully!", "success");
				 	unset($_SESSION['id']);
				 	 redirect("index.php");
 			}
 		}
 }			 

function _deleteImage($catId)
{
    // we will return the status
    // whether the image deleted successfully
    $deleted = false;

	// get the image(s)
    $sql = "SELECT * 
            FROM room
            WHERE roomNo ";
	
	if (is_array($catId)) {
		$sql .= " IN (" . implode(',', $catId) . ")";
	} else {
		$sql .= " = {$catId}";
	}	

    $result = dbQuery($sql);
    
    if (dbNumRows($result)) {
        while ($row = dbFetchAssoc($result)) {
		extract($row);
	        // delete the image file
    	    $deleted = @unlink($roomImage);
		}	
    }
    
return $deleted;
}



?>
