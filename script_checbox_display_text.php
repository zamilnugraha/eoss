																<center><input type="checkbox" id="<?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" onclick="checkboxReplaceFunction()" name="cekseqcoldreplace[]" value="<?=$rvSCatReplace["NOMOR_TAGING"];?>" style="display:show;" /></center>
																<p id="<?='textcekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" style="display:none">Checkbox is CHECKED!</p>

																<script>
																function checkboxReplaceFunction() {
																  var checkBox = document.getElementById("<?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?>");
																  var textReplace = document.getElementById("<?='textcekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?>");
																  if (checkBox.checked == true){
																	textReplace.style.display = "block";
																  } else {
																	 textReplace.style.display = "none";
																  }
																}
																</script>	