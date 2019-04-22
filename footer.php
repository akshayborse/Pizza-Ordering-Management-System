<style>
.divider1 {
    position: relative;
    margin: -5px 0;
    height: 20px;
    width: 100%;
    background: url(images/divider.png) repeat-x center top;
    z-index: 2000;
}

.divider2 {
    position: relative;
    margin: -5px 0;
    height: 20px;
    width: 100%;
    background: url(images/divider.png) repeat-x center bottom;
    z-index: 2000;
    clear: left;
}


.alltools {
    background: url(images/bg-begin-repeat.jpg);
    color: #212121;
    padding: 0 0 1% 0;
}

.alltools a:link, .alltools a:visited, #foot a:link, #foot a:visited {
    color: #FFF;
    text-decoration:none;
	cursor:pointer;
}

.alltools a:hover, #foot a:hover {
    border-bottom: #FFF solid 1px;
}


.inneralltools {
    width: 100%;
    height: 100%;
    max-width: 980px;
    margin: 0 auto 0 auto;
}

.column {
    padding: 0.5%;
    display: inline-block;
    vertical-align: top;
    min-width: 220px;
}

.column {
		width:32%;
}

.four-columns .column {
    width: 23%;
}


ul.aliases, ul.projects, ul.tools, ul.vhost {
        	list-style: none;
        	line-height: 24px;
        }

ul.aliases a, ul.projects a, ul.tools a ,ul.vhost a {
        	padding-left: 22px;
        	background: url(../../index.php?img=pngFolder) 0 100% no-repeat;
        }
ul.tools a {
	background: url(../../index.php?img=pngWrench) 0 100% no-repeat;
}

#head ul li, dl ul li, #foot li {
	list-style: none;
	display: inline;
	margin: 0;
	padding: 0 0.4em;
}


#foot {
    margin: 0;
    padding: 0;
		text-align: center;
    height: 100px;
    line-height: 100px;
    background: url(images/bg-dl-repeat.jpg) repeat-x top;
}


</style>
<!--
<div class="footer" style="color: white; width: 80%; background: url(bg-begin-repeat.jpg); ">
<div class="divider1">&nbsp;</div>
		<ul style="    list-style-type:none;">
			<li><a href="#contactUs">Contact Us</a></li>
			<li><a href="#AboutUs">About Us</a></li>
			<li><a href="#feedback">Feedback</a></li>
		</ul>
<div class="divider2">&nbsp;</div>
</div>
-->


<div style="position: static;">
<div class="divider2">&nbsp;</div>
<div class="alltools four-columns">
	    <div class="inneralltools">
	        <div class="column">
	            <h2>Tools</h2>
	            <ul class="tools">
		            <li><a href="?phpinfo=1">About Us</a></li>
		            <li><a href="phpmyadmin/">Contact Us</a></li>
		            <li><a href="add_vhost.php?lang=english">Locate Us</a></li>
	            </ul>
	        </div>
    </div>
</div>


    <div class="divider1">&nbsp;</div>

    <ul id="foot">
		<li>The Pizza Box</li>
	</ul>
</div>