<?php /* Template Name: PageWithoutSidebar */ ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */
 //References:https://stackoverflow.com/questions/19089171/an-error-occur-when-i-use-appendchild-br-in-a-genuine-exist-reference
 //https://www.w3schools.com/jsref/met_node_appendchild.asp
 //https://stackoverflow.com/questions/17758773/trouble-adding-checkboxes-to-html-div-using-js
 //https://stackoverflow.com/questions/17714705/how-to-use-checkbox-inside-select-option
 //https://www.formget.com/php-checkbox/
 //https://stackoverflow.com/questions/17714705/how-to-use-checkbox-inside-select-option
 //https://forum.jquery.com/topic/jquery-date-picker-conflict

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
</head>


<style>
input[type=submit] {
    height: auto;
    background-color: #4CAF50;
    display:inline-block;
    color: white;
    padding: 12px 10px;
    border: none;
    border-radius: 20px;
    cursor: pointer;


}
input[type=text]
    width: 80%;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
    display:inline-block;
}

#selectCategory{
    width:80%;
    height:35px;
}

#selectBox2{
     height:50px;
}

.Row{
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px; /*Optional*/
    text-align:center;
}
.Column{
    display: table-cell;
    background-color: #e5e5e5; /*Optional*/
     margin:auto;

}
#searchButton{
width:50%;
height:100px;
display:inline-block;
}
</style>

<body>
 <form action="<?php the_permalink(); ?>" method="get">
    <div class="Row">
         <div class="Column" id="selectCategoryBox2">
          <p>Looking for</p>
               <select id="boot-multiselect-demo" multiple="multiple" name="check_list[]">
                      <optgroup label="Hobbies">
                                 <option value="art-therapy-for-seniors">Art therapy for Seniors</option>
                                 <option value="cooking-classes">Cooking Classes</option>
                                 <option value="gardening-club">Gardening Club</option>
                                 <option value="music-for-seniors">Music for Seniors</option>
                                 <option value="poetry-classes">Poetry Classes</option>
                                 <option value="pottery-classes">Pottery Classes</option>
                                 <option value="table-tennis">Table Tennis</option>
                                 <option value="trivia">Trivia</option>
                             </optgroup>
                             <optgroup label="indoor">
                                 <option value="book-club-Seniors">Book Club Seniors</option>
                                 <option value="comedy-Show">Comedy Show</option>
                                 <option value="computers-for-seniors">Computers for Seniors</option>
                                 <option value="book-club-seniors">Book Club Seniors</option>
                                  <option value="comedy-show">Seniors at Home</option>
                                  <option value="tai-chi">Tai Chi</option>
                                   <option value="neighbourhood-house">Neighbourhood House</option>
                                   <option value="recreation-group">Recreation Group</option>
                                   <option value="swimming-pool">Swimming Pool/option>
                                   <option value="water-sports">Water Sports/option>
                                   <option value="yoga">Yoga</option>

                             </optgroup>
                             <optgroup label="Outdoor">
                                 <option value="cafe-walks">Cafe Walks</option>
                                 <option value="healthy-and-active-session">Healthy and Active Session</option>
                                 <option value="networking">Networking</option>
                                 <option value="park-walks">Park Walks</option>
                                 <option value="seniors-festival">Seniors Festival</option>
                                 <option value="spirituality">Spirituality</option>
                                 <option value="boating-club">Boating Club</option>
                                 <option value="fitness-centre">Fitness Centre</option>
                                 <option value="orienteering-club">Orienteering Club</option>
                                 <option value="state-body">State Body</option>
                                 <option value="tracks-and-trails">Tracks And Trails</option>
                                 <option value="volunteering">Volunteering</option>
                                 <option value="walking-group">Walking Group</option>
                             </optgroup>
                             <optgroup label="special-needs">
                                 <option value="craft-club">Craft Club</option>
                                 <option value="dementia">Dementia</option>
                                 <option value="sensory-activities">Sensory Activities</option>
                                 <option value="activities-for-disabled">Activities For Disabled</option>
                                 <option value="personal-training">Personal Training</option>
                                 <option value="wheelchair-sports">Wheelchair Sports</option>
                              </optgroup>
               </select>
          </div>
          <div class="Column">
                      <p>On</p>
                     <input type="text" id="datepicker" placeholder="Any time" name="event_date">
           </div>
     <div class="Column">
      <p>In</p>
        <input type="text" name="suburb" placeholder="Any place" id="suburbTextbox">
        <input type="submit" onclick="myFunction()" value="Search">
     </div>
    </div>
    </form>



<div>




</body>
<?php
//get nothing
if(!$_GET['check_list'] && !$_GET['suburb'] && !$_GET['event_date']){
    $short= '[events-calendar-templates category="melbourne" template="default" style="style-1" date_format="default" start_date="" end_date="" limit="10" order="ASC" hide-venue="no" time="future"]';
    echo do_shortcode($short);
}


if( $_GET['event_date'] && !empty($_GET['event_date'])){
    $event_date = $_GET['event_date'];
    $mm = substr($event_date,0,2);
    $dd = substr($event_date,3,2);
    $yy = substr($event_date,6,4);
    $newDate = $yy."-".$mm."-".$dd;
    echo $newDate;
    $next_date = date('Y-m-d', strtotime($newDate.' +1 day'));
    echo $next_date;
}

if (!$_GET['event_date']){
      $newDate = "";
      $next_date="";
}
//only get date
if($_GET['event_date'] && !$_GET['suburb'] && !$_GET['check_list']){
    $short= '[events-calendar-templates category="" template="default" style="style-1" date_format="default" start_date='.$newDate.' end_date='.$next_date.'limit="10" order="ASC" hide-venue="no" time="future"]';
    echo do_shortcode($short);
}

if(!$_GET['check_list'] && $_GET['suburb'] && !empty($_GET['suburb'])){
    $suburb = $_GET['suburb'];
    $short= '[events-calendar-templates category='.strtolower($suburb).' template="default" style="style-1" date_format="default" start_date='.$newDate.' end_date='.$next_date.'limit="10" order="ASC" hide-venue="no" time="future"]';
    echo do_shortcode($short);
}

if($_GET['check_list'] && !empty($_GET['check_list']) && !$_GET['suburb']){


     $check_list = $_GET['check_list'];
     $string1="";
     foreach($_GET['check_list'] as $selected) {
     $string1=$string1.$selected.",";
     }
    $string1=substr($string1,0,-1);
    echo $string1;
    $short= '[events-calendar-templates category='.$string1.' template="default" style="style-1" date_format="default" start_date='.$newDate.' end_date='.$next_date.' limit="10" order="ASC" hide-venue="no" time="future"]';
    echo do_shortcode($short);
}

//Get both
if($_GET['suburb'] && !empty($_GET['suburb']) && $_GET['check_list'] && !empty($_GET['check_list']))
{
      $suburb = $_GET['suburb'];
      $check_list = $_GET['check_list'];
       $string1="";
           foreach($_GET['check_list'] as $selected) {
           $string1=$string1.$selected.",";
           }
          $string1=substr($string1,0,-1);
          echo $string1;
          echo "<span id='location'>".$suburb."</span>";
           echo "<p id='demo'></p>";
          $short= '[events-calendar-templates category='.$string1.' template="default" style="style-1" date_format="default" start_date='.$newDate.' end_date='.$next_date.' limit="10" order="ASC" hide-venue="no" time="future"]';
          echo do_shortcode($short);
          echo '<script type="text/javascript">setTimeout(function myFunction(){
                                                      var blocks = document.getElementsByClassName("ect-list-post");
                                                      var locations = document.getElementsByClassName("tribe-locality");
                                                      var target = document.getElementById("location").innerText;
                                                      var number = 0;
                                                      for (var i = 0; i < locations.length; i++) {
                                                        var location = locations[i].innerText.toUpperCase();
                                                        if(location !== target){
                                                        blocks[i].style.display = "none";
                                                        number = number+1;
                                                        }

                                                         if (blocks.length==number && blocks.length>0){
                                                         document.getElementById("demo").innerHTML = "No upcoming events in this area";
                                                         }

                                                 }
                                               }, 0);
          </script>';
}
?>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
 var $x = jQuery.noConflict();
    $(document).ready(function() {
              $('#boot-multiselect-demo').multiselect({
              nonSelectedText: 'Event',
              buttonWidth: '90%',
              maxHeight: 400,
              enableFiltering: true,
               enableCaseInsensitiveFiltering: true,
          });
          });
 </script>
   <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
      <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

 <script>
 var $y = jQuery.noConflict();


(function($) {  // important!!!
		// in here it is safe to use $ for jQuery (nowhere else!)
            $(function(){
                  $( "#datepicker" ).datepicker();
            })
	})(jQuery)

</script>

<?php get_footer(); ?>

