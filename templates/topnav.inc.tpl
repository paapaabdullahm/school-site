<!doctype html>
<div id="topnav">
 <h2>{$page_title}</h2>
 <div class="simple ui dropdown item">
    Rating<i class="dropdown icon"></i>
    <div class="widget menu">
    	<div class="item">Rate Current Page:</div>
			<div record-id="{$record_id}" class="rate_widget {$record_id}">
					<div class="overlay"></div>
					<div class="star_1 ratings_stars"></div>
					<div class="star_2 ratings_stars"></div>
					<div class="star_3 ratings_stars"></div>
					<div class="star_4 ratings_stars"></div>
					<div class="star_5 ratings_stars"></div>
					<div class="item average">Ave. Rating: <span class="ave-vote">0</span></div>
					<div class="item total"><span class="total-votes">0</span> Votes<br />Recorded</div>
			</div>
    </div>
 </div>
 <print title="Print page"><i class="fa fa-print"></i></print>
 <a class="pure-home-heading" href="{$home}" title="Back to Home"><i class="fa fa-home"></i></a>
</div>
