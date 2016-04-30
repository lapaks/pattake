<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>

			// Wait until the DOM has loaded before querying the document
			$(document).ready(function(){
				$('ul.tabs').each(function(){
					// For each set of tabs, we want to keep track of
					// which tab is active and it's associated content
					var $active, $content, $links = $(this).find('a');

					// If the location.hash matches one of the links, use that as the active tab.
					// If no match is found, use the first link as the initial active tab.
					$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
					$active.addClass('active');
					$content = $($active.attr('href'));

					// Hide the remaining content
					$links.not($active).each(function () {
						$($(this).attr('href')).hide();
					});

					// Bind the click event handler
					$(this).on('click', 'a', function(e){
						// Make the old tab inactive.
						$active.removeClass('active');
						$content.hide();

						// Update the variables with the new link and content
						$active = $(this);
						$content = $($(this).attr('href'));

						// Make the tab active.
						$active.addClass('active');
						$content.show();

						// Prevent the anchor's default click action
						e.preventDefault();
					});
				});
			});
		</script>
        <style>
		
			* {padding:0; margin:0;}

			html {
				background:url(/img/tiles/wood.png) 0 0 repeat;
				padding:15px 15px 0;
				font-family:sans-serif;
				font-size:14px;
			}

			p, h3 { 
				margin-bottom:15px;
			}

			div {
				padding:10px;
				width:600px;
				background:#fff;
			}

			.tabs li {
				list-style:none;
				display:inline;
				line-height:50px;
				padding:0px 10px 0px 10px;
				border-bottom-style:1px solid;
			}

			.tabs a {
				padding:5px 10px;
				display:inline-block;
				background:#fff;
				color:#000;
				text-decoration:none;
				border-top-left-radius:4px;
				border-top-right-radius:4px;
				width:80px;
				text-align:center;
				text-transform:uppercase;
				
			}

			.tabs a.active {
				background:#E51937;
				color:#CCC;
			}

		</style>

</head>

<body>




 <ul class='tabs'>
    <li><a href='#tab1'>Tab 1</a></li>
    <li><a href='#tab2'>Tab 2</a></li>
    <li><a href='#tab3'>Tab 3</a></li>
  </ul>
  <div id='tab1'>
    <p>Hi, this is the first tab.</p>
  </div>
  <div id='tab2'>
    <p>This is the 2nd tab.</p>
  </div>
  <div id='tab3'>
    <p>And this is the 3rd tab.</p>
  </div>
</body>
</html>