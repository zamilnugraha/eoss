<!DOCTYPE html>
<html>
<body>

<p>Display some text when the checkbox is checked:</p>

Checkbox: 
<input class="cb" type="checkbox" name="fries" id="myCheck" onchange="cbChange(this)" onclick="myFunction()"/>

<input class="cb" type="checkbox" name="fries" id="myCheck2" onchange="cbChange(this)" onclick="myFunction()"/>

<input class="cb" type="checkbox" name="fries" id="myCheck3" onchange="cbChange(this)" onclick="myFunction()"/>

<!--<p id="text" style="display:none">Checkbox is CHECKED!</p>-->
<select id="text" style="display:none">
<option value="yes">Yes</option>
<option value="no">No</option>
</select>

<script>
function cbChange(obj) {
    var cbs = document.getElementsByClassName("cb");
    for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;
}
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</body>
</html>
