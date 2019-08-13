<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal3 {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content Status Barang */
.modal-content1 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 45%; z-index: none;
}

/* Modal Content Apprival Tracking */
.modal-content2 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 45%; z-index: none;
}

/* Modal Content Activity Tracking */
.modal-content3 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 50%; z-index: none;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Approval Tracking */
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Activity Tracking */
.close3 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<!--<button id="myBtn">Open Modal</button>-->
<!--<a href="#" id="myBtn1">View Status Item</a>&nbsp;&nbsp;-->
<!--<a href="#" id="myBtn2">View Detail Approval Tracking</a>&nbsp;&nbsp;-->
<!--<a href="#" id="myBtn3">View Detail Activity Tracking</a><br><br>-->

			<p><a href="#" id="myBtn1">Tampilan 1</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn2">Tampilan 2</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn3">Tampilan 3</a><br><br></p>

<!-- The Modal -->
<div id="myModal1" class="modal1" style="z-index: none;">

  <!-- Modal content -->
	<div class="modal-content1" style="z-index: none;">
		<span class="close1">&times;</span>
			<!--<p><!? include('reqstore.php');?></p>-->
			<p>HELLO WORLD</p>
			
	  </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>	