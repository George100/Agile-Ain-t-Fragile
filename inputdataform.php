<html>
	<head>
		<title>SERLER Data Entry</title>
		<script language="javascript">
		var i = 0;
		function changeIt() {

			if (i != 2) {
				my_div.innerHTML = my_div.innerHTML +
				"First Name: <input type='text' name='afname[]'> Last Name: <input type='text' name='alname[]'><p>" 
				i++;
			}
		}
		
		function CountChecks(whichlist, maxchecked, latestcheck) {
			var listone = new Array("ch1", "ch2", "ch3", "ch4", "ch5", "ch6", "ch7", "ch8");
			var iterationlist;
			eval("iterationlist="+whichlist);
			var count = 0;
			for( var num=0; num < iterationlist.length; num++) {
			   if( document.getElementById(iterationlist[num]).checked == true) { count++; }
			   if( count > maxchecked ) { latestcheck.checked = false; }
			   }
			if( count > maxchecked ) {
			   alert('Sorry, only ' + maxchecked + ' may be checked.');
			   }
		}
		</script>
    </head>
    <link href="style.css" rel="stylesheet" type="text/css">
	<div id="menu">
		<ul id="nav">
			<li><a href="index.php" >Home</a></li>
			<li><a href="library.php" >Library</a>
			<li><a href="bibliographicform.php" >Bibliographic Search</a>
		  <li><a href="methodologyform.php" >Methodology Search</a>
		  <li><a href="inputdataform.php">Submit data!</a>
	   </ul>
	</div>
	
	<body>
		<div class="center">
			<h1>&nbsp;</h1>
			<h1>&nbsp;</h1>
			<h1>Data Entry Form</h1>
			<form action="inputdataprocess.php" method="post" name="submitdata">
				Title: <input type="text" name="title" placeholder="Mary had a little lamb"></label>
				<p>
				Author(s): <input type="button" value="Add Author" onClick="changeIt()">
				<p>First Name: <input type="text" name="fname" placeholder="John">
				Last Name: <input type="text" name="lname" placeholder="Smith">
				<div id="my_div"></div>
				<p>
				Date Published:
				<input type="month" name="datePub">
				<p>
				Software Development Methodology:
				<select id="methodology" name="methodology">
					<option value="0">Select Methodology</option>
					<option value="1">Spiral</option>
					<option value="2">Scrum</option>
					<option value="3">Waterfall</option>
					<option value="4">Kanban</option>
					<option value="5">Extreme Programming</option>
					<option value="6">Test Driven Development</option>
				</select><p>
				<center><table><tr>
				Practice(s) being investigated:
				</tr>
				<tr>
				<td><input type="checkbox" id="ch1" name="practice[]" onClick="CountChecks('listone',2,this)" value="0">Test First Development</td>
				<td><input type="checkbox" id="ch2" name="practice[]" onClick="CountChecks('listone',2,this)" value="1">Automated Regression Testing</td>
				</tr>
				<tr>
				<td><input type="checkbox" id="ch3" name="practice[]" onClick="CountChecks('listone',2,this)" value="2">Version Control</td>
				<td><input type="checkbox" id="ch4" name="practice[]" onClick="CountChecks('listone',2,this)" value="3">Automated Acceptance Testing</td>
				</tr>
				<tr>
				<td><input type="checkbox" id="ch5" name="practice[]" onClick="CountChecks('listone',2,this)" value="4">Shared Code</td>
				<td><input type="checkbox" id="ch6" name="practice[]" onClick="CountChecks('listone',2,this)" value="5">Automated Build</td>
				</tr>
				<tr>
				<td><input type="checkbox" id="ch7" name="practice[]" onClick="CountChecks('listone',2,this)" value="6">Continuous Integration</td>
				<td><input type="checkbox" id="ch8" name="practice[]" onClick="CountChecks('listone',2,this)" value="7">Rapid Prototyping</td>
				</tr></table></center>
				<p><b>******THE FOLLOWING FIELDS BELOW ARE OPTIONAL******</b><p>
				<b>The Pieces of Evidence</b><br />
				The benefit or outcome being tested:<br />
				<textarea name="taTested" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2textarea>
				<p>The context of the study:<br />
				<textarea name="taContext" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2"></textarea>
				<p>The result of the study:<br />
				<textarea name="taResult" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2"></textarea>
				<p>The integrity of the implementation of the practice/method:<br />
				<textarea name="taIntegrity" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2"></textarea>
				<p><b>Information about the research design</b><br />
				<p>Nature of the Participants: 
				<select>
					<option value="natureNull">----------------------------</option>
					<option value="natureSmall">Small Group (<15 people)</option>
					<option value="natureMedium">Medium Group (<50 people)</option>
					<option value="natureLarge">Large Group (>50 people)</option>
				</select><br />
				<p>Research Method:
				<select>
					<option value="researchNull">----------------------------</option>
					<option value="researchQuantity">Quantitatively Driven Approach</option>
					<option value="researchQuality">Qualitatively Driven Approach</option>
					<option value="researchMixture">Mixture of Quantitative & Qualitative</option>
				</select><br /><p>
				Research Question:<br />
				<textarea name="taResearchQuestion" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2"></textarea>
				<p>Research Metrics:<br />
				<textarea name="taResearchMetrics" placeholder="50 Character Limit" maxLength="50" cols="55" rows="2"></textarea>
				<p>
				<input type="submit" value="Post">
				<input type="reset" value="Reset">
			</form>
		</div>
	</body>
</html>
