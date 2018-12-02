function add_item() {
  var name = document.getElementById("name").value ;
  var description = document.getElementById("description").value ;
  var ingredients = document.getElementById("ingredients").value ;
  var nutrition = document.getElementById("nutrition").value ;
  var price = document.getElementById("price").value ;
  var location = document.getElementById("location").value ;
  var str = "name="+ name + "&location=" + location + "&description=" + description +"&ingredients="+ ingredients +"&nutrition=" +nutrition +"&price=" +price;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_items", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(str);
	xhttp.close;
	document.getElementById("name").value = '';
	document.getElementById("description").value = '';
	document.getElementById("ingredients").value = '';
	document.getElementById("nutrition").value ='';
	document.getElementById("price").value ='';
	document.getElementById("location").value ='';
	alert("Item has been added");
}
function add_promotion() {
	// var selct = (document.getElementById("ms_example7").select);
	var txtSelectedValuesObj = ""; 
    var selectedArray = new Array();
    var selObj = document.getElementById('ms_example7'); 
    var i;
    var count = 0;
	var bool = false
    for (i=0; i<selObj.options.length; i++) { 
        if (selObj.options[i].selected) {
            selectedArray[count] = selObj.options[i].value;
			txtSelectedValuesObj = selObj.options[i].value + "," ; 
            count++; 
			bool = true
        } 
    } 
	if (bool == true) 
	{
		txtSelectedValuesObj = txtSelectedValuesObj.substring(0, txtSelectedValuesObj.length - 1);
	} 
   // txtSelectedValuesObj.value = selectedArray;
  var name = document.getElementById("name").value ;
  var persona = document.getElementById("persona").value ;
 // var start_date = document.getElementById("start_date").value ;
//  var start_time = document.getElementById("start_time").value ;
  var expiry_date = document.getElementById("expiry_date").value ;
  var expiry_time = document.getElementById("expiry_time").value ;
  var expiry = expiry_date + " " + expiry_time;

  var description = document.getElementById("description").value ;
  var str = "name="+ name +"&persona=" + persona  +"&expirydate=" +expiry +"&description=" +description + "&items=" + txtSelectedValuesObj;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // document.getElementById("demo").innerHTML = this.responseText;
    }
  }
  /*
  
type : POST
key values: name, category, description, expirydate, items, persona
  */
  xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com:80/sbuddy/api/v1.0/add_promotions", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(str);
	xhttp.close;
	document.getElementById("name").value = '';
	document.getElementById("persona").value = '';
	//document.getElementById("start_date").value = '';
	document.getElementById("expiry_date").value ='';
	document.getElementById("description").value ='';
	alert("Promotion has been added");
}

function delet_item (id) 
{
	r = confirm("Are you sure you want to delete this item");
	if (r==true)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			// document.getElementById("demo").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/delete_item", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		str = "id=" + id;  
		xhttp.send(str);
		xhttp.close;
		alert("Item has been deleted ");
		location.reload();
	}
}
function delet_promotion (id) 
{
	r = confirm("Are you sure you want to delete this item");
	if (r==true)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			// document.getElementById("demo").innerHTML = this.responseText;
			}
		};
		
		xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/delete_promotion", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		str = "id=" + id;  
		xhttp.send(str);
		xhttp.close;
		alert("Promotion has been deleted ");
		location.reload();
	}
}
function view_permotion (id) 
{
	
	//window.location.replace("http://www.w3schools.com");
	
}


function add_persona() {
  var name = document.getElementById("personaName").value ;
  var description = document.getElementById("personaDescription").value ;
  var tags = document.getElementById("personaTags").value ;
  var str = "name="+ name + "&description=" + description +"&tags="+ tags;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_persona", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(str);
	xhttp.close;
	document.getElementById("personaName").value = '';
	document.getElementById("personaDescription").value = '';
	document.getElementById("personaTags").value = '';
	document.getElementById("personaAction").value ='';
	alert("Persona has been added");
}
function delet_persona (id) 
{
	r = confirm("Are you sure you want to delete this persona");
	if (r==true)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			// document.getElementById("demo").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/delete_persona", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		str = "id=" + id;  
		xhttp.send(str);
		xhttp.close;
		alert("Persona has been deleted ");
		location.reload();
	}
}
function add_recipe() {
  var name = document.getElementById("recipeName").value ;
  var description = document.getElementById("recipeDescription").value ;
  var items = document.getElementById("recipeLists").value ;
  var str = "name="+ name + "&description=" + description +"&items="+ items;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_recipe", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(str);
	xhttp.close;
	document.getElementById("recipeName").value = '';
	document.getElementById("recipeDescription").value = '';
	document.getElementById("recipeLists").value = '';
	alert("Recipe has been added");
}
function delet_recipe (id) 
{
	r = confirm("Are you sure you want to delete this recipe");
	if (r==true)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			// document.getElementById("demo").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST", "http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/delete_recipe", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		str = "id=" + id;  
		xhttp.send(str);
		xhttp.close;
		alert("Recipe has been deleted ");
		location.reload();
	}
}