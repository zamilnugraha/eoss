<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal confirmation</title>
  <link rel="stylesheet" href="./css/popup/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="./jquery/popup/jquery-1.12.4.js"></script>
  <script src="./jquery/popup/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,	  
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      },
      modal: true,
      buttons: {
        "Yes": function() {
          $( this ).dialog( "close" );
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      }	  
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog-confirm" ).dialog( "open" );
    });
  } );
  </script>
</head>
<body>
 
<div id="dialog-confirm" title="Basic dialog">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Need Assistance From FSD ?</p>
</div>
 
<button id="opener">Open Dialog</button>
 
</body>
</html>