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
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="js/vendor/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div id="message">
<?php
  echo $type;
?>
</div>
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
    <!--<div class="app">-->

      <!--<div class="button">-->
        <!--Calendar-->
      <!--</div>-->

    <!--</div>-->
    <!--<div class="app">-->

      <!--<div class="button">-->
        <!--Dashboard-->
      <!--</div>-->

    <!--</div>-->
  </div>
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
              <li class="plus">
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
              <h1>Meetings <span class="date">DATE TEMPLATE</span></h1>
              <div class="block mon">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Monday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block tue">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">2:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Tuesday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block wed">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Wednesday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block thu">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Thursday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block fri">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Friday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block sat">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Saturday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
              <div class="block sun">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-3"><span class="time">8:00pm</span></div>
                    <div class="col-xs-9"><span class="bar"><a href="#"><b>Sunday Bar</b><em>1244 Mystery Drive Manhattan Kansas</em></a></span></div>
                  </div>
                  <div class="row info">
                    <div class="col-xs-3">Contact Info</div> 
                    <div class="col-xs-3">Get Directions</div> 
                    <div class="col-xs-3">Set Reminder</div> 
                    <div class="col-xs-3">#number here</div> 
                  </div>
                </div> 
              </div>
            </div><!-- .home-page -->
            <div class="inbox-page page">
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
            </div>
            <div class="contacts-page page">
              <h1>Contacts</h1>
              <div class="block">
                <div id="contactsView"></div>
              </div>
            </div>
            <div class="calendar-page page">
              <h1>Calendar <span class="pull-right small-head">August</span></h1>
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
              <div class="block">
              <div class="calendar-wrap">
                <div class="week">
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day">1</div>
                  <div class="day">2</div>
                </div>
                <div class="week">
                  <div class="day">3</div>
                  <div class="day">4</div>
                  <div class="day">5</div>
                  <div class="day">6</div>
                  <div class="day">7</div>
                  <div class="day">8</div>
                  <div class="day">9</div>
                </div>
                <div class="week">
                  <div class="day">10</div>
                  <div class="day">11</div>
                  <div class="day">12</div>
                  <div class="day">13</div>
                  <div class="day">14</div>
                  <div class="day">15</div>
                  <div class="day">16</div>
                </div>
                <div class="week">
                  <div class="day">17</div>
                  <div class="day">18</div>
                  <div class="day">19</div>
                  <div class="day">20</div>
                  <div class="day">21</div>
                  <div class="day">22</div>
                  <div class="day">23</div>
                </div>
                <div class="week">
                  <div class="day">24</div>
                  <div class="day">25</div>
                  <div class="day">26</div>
                  <div class="day">27</div>
                  <div class="day">28</div>
                  <div class="day">29</div>
                  <div class="day">30</div>
                </div>
                <div class="week">
                  <div class="day">31</div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                  <div class="day"></div>
                </div>
              </div>

              <div class="clear"></div>
              </div>
            </div>
            <div class="messages-page page">
              <h1>Contacts</h1>
            </div>
            <div class="user-page page">
              <h1>Profile</h1>
              <a href="/logout" class="logout">Logout</a>
            </div>



          </div><!-- #dark (left side) -->

          <div id="light">
            <!-- MESSAGES -->
            <div id="messages">
              <h1 class="app-heading">Message Board <b class="pull-right">Make Post</b></h1>
<h4>No Messages</h4>
              <div class="create-conversation">
              <form class="form" action="">
              <div class="input-group">
                <label>Message</label>
              <textarea name="msg" rows="4" cols="40"></textarea>
              </div>
                <button class="btn btn-primary">Submit</button>
              </form>
              </div>

            </div><!-- #messages -->
            <!-- PRICING CALCULATOR -->
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
<script type="text/template" id="contactTemplate">
<a href="#contacts/<%= contact.get('business_city') %>" class="btn btn-primary">Go Back</a>
<h2> <%= contact.get('business_name') %> </h2>
<table class="table">
<thead>
<tr>
  <th>City</th>
  <th>Bar Name</th>
  <th>Address</th>
  <th>Number</th>
  <th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<%= contact.get('business_city') %>
</td>
<td>
<%= contact.get('business_name') %>
</td>
<td>
<%= contact.get('business_address ') %>
</td>
<td>
<%= contact.get('business_phone') %>
</td>
<td>
<%= contact.get('business_email') %>
</td>
</tr>
</tbody>
</table>
<button class="btn btn-primary">Touch</button>
<button class="btn btn-primary">Edit</button>
<button class="btn btn-primary">Delete</button>

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
<script type="text/template" id="contactsTemplate">
<div class="contacts container-fluid">
<% _.each(contacts, function(contact) { %>
<div class="row">
  <a href="#contacts/<%= contact.get('business_city') %>"><%= contact.get('business_city') %></a>
</div>
<% }); %>
</div>
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
</body>
</html>
