<?php

echo<<<EOHTML
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Caledonia Golf Club</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav" style='font-weight:bold'>
			<li><a href="news.php">Latest News</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Club <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="facilities.php">Facilities</a></li>
				<li><a href="openinghours.php">Opening Hours</a></li>
				<!-- <li><a href="meals.php">Weekend Meals</a></li> -->
				<li><a href="functions.php">Functions</a></li>
				<li><a href="committee.php">The Committee</a></li>
				<!-- <li><a href="juniors.php">Juniors</a></li> -->
				<!-- <li><a href="membership.php">Membership</a></li> -->
				<li><a href="http://www.howdidido.co.uk/caledonia-golf-club" target="_blank">Handicaps</a></li>
				<li><a href="prizewinners2013.php">Prize Winners 2013</a></li>
				<li><a href="smoker2014.php">Prize Winners 2014</a></li>
				<li><a href="ladies.php">Ladies Section</a></li>
				<li><a href="ladiesfixtures2015.php">Ladies Fixtures 2015</a></li>
				<li><a href="gentsfixtures2015.php">Gents Fixtures 2015</a></li>
				<li><a href="compentries.php">Competition Entries 2015</a></li>
				<li><a href="reciprocal.php">Reciprocal Golf</a></li>
				
			  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="membership.php">Information</a></li>
				<li><a href="joinform.php">Application Form</a></li>
				<li><a href="joinonline.php">Apply Online</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">History <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="history.php">History</a></li>
				<li><a href="legends.php">Caley Legends</a></li>
				<li><a href="clubemblem.php">Club Emblem</a></li>
				<li><a href="winterleague.php">Winter League History</a></li>
				<li><a href="opens.php">Opens at Carnoustie</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Courses <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="coursehistory.php">History of the Links</a></li>
				<li><a href="championship.php">Championship</a></li>
				<li><a href="burnside.php">Burnside</a></li>
				<li><a href="buddon.php">Buddon Links</a></li>
			  </ul>
			</li>
			<li><a href="visitors.php">Visitors</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="findus.php">Find Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			  </ul>
			</li>
		  </ul>
  </div><!-- /.navbar-collapse -->
</nav>
EOHTML;

?>