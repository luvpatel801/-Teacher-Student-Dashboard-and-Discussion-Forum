		 
	
		 
var f = document.createElement("form");
f.setAttribute('method',"post");
f.setAttribute('action',"update_admin_exam_fees.php");
f.setAttribute('onSubmit',"alert('Saved')");




//and some more input elements here
//and dont forget to add a submit button

document.getElementsByTagName('body')[0].appendChild(f);

 var submitted = <?php echo json_encode($name4); ?>;
			
		 var subid=<?php echo json_encode($name1); ?>;
		 var unsubid=<?php echo json_encode($name); ?>;
		 
		   var unsubmitted= <?php echo json_encode($name3); ?>;
		 
		  var arrayLength = submitted.length;
		   var arrayLength1 = unsubmitted.length;
for (var i = 0; i < arrayLength; i++) {
   	
		var mydiv = document.getElementById("list1");
f.appendChild(mydiv);
var divv = document.createElement('div');
divv.className = "list-group-item";
var checkbox= document.createElement('input');
checkbox.type = "checkbox";
checkbox.name = "name[]";
checkbox.value =subid[i];

checkbox.checked=true;
checkbox.className = "all pull-right";

divv.innerHTML = submitted[i];
mydiv.appendChild(divv);
divv.appendChild(checkbox);
  
}


for (var i = 0; i < arrayLength1; i++) {
   	
		var mydiv = document.getElementById("list1");
f.appendChild(mydiv);
var divv = document.createElement('div');
divv.className = "list-group-item";
var checkbox= document.createElement('input');
checkbox.type = "checkbox";
checkbox.name = "name[]";
checkbox.value =unsubid[i];

checkbox.checked=false;
checkbox.className = "all pull-right";

divv.innerHTML = unsubmitted[i];
mydiv.appendChild(divv);
divv.appendChild(checkbox);
  
}

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Submit");

f.appendChild(s);

		  
		  
	
		
	

