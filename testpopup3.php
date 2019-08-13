    <script src="./Edit fiddle - JSFiddle_files/xml.js.download"></script>
	<script src="./Edit fiddle - JSFiddle_files/css.js.download"></script>
	<script src="./Edit fiddle - JSFiddle_files/htmlmixed.js.download"></script>
	<script src="./Edit fiddle - JSFiddle_files/javascript.js.download"></script>
	<script async="" src="./Edit fiddle - JSFiddle_files/tracker.js.download" id="fathom-script"></script>
	<script>
      var EditorConfig = {
        shell: true,
        paths: {
          favorite:    "/_make_favourite/",
          media:       "/mooshellmedia/",
          addResource: "/_add_external_resource/",
          render:      "//fiddle.jshell.net/r8fzD/5/show/"
        },
        values: {
          html: "<input type=\"button\" id=\"btnShowModal\" value=\"Add a name\" />\n        \n<div id=\"output\"><\/div>\n    \n<div id=\"overlay\" class=\"dialog_display\"><\/div>\n    \n<div id=\"dialog\" class=\"dialog\">\n   <table style=\"width: 100%; border: 0px;\" cellpadding=\"3\" cellspacing=\"0\">\n      <tr>\n         <td class=\"dialog_title\">Type a name<\/td>\n         <td class=\"dialog_title align_right\">\n            <a href=\"#\" id=\"btnClose\">Close<\/a>\n         <\/td>\n      <\/tr>      \n      <tr>\n         <td colspan=\"2\" style=\"padding-left: 15px;\">\n            <b>&nbsp; <\/b>\n         <\/td>\n      <\/tr>     \n      <tr>\n         <td colspan=\"2\" style=\"padding-left: 15px;\">\n            <div id=\"brands\">\n               <input id=\"brand1\" name=\"brand\" type=\"text\"  value=\"\" /> \n               \n            <\/div>\n         <\/td>\n      <\/tr>\n      \n      <tr>\n         <td colspan=\"2\" style=\"text-align: center;\">\n            <input id=\"btnSubmit\" type=\"button\" value=\"Submit\" />\n         <\/td>\n      <\/tr>\n   <\/table>\n<\/div>\n\n<div id=\"dynamic\">\n     <td>\n         <span class=\"delete_icon\">x<\/span><div id=\"output\"><\/div>\n     <\/td>\n     <td>\n          <input id=\"firstaid\" onclick=\"addtreatment();\" type=\"checkbox\"/>\n          FirstAid needed\n     <\/td>\n     <td >\n          <input class=\"sickbay\" onclick=\"addtreatment();\" type=\"checkbox\"/>\n          Sent to Sick bay\n     <\/td>\n     <td>\n          <input class=\"ambulance\" onclick=\"addtreatment();\" type=\"checkbox\"/>\n          Ambulance\n     <\/td>\n<\/div>",
          js:   "   $(document).ready(function ()\n   {\n      $(\"#btnShowModal\").click(function (e)\n      {\n         ShowDialog(true);\n         e.preventDefault();\n      });\n\n      $(\"#btnClose\").click(function (e)\n      {\n         HideDialog();\n         e.preventDefault();\n      });\n\n      $(\"#btnSubmit\").click(function (e)\n      {\n         var brand = $(\"#brand1\").val();        \n         $(\"#output\").after($(\'#dynamic\').clone().show()).after(\"<br/>\" + brand);\n         HideDialog();\n         e.preventDefault();\n      });\n});\n\n   function ShowDialog(modal)\n   {\n      $(\"#overlay\").show();\n      $(\"#dialog\").show();\n\n      if (modal)\n      {\n         $(\"#overlay\").unbind(\"click\");\n      }\n      else\n      {\n         $(\"#overlay\").click(function (e)\n         {\n            HideDialog();\n         });\n      }\n   }\n\n   function HideDialog()\n   {\n      $(\"#overlay\").hide();\n      $(\"#dialog\").hide();\n   } ",
          css:  ".dialog_display\n{\n   position: fixed;\n   top: 0;\n   right: 0;\n   bottom: 0;\n   left: 0;\n   height: 100%;\n   width: 100%;\n   margin: 0;\n   padding: 0;\n   background: #000000;\n   opacity: .15;\n   filter: alpha(opacity=15);\n   -moz-opacity: .15;\n   z-index: 101;\n   display: none;\n}\n.dialog\n{\n   display: none;\n   position: fixed;\n   width: 220px;\n   height: 130px;\n   top: 50%;\n   left: 50%;\n   margin-left: -190px;\n   margin-top: -100px;\n   background-color: #ffffff;\n   border: 2px solid #336699;\n   padding: 0px;\n   z-index: 102;   \n   font-size: 10pt;\n}\n.dialog_title\n{\n   border-bottom: solid 2px #336699;\n   background-color: #336699;\n   padding: 4px;\n   color: White;\n   font-weight:bold;\n}\n.dialog_title a\n{\n   color: White;\n   text-decoration: none;\n}\n.align_right\n{\n   text-align: right;\n}\n#dynamic{display:none;}"
        },
        fiddle: {
          id:   "16150426",
          slug: "r8fzD",
          boilerplate: false,
          // TODO: Missing
          // {% if preload_resources %}
          //   resources: {{ preload_resources|safe }}
          // {% else %}
          //   resources: []
          // {% endif %}
        },
        panels: {
          html: "html",
          js:   "javascript",
          css:  "css"
        },
        user: {
          id:       "None",
          username: ""
        },
        showHelloBar: false,
        currentUser:  false,
        isAuthor:     false
      }
    </script>