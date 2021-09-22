<?php 
require_once('functions.php'); 
$db=$conn; // Enter your Connection variable;
$tableName='gallery' ; // Enter your table Name; 
$fetchImage=fetch_image($tableName);
// fetching padination data 
function fetch_image($tableName){
	global $db; $tableName=trim($tableName);
	if(!empty($tableName)){
		if (isset($_GET['category'])) {
			$category=$_GET['category'];
		$query=selectAll('gallery',['sub_category'=>$category]); 
		if ($query) {
			return $query;
			}else{
				echo "No Image is stored in the database";
				}
				}elseif (isset($_GET['sub_category'])) {
					$category=$_GET['sub_category'];
					$query=selectAll('gallery',['category'=>$category]); 
					if ($query) {
						return $query;
						}else{
							echo "No Image is stored in the database";
				}
				}
				else{
					echo "you must declare table name to fetch Image";
				}
			}
		 } ?>