<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index(){
			
		
		if(isset($_POST['submit'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$phone = $_POST['phone'];
			$reg = "";
			
			$data = array('Fname' => $fname, 'Lname' => $lname, 'email' => $email,'dob' => $dob,'pNum' => $phone,'regNum' => $reg);
			
			$this->db->set($data);
			$query = $this->db->insert('under_g');
	
			if(!$query){
				echo "insert not succesful";
			}
			
			$query = $this->db->get_where('under_g',['Fname' => $fname]);
			
			
			foreach($query->result_array() as $stud){
				$stud['id'];
			}


			// generating reg no.....tried using a fucntion but php is telling me my function is undefined
			// which is just weird.
			$yr = date("Y");
        	$format;
			$a = $stud['id'];
        	$len = strlen($a);
        	$count = array();
			
        	if($len == 4){
        	    $count[0] = a;
        	}else{
        	    $j;
        	    for($j = 0; $j < (4 - $len); $j++){
        	        $count[$j] = "0";
        	        if (($j + 1) == (4 - $len)){
        	            $count[$j+1] = $a;
        	        }
        	    }
        	}
        	$format = $yr."/".implode("",$count);

        	$data = array('regNum' => $format, 'student_status' => 'active');
			$where = " id = '".$a."' ";

			$query = $this->db->update('under_g', $data, $where);
		
        	if ($query){
        	    echo "<h3>"."Registration number and status assigned appropriately,registration successful"."</h3>";
        	}
			
	
		}

		$this->load->view('my_views/datab.php');
		
	}

    public function update($getId){
	
    	if(isset($getId)){
    	    $you = $getId;
    	    $sqlStr = array('fname'=>'Fname','lname'=>'Lname','email'=>'email','phone'=>'pNum','dob'=>'dob');
    	    $post0 = array('fname','lname','email','phone','dob');

    	    foreach($_POST as $post => $posts){
    	        if((isset($_POST['Update'])) && ($_POST[$post] != "") ){
    	            $jedi = $_POST[$post];
    	            $i;
    	            for($i = 0; $i < count($post0); $i++){
    	                if($post == $post0[$i]){
    	                    $hold = $_POST[$post];

							$data = array($sqlStr[$post] => $hold);
							$where = " id = '".$you."' ";

							$query = $this->db->update('under_g', $data, $where);

    	                    break;
    	                }

    	            }


    	        }
    	    }


    	}
		$this->load->view('my_views/update');
        
    }
    public function select(){

		
		$query_one = $this->db->get('under_g');
		if($this->load->view('my_views/select')){
			
   			echo '<table>';
			   echo '<h2 id="head">Student Information</h2>'; 
   			   echo '<th>id</th>';
   			   echo '<th>First Name</th>';
   			   echo '<th>Last Name</th>';
   			   echo '<th>Reg no.</th>';
   			   echo '<th>dob</th>';
   			   echo '<th>Reg date</th>';
   			   echo '<th>Last update</th>';
   			   echo '<th>Status</th>';
   			   echo '<th>Phone no.</th>';
   			   echo '<th>Email</th>';
   			   echo '<th>Tools</th>';
   			foreach($query_one->result() as $row){
   			    echo '<tr>';
			
   			    echo '<td>'.$row->id.'</td>';
   			    echo '<td>'.$row->Fname.'</td>';
   			    echo '<td>'.$row->Lname.'</td>';
   			    echo '<td>'.$row->regNum.'</td>';
   			    echo '<td>'.$row->dob.'</td>';
   			    echo '<td>'.$row->created_date.'</td>';
   			    echo '<td>'.$row->update_date.'</td>';
   			    echo '<td>'.$row->student_status.'</td>';
   			    echo '<td>'.$row->pNum.'</td>';
   			    echo '<td>'.$row->email.'</td>';
   			    echo '<td>'.'<a href="http://localhost/test/mans_not_hot/index.php/student/update/'.$row->id.'">Edit</a>'." ".'<a href="http://localhost/test/mans_not_hot/index.php/student/delete/'.$row->id.'">DELETE</a>'.'</td>';
			
   			    echo '</tr>';
			
			
   			}
   			echo '</table>';
		}

		$this->load->view('my_views/select');
		
    }

	public function delete($getId = ''){
		if(isset($getId)){
    
			$you = $getId;
	
			$query = $this->db->get_where('under_g',['id' => $you]);

			if(!$query){
				echo "Get not succesful!";
			}
		
			foreach($query->result_array() as $stud);{
				$stud['Fname'];
				$stud['Lname'];
				$stud['regNum'];

			}
			// echo "<div class='stud' id='stud'>";
			// echo "<h3>"."Are you sure you want to delete ".ucfirst($stud['Fname'])." ".ucfirst($stud['Lname'])." with registration number ".ucfirst($stud['regNum'])."</h3>";
			// echo "<br>";
			// echo "Click 👇 if yes";
			// echo "</div>";

			
		
			if (isset($_POST['REMOVE'])){
				$query_one = $this->db->delete('under_g', array('id' => $you)); 
				// $this->select('1');
				// echo '<script type="text/JavaScript"> 
				// 		function magic(){
				// 			diss.style.display = "none";
				// 		}
					
				// 		let diss = document.getElementById("stud");
				// 		let poof = document.getElementById("btn");
				// 		if(diss != null){
							
				// 			poof.addEventListener("click",magic());
				// 		}
    			// 	 </script>';


				echo "<div class='stud_del'>";
				echo "<h3>"."Student ".ucfirst($stud['Fname'])." ".ucfirst($stud['Lname'])." with registration number ".ucfirst($stud['regNum'])." DELETED SUCCESFULLY"."</h3>";
				echo "</div>";
				
			}
			
		}

		$this->load->view('my_views/delete');
	}
    
}