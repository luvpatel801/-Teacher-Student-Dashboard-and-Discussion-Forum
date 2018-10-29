var myDiv = document.getElementById("myDiv");
alert("k");

//Create array of options to be added
var name = <?php echo json_encode($name2); ?>;
var id = <?php echo json_encode($name1); ?>;
			

//Create and append select list
var selectList = document.createElement("select");
selectList.id = "mySelect";
myDiv.appendChild(selectList);

//Create and append the options
for (var i = 0; i < name.length; i++) {
    var option = document.createElement("option");
    option.value = id[i];
    option.text = name[i];
    selectList.appendChild(option);
}
