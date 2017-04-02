<html>

<head> 
	<title> Stop right there! | Search for a NOC report </title>
    	<link type="text/css" rel="stylesheet" href="css/demo_page.css"/> 
    	<link type="text/css" rel="stylesheet" href="css/ColVis.css"/> 
	<link type="text/css" rel="stylesheet" href="css/menu.css">
    	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    	<script  src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8">
	                $(document).ready(function() {
                        $(".datte").datepicker({dateFormat: "yy-mm-dd"});
});
</script>
<script type="text/javascript">
	function optionCheck(){
		var option =  document.getElementById("opsearch").value;
		if(option == "Vertical"){
			document.getElementById("Vert_search").style.visibility ="visible";
			document.getElementById("rc_search").style.visibility ="hidden";
			document.getElementById("crea_search").style.visibility ="hidden";
			document.getElementById("stat_search").style.visibility ="hidden";
			document.getElementById("g_search").style.visibility ="hidden";


		}
		if (option == "Root_Cause"){
			document.getElementById("rc_search").style.visibility ="visible";
			document.getElementById("Vert_search").style.visibility ="hidden";
			document.getElementById("crea_search").style.visibility ="hidden";
			document.getElementById("stat_search").style.visibility ="hidden";
			document.getElementById("g_search").style.visibility ="hidden";
		}
		if (option == "Creator"){
			document.getElementById("crea_search").style.visibility ="visible";
                        document.getElementById("Vert_search").style.visibility ="hidden";
                        document.getElementById("rc_search").style.visibility ="hidden";
			document.getElementById("stat_search").style.visibility ="hidden";
			document.getElementById("g_search").style.visibility ="hidden";
		}
		if (option == "Status"){
                        document.getElementById("crea_search").style.visibility ="hidden";
                        document.getElementById("Vert_search").style.visibility ="hidden";
                        document.getElementById("rc_search").style.visibility ="hidden";
			document.getElementById("stat_search").style.visibility ="visible";
			document.getElementById("g_search").style.visibility ="hidden";
                }
		
		if (option == "g_query"){
                        document.getElementById("crea_search").style.visibility ="hidden";
                        document.getElementById("Vert_search").style.visibility ="hidden";
                        document.getElementById("rc_search").style.visibility ="hidden";
			document.getElementById("stat_search").style.visibility ="hidden";
			document.getElementById("g_search").style.visibility ="visible";
		}

	}
</script>
</head>

<body id="dt_example">
<div id="container">
<?php 
	include "bodies/menu.bdy";
?>
</div>
	<div id="container">
  		<div id="mim">
				
		<select onchange="optionCheck()"  name="search_by" id="opsearch">
			<option selected="selected" disabled="disabled">--Select option--</option>
			<option  value="Vertical" >Vertical
			<option  value="Root_Cause"> Root Cause
			<option  value="Creator"> Creator
			<option value="Status"> SC
			<option value="g_query"> Grand Query
		</select>
		</div>
		<br>
		<div id="Vert_search" style="visibility:hidden;">
			<form  name="searchs" class="container_search"   action="cgi-bin/monthly_perl.cgi"> 
				<select name="vertq">
					<option value="Atomic_Sites"> Atomic Sites </option>
					<option value="AdPlatform"> Ad platform </option>
					<option value="Crave(Legacy)"> Crave </option>
					<option value="Crowd_Ignite"> Crowdignite</option>
					<option value="GameRev"> Gamerevolution </option>
					<option value="Pebblebed"> Pebblebed </option>
					<option value="Sales_Integration"> SI </option>
					<option value="Sheknows"> Sheknows </option>
					<option value="Springboard_Video"> Springboard </option>
					<option value="Technology_Platform"> Tecplatform </option>
					<option value="unknown"> Unknown </option>
					<option value="NULL"> NULL </option>
			        </select>
				<br>
				Start Date:<input  type="text" class="datte" name="sdate" /><br>
				End Date: <input  type="text" class="datte" name="edate" /><br>
				<br><input  class="ColVis_Button" type="submit" value="Go get'em">

			</form>
		</div>
		<div id="rc_search" style="visibility:hidden;">
                        <form   name="searchs" class="container_search" action="cgi-bin/monthly_perl.cgi">
                                <select name="rcq">
                                        <option value="Database">  Database </option>
                                        <option value="Deploy_Code"> Deploy Code </option>
                                        <option value="Deploy_DeploymentMethod">  Deploy DeploymentMethod </option>
                                        <option value="External">  External </option>
                                        <option value="Hardware"> Hardware </option>
                                        <option value="Maintenance"> Maintenance</option>
                                        <option value="Monitoring"> Monitoring </option>
                                        <option value="Monitoring_Check"> Monitoring Check</option>
                                        <option value="Monitoring_Provider"> Monitoring Provider </option>
					<option value="Network"> Network </option>
                                        <option value="Software"> Software </option>
                                        <option value="Traffic_Buy"> Traffic Buy </option>
					<option value="Traffic_Other"> Traffic Other </option>
					<option value="Unknown"> Unknown </option>
					<option value="Other"> Other </option>
					<option value="VisualCheck"> Visual Check </option>
                                        <option value="NULL"> NULL </option>
                                </select>
                                <br>
                                Start Date:<input  type="text" class="datte" name="sdate" /><br>
                                End Date: <input  type="text" class="datte" name="edate" /><br>
				<br><input class="ColVis_Button" type="submit" value="Go get'em">
                        </form>
                </div>
		<div id="crea_search" style="visibility:hidden;">
                        <form    name="searchs" class="container_search" action="cgi-bin/monthly_perl.cgi">
                                <select name="crea">
					<option value="Hermosillo-NOC"> NOC </option>	
                                        <option value="eduardo.vazquez">  Eduardo V. </option>
                                        <option value="rey.estrada"> Rey E. </option>
                                        <option value="ismael.gonzalez">  Ismael G. </option>
                                        <option value="israel.fimbres">  Israel F. </option>
                                        <option value="ivan.pena"> Ivan P </option>
                                        <option value="miguel.pelayo"> Miguel P.</option>
                                        <option value="rodolfo.angel"> Rodolfo A. </option>
                                        <option value="jose.bustamante"> Jose B.</option>
                                        <option value="roberto.carreon"> Roberto C. </option>
                                        <option value="francisco.bernal"> Francisco B. </option>
                                        <option value="ali.argyle"> Ali A. </option>
                                        <option disabled="disabled"> -- ex-NOCs -- </option>
                                        <option value="omar.rivera"> Omar R. </option>
                                        <option value="eduardo.osorio"> Eduardo O. </option>
                                        <option value="alejandro.rivera"> Alejandro R. </option>
                                </select>
                                <br>
                                Start Date:<input  type="text" class="datte" name="sdate" /><br>
                                End Date: <input  type="text" class="datte" name="edate" /><br>
				<br><input class="ColVis_Button" type="submit" value="Go get'em">
                        </form>
                </div>
                <div id="stat_search" style="visibility:hidden;">
			<p> Select date  range for tickets without response </p>
                        <form    name="searchs" class="container_search" action="cgi-bin/search_sc_tickets.cgi">
                                <select name="stat" style="visibility:hidden;" >
					<option value="NULL" selected> No response </option>
                                </select>
                                <br>
                                Start Date:<input  type="text" class="datte" name="sdate" /><br>
                                End Date: <input  type="text" class="datte" name="edate" /><br>
                                <br><input class="ColVis_Button" type="submit" value="Go get'em">
                        </form>
                </div>
		 
               <div id="g_search" style="visibility:hidden;">
                        <form    name="searchs" class="container_search" action="cgi-bin/monthly_perl.cgi">
                                <select name="gquery">
                                        <option > Grand Query  </option>
                                </select>
                                <br>
                                Start Date:<input  type="text" class="datte" name="sdate" /><br>
                                End Date: <input  type="text" class="datte" name="edate" /><br>
                                <br><input class="ColVis_Button" type="submit" value="Go get'em">
                        </form>
                </div>


		</ul>
	</div>
</body>

