<?php

$trip_id = 0;
$voyager_id = 0;

// $begin_date = date('F j, Y', strtotime($voyage->begin_date));
// $end_date = date('F j, Y', strtotime($voyage->end_date));
	
?>

<style>
#container-view {min-height: 300px;}
#container-view .container-left {width: 70%; float: left;}
#container-view .container-right {width: 30%; float: left;}
#container-view h2 {font-size: 2em; margin: 0;}
#container-view .container-right h3 {text-align: center;}
#voyagurs {margin-top: -10px;}
#voyagurs ul {margin-left: 40px;}
.voyage-header {}
#voyage-title {display: inline-block;}
#voyage-dates {float: right; margin-top: 10px;}
.voyage-header .dates-title {font-weight: bold;}
.voyage-leader {font-weight: bold; font-style: italic;}
</style>
<div id="container-view" class="home-container">
	<div class="voyage-header">
		<div id="voyage-title">
			<h2><?php echo $voyage->name;?></h2>
		</div>
		<div id="voyage-dates">
			<span class="dates-title">When:</span>
			<!-- TODO: Multiple dates into DB
			<span class="dates-range"><?php echo $begin_date." - ".$end_date;?></span> -->
			<span class="dates-range"><?php echo $voyage->when;?></span>
		</div>
	</div>
	<hr>
	<script type="text/javascript">
		$(function () {
		    $(document).on("click", "li.active > a", function () {
		        var $parent = $(this).parent();
		        console.log("here");

		        // Ensure link isn't just a dropdown menu link     
		        if (!$parent.hasClass("dropdown")) {
		            // Deactivate tab buttons
		            $("#voyage-details-navi li").removeClass("active");

		            // Hides tab contents
		            tabName = $(this).attr("href");
		            $(tabName).removeClass("active").addClass("fade");
		        }
		    });
		});
	</script>
	<div class="container-left">
		<div id="voyage-details">
			<div id="voyage-navi">
				<ul class="nav nav-tabs" id="voyage-details-navi">
			        <li><a href="#itenerary" data-toggle="tab">Itenerary</a></li>
			        <li><a href="#accomodations" data-toggle="tab">Accomodations</a></li>
			 		<li><a href="#transportation" data-toggle="tab">Transportation</a></li>
			        <li><a href="#trips" data-toggle="tab">Trips</a></li>

			        <li class="dropdown"> <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>

			            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
			                <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">Contact Info</a>
			                </li>
			                <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">Maps</a>
			                </li>
			            </ul>
			        </li>
			    </ul>
			    <div id="voyage-details-content" class="tab-content">
			        <div class="tab-pane fade" id="itenerary">
			            <p>The iPhone 6 measures 5.44 x 2.64 x 0.27 inches (138.1 x 67 x 6.9mm) and weighs 4.55 ounces (129g) – a weight increase that is roughly proportional to its 16% volume increase compared to the iPhone 5S.</p>
			        </div>
			        <div class="tab-pane fade" id="accomodations">
			            <p>aw denim you probably haven't heardFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee 
			            squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-t
			            able craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco 
			            ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvet
			            ica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson
			             8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenes
			             ter stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
			        </div>
			        <div class="tab-pane fade" id="transportation">
			            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla aw denim you probably haven't heardsingle-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
			        </div>
			        <div class="tab-pane fade" id="trips">
			            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
			        </div>
			        <div class="tab-pane fade" id="dropdown1">
			            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
			        </div>
			        <div class="tab-pane fade" id="dropdown2">
			            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="container-right">
		<div id="voyagurs">
			<h3>Voyagurs</h3>
			<ul>
				<li><?php echo $voyage->who;?></li>
				<?php 
					// foreach($voyagers as $voyager) {
					// 	// if leader, <li class="voyage-leader">
					// 	// TODO: link to their profile page with their voyager info
					// 	if($voyager->user_id == $voyage->leader_id) echo "<li class='voyage-leader'>";
					// 	else echo "<li>";
					// 	echo "<a href=".URL."home/profile?user_id=".$voyager->user_id.">".$voyager->username."</a></li>";
					// }
				?>
			</ul>
		</div>
	</div>
</div>