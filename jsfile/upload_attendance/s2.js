		 
	
		 
var f = document.createElement("form");
f.setAttribute('method',"post");
f.setAttribute('action',"Update_attendance.php");
f.setAttribute('onSubmit',"alert('Saved')");




//and some more input elements here
//and dont forget to add a submit button

document.getElementsByTagName('body')[0].appendChild(f);

 var stu_names = <?php echo json_encode($studentsname); ?>;
			
		 var stu_id=<?php echo json_encode($studentsid); ?>;
		
		 
		
		  var arrayLength = stu_names.length;
		 
for (var i = 0; i < arrayLength; i++) {
   	
		var mydiv = document.getElementById("list1");
f.appendChild(mydiv);
var divv = document.createElement('div');
divv.className = "list-group-item";
var checkbox= document.createElement('input');
checkbox.type = "checkbox";
checkbox.name = "name[]";
checkbox.value =stu_id[i];

checkbox.checked=false;
checkbox.className = "all pull-right";

divv.innerHTML = stu_names[i];
mydiv.appendChild(divv);
divv.appendChild(checkbox);
  
}




var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Submit");

f.appendChild(s);

		  
		  
	
		
	
