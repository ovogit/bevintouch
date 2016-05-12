<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,700,300,800' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="js/vendor/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="wrapper">
  <div id="left">
    <div class="portrait"><span class="glyphicon glyphicon-user"></span></div>
    <div class="app message-board">
      <div class="button">
        Message Board   
      </div>
    </div>
    <div class="app pricing-calculator">
      <div class="button">
        Pricing Calculator
      </div>
    </div>
    <div class="app dashboard">
      <div class="button">
        Dashboard
      </div>
    </div>
  </div><!-- left -->
  <div id="right">
    <div id="nav">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
      </div>
      <div class="fuzzy-search">
        <div class="item contact">
          <span class="glyphicon glyphicon-book"></span><b>This is a contact</b>
        </div> 
        <div class="item meeting">
          <span class="glyphicon glyphicon-calendar"></span><b>Meeting with Powercat Sports Grill @ 8:00pm</b>
        </div> 
        <div class="item page">
          <span class="glyphicon glyphicon-file"></span><b>Meetings Page</b>
        </div> 
      </div><!-- .fuzzy-search -->
      <!-- EOF SEARCH -->
      <nav class="main-nav">
        <ul>
          <li class="inbox">
          <span class="glyphicon glyphicon-envelope"><span class="exclam"><img src="img/exclam.png" alt="" /></span>
            </li>
            <li class="calendar">
            <span class="glyphicon glyphicon-calendar"></span>
            </li>
            <li class="contacts">
            <span class="glyphicon glyphicon-book"></span>
            </li>
            <li class="messages">
            <span class="glyphicon glyphicon-comment"><span class="exclam"><img src="img/exclam.png" alt="" /></span>
              </li>
              <li class="create">
              <span class="glyphicon glyphicon-plus"></span>
              </li>
              <li class="user">
              <span class="glyphicon glyphicon-user"></span>
              </li>
              <li class="collapse">
              <span class="glyphicon glyphicon-th"></span>
              </li>
            </ul>
          </nav>
        </div><!-- #nav -->
        <div id="inner-wrapper">
          <div id="dark">
            <!-- WHATS GOING ON THIS WEEK -->
            <div class="home-page page">
              <h1>What's Going On This Week <span class="calendar"><a href="#">Full Calendar</a></span></h1>
              <div class="days-wrap">
                <ul class="days">
                  <li class="day"><a href="#" class="sunday">SUN</a></li>
                  <li class="day active"><a href="#" class="monday">MON</a></li>
                  <li class="day"><a href="#" class="tuesday">TUE</a></li>
                  <li class="day"><a href="#" class="wednesday">WED</a></li>
                  <li class="day"><a href="#" class="thursday">THU</a></li>
                  <li class="day"><a href="#" class="friday">FRI</a></li>
                  <li class="day"><a href="#" class="saturday">SAT</a></li>
                </ul>
              </div><!-- .days-wrap -->
              <!-- MEETINGS -->
							<div class="touchView"></div>
							<div class="favoriteView"></div>
              <h1>Meetings <span class="date"></span></h1>
            </div><!-- .home-page -->
<!--/// VIEWS ///-->
<div class="inboxView page"></div>
<div class="calendarView page"></div>
<div class="contactsView page"></div>
            
            <div class="messages-page page">
              <h1>Contacts</h1>
            </div>
            <div class="user-page page">
              <h1>Profile</h1>
              <div class="block">
                <a href="/logout" class="logout">Logout</a>
              </div>
            </div>
            <div class="create-page page">
              <h1>What Would You Like To Add?</h1>
                <h1>
                  <a href="" class="new-employee">New Employee</a>
                </h1>
              <div class="block">
                    <div class="create-employee create-sub">
                    <form action="/employees" method="post" accept-charset="utf-8" class="create-employee-form"><!-- begin form -->
                      <div class="input-group">
                        <input type="text" class="form-control" name="first-name" placeholder="First Name">
                        <input type="text" class="form-control" name="last-name" placeholder="Last Name">
                        <input type="text" class="form-control" name="home-address" placeholder="Home Address">
                        <input type="text" class="form-control" name="state" placeholder="State">
                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                      </div>
                    </form><!-- end form -->
                </div>
</div>

                  <h1>
                    <a href="" class="new-client">New Client</a>
                  </h1>
              <div class="block">
                    <div class="create-client create-sub">
                    <form action="/clients" method="post" accept-charset="utf-8" class="create-client-form"><!-- begin form -->
                      <div class="input-group">
                        <input type="text" class="form-control" name="first-name" placeholder="First Name">
                        <input type="text" class="form-control" name="last-name" placeholder="Last Name">
                        <input type="text" class="form-control" name="home-address" placeholder="Home Address">
                        <input type="text" class="form-control" name="state" placeholder="State">
                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                      </div>
                    </form><!-- end form -->
                </div>


</div>
                  <h1>
                    <a href="" class="new-contact">New Contact</a>
                  </h1>

              <div class="block">
                <div class="create-contact create-sub">
                    <form action="/contacts" method="post" accept-charset="utf-8" class="create-contact-form"><!-- begin form -->
                      <div class="input-group">
                        <input type="text" class="form-control" name="first-name" placeholder="First Name">
                        <input type="text" class="form-control" name="last-name" placeholder="Last Name">
                        <input type="text" class="form-control" name="home-address" placeholder="Home Address">
                        <input type="text" class="form-control" name="state" placeholder="State">
                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                      </div>
                    </form><!-- end form -->
                </div>
                <!-- create-employee -->
              </div>
            </div>
          </div><!-- #dark (left side) -->
          <div id="light">
            <div id="messages">
              <h1 class="app-heading">Message Board <a href="" class="make-a-post">make a post</a></h1>
                <div class="create-conversation">
                    <form class="form" action="">
                      <div class="input-group">
                        <input type="text" name="thread" placeholder="Title of post" />
                        <textarea name="msg"></textarea>
                        <input type="hidden" name="user" value="<?php echo Session::get('user') ?>"/>
                      </div>
                      <button type="button" class="submit">Submit</button>
                      <button type="button" class="cancel">Cancel</button>
                    </form>
                  </div>
                <div class="messages-container"></div>
            </div><!-- #messages -->
            <div id="pricing-calculator">
              <h1 class="app-heading">Pricing Calculator</h1>
              <form role="form" action="/pricing.php" method="post">

                <div class="form-group">
                  <label for="bar_num">Number of bars:
                    <input autofocus="autofocus" class="form-control" type="number" name="bar_num" id="bar_num">
                  </label>
                </div>
                <div class="form-group">
                  <label for="stock_num">Number of stockrooms and/or coolers:
                    <input class="form-control" type="number" name="stock_num" id="stock_num">
                  </label>
                </div>
                <div class="form-group">
                  <label for="tap_num">Number of taps:
                    <input class="form-control" type="number" name="tap_num" id="tap_num">
                  </label>
                </div>
                <div class="form-group">
                  <label for="plan">Pricing plan:
                    <select class="form-control" name="plan" id="plan">
                      <option selected="selected" value="1">Prime</option>
                      <option value=".6">Choice</option>
                    </select>
                  </label>
                </div>
                <input class="btn btn-primary" type="submit" value="Calculate" id="calculate">

              </form>
            </div>
          </div><!-- #light right side -->
        </div><!-- #inner-wrapper -->

<div class="clear"></div>
</div><!-- #right -->
</div><!-- wrapper -->
<script data-main="js/main" src="js/vendor/requirejs/require.js"></script>
<script type="text/template" id="messageTemplate">
  <input type="hidden" name="id" value="<%= model.get('id') %>" />
  <b><%= model.get('thread') %></b>
  <pre>
    <%= model.get('message') %>
  </pre>
  Posted By: <%= model.get('user') %> <%= model.get('timestamp') %>
<?php
if ($type == 1){
?>

<button type="button" class="btn hide btn-xs pull-right" name="delete">Delete</button>
<button type="button" class="btn hide btn-xs pull-right" name="edit">Edit</button>

<?php
} 
else {

}
?>
</script>
<script type="text/template" id="editMessageTemplate">
<form class="edit" >
  <input type="hidden" name="id" value="<%= model.get('id') %>" />
  <input type="hidden" name="user" value="<%= model.get('user') %>" />
  <input type="text" name="thread" value="<%= model.get('thread') %>" /><br />
  <textarea name="message"><%= model.get('message') %></textarea><br />
  <button type="submit" name="done">Done</button>
</form>
</script>
<!--
<script type="text/template" id="messagesTemplate">
<% _.each(messages, function(message) { %>
<div class="message">
<input type="hidden" name="id" value="<%= message.get('id') %>" />
<b><%= message.get('thread') %></b>
<pre>
  <%= message.get('message') %>
</pre>
Posted By: <%= message.get('user') %> <%= message.get('timestamp') %>
<?php
if ($type == 1){
?>
<button type="button" class="btn hide btn-xs pull-right" name="delete">Delete</button>
<button type="button" class="btn hide btn-xs pull-right" name="edit">Edit</button>

<?php
} 
else {

}
?>
</div>
<% }); %>
</script>
-->
<script type="text/template" id="contactTemplate">
<a href="#contacts/<%= contact.get('business_city') %>" class="btn btn-primary">Go Back</a>
	<table class="table contact-table">
	<thead>
	<th><tr><td>
	<h2> <%= contact.get('business_name') %> </h2>
	</td></tr></th>
	</thead>
	<tbody>
	<tr>
		<td>
			City/State/Zip:
		</td>
		<td>
			<%= contact.get('business_city') %>, 
			<%= contact.get('business_state') %>
			<%= contact.get('business_zip') %>
		</td>
	</tr>
	<tr>
		<td>
			Address:
		</td>
		<td>
			<%= contact.get('business_address') %>
		</td>
	</tr>
	<tr>
	<td colspan="2">
<div class="btn-toolbar" role="toolbar">
  <div class="btn-group">
    <button type="button" class="btn btn-default">Touch</button>
    <button type="button" class="btn btn-default">Favorite</button>
    <button type="button" class="btn btn-default">Edit</button>
    <button type="button" class="btn btn-default">Delete</button>
  </div>
</div>	
	</td>
	</tr>

	</tbody>
	</table>
</script>
<script type="text/template">

<%= contact.get('Ownership') %><br />
<%= contact.get('PA Address') %><br />
<%= contact.get('PA City') %><br />
<%= contact.get('PA State') %><br />
<%= contact.get('PA Zip') %><br />
<%= contact.get('Smoke Ban Exempt Date ') %><br />
<%= contact.get('business_city ') %><br />
<%= contact.get('business_county ') %><br />
<%= contact.get('business_name') %><br />
<%= contact.get('business_state') %><br />
<%= contact.get('business_zip') %><br />
<%= contact.get('contact_address') %><br />
<%= contact.get('contact_city') %><br />
<%= contact.get('contact_county') %><br />
<%= contact.get('contact_email') %><br />
<%= contact.get('contact_name') %><br />
<%= contact.get('contact_phone') %><br />
<%= contact.get('contact_state') %><br />
<%= contact.get('contact_zip') %><br />
<%= contact.get('effective_from') %><br />
<%= contact.get('effective_to') %><br />
<%= contact.get('id') %><br />
<%= contact.get('license_number') %><br />
<%= contact.get('license_type') %><br />
</script>
<script type="text/template" id="contactsCityTemplate">
<a href="#contacts" class="btn btn-primary">Go Back</a>
<div class="contacts container-fluid">
<% _.each(contactsCity, function(contactsCity) { %>
<div class="row">
<a href="#contact/<%= contactsCity.get('id') %>">
<%= contactsCity.get('business_name') %>
</a>
</div>
<% }); %>
</div>
</script>
<script type="text/template" id="citiesTemplate">
<% _.each(cities, function(city) { %>
<a href="#contacts/<%= city.get('business_city') %>"><%= contact.get('business_city') %></a>
<% }); %>
</script>
<script type="text/template" id="block-template">
<div class="block">
<div class="container-fluid">
<div class="row">
<div class="col-xs-3"><span class="time">8:00pm</span></div>
<div class="col-xs-9"><span class="bar"><a href="#"><b>Powercat Sports Grill</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
</div>
<div class="row info">
<div class="col-xs-3">Contact Info</div> 
<div class="col-xs-3">Get Directions</div> 
<div class="col-xs-3">Set Reminder</div> 
<div class="col-xs-3">#number here</div> 
</div>
</div> 
</div>
</script>
<script type="text/template">

<div class="msg conversation">
<div class="conversation-title">Thread Title</div>
<div class="left-msg">
<img src="img/fake-user.jpg" alt="" />
</div> 
<div class="right-msg">
<p>
Adipisicing dolorem in magni omnis dolores temporibus culpa alias placeat aliquid labore omnis dignissimos veritatis quod reiciendis adipisci quas tenetur aliquam! Natus a minima ullam placeat dolores. Fugiat corrupti at.
</p>
<div class="msg-options pull-right">
<em>posted by: some user</em>
</div>
</div>
<div class="clear"></div>
<div class="msg-replies">
<div class="msg">
<div class="left-msg">
<img src="img/fake-user.jpg" alt="" />
</div> 
<div class="right-msg">
<p>
Adipisicing dolorem in magni omnis dolores temporibus culpa alias placeat aliquid labore omnis dignissimos veritatis quod reiciendis adipisci quas tenetur aliquam! Natus a minima ullam placeat dolores. Fugiat corrupti at.
</p>
<div class="msg-options pull-right">
<em>posted by: some user</em>
</div>
</div>
</div>
</div><!-- msg-replies -->
<div class="clear"></div>
<div class="pull-right conversation-options">
<button type="button" class="btn btn-sm btn-primary">Reply</button>
</div>
</div>
<hr />
<div class="msg conversation">
<div class="conversation-title">Thread Title</div>
<div class="left-msg">
<img src="img/fake-user.jpg" alt="" />
</div> 
<div class="right-msg">
<p>
Adipisicing dolorem in magni omnis dolores temporibus culpa alias placeat aliquid labore omnis dignissimos veritatis quod reiciendis adipisci quas tenetur aliquam! Natus a minima ullam placeat dolores. Fugiat corrupti at.
</p>
<div class="msg-options pull-right">
<em>posted by: some user</em>
</div>
</div>
<div class="clear"></div>
<div class="pull-right conversation-options">
<button type="button" class="btn btn-sm btn-primary">Reply</button>
</div>
</div>
<hr />
<div class="msg conversation">
<div class="conversation-title">Thread Title</div>
<div class="left-msg">
<img src="img/fake-user.jpg" alt="" />
</div> 
<div class="right-msg">
<p>
Adipisicing dolorem in magni omnis dolores temporibus culpa alias placeat aliquid labore omnis dignissimos veritatis quod reiciendis adipisci quas tenetur aliquam! Natus a minima ullam placeat dolores. Fugiat corrupti at.
</p>
<div class="msg-options pull-right">
<em>posted by: some user</em>
</div>
</div>
<div class="clear"></div>
<div class="pull-right conversation-options">
<button type="button" class="btn btn-sm btn-primary">Reply</button>
</div>
</div>
<hr />
</script>
<script type="text/template" id="inboxTemplate">
<h1>Inbox <span class="pull-right small-head">No new messages</span> </h1>
<div class="block container-fluid">
<form>
<legend>Send Message</legend>
<div class="input-group">
  <label for="recipient">To:</label>
  <input type="text" class="form-control" placeholder="Send to" id="to" name="to">
</div>
<div class="input-group">
  <label for="cc">CC:</label>
  <input type="text" class="form-control" placeholder="CC (optional)" id="cc" name="cc">
</div>
<div class="input-group">
  <label for="message">Message:</label>
  <textarea id="message" name="message" cols="85" rows="10"></textarea>
</div>
</form>
</div>
</script>
</body>
</html>