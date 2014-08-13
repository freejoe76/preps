<VAR $domainURL = "http://preps.denverpost.com">
<?PHP $strNow = time() ?>
###YEARCHECK###
<VAR $fallTime = strtotime("10 August 2014")>
<VAR $midNovemberTime = strtotime("15 November 2014")>
<VAR $winterTime = strtotime("1 December 2014")>
<VAR $springTime = strtotime("5 March 2015")>

<VAR $externalURL = "http://preps.denverpost.com/home.html?">

<style type="text/css">
body {
   text-align: left!important;
}

ul.boxblue li
{
    font-size:16px;
    line-height:25px;
    font-weight:bold;
}

h1.prepheader { width: 654px; height: 75px!important;  background-position:left top; background-repeat:no-repeat; text-indent:-9000px; }

h1#prepphoto { background-image:url(http://extras.mnginteractive.com/live/media/site36/2012/0713/20120713_012002_stats.gif); }

</style>
<div id="breadcrumbs">
    <INCLUDE site=default tpl=TemplateBreadcrumbs>
</div>

<h1 class="prepheader" id="prepphoto">Stats for Colorado High School Sports</h1>
<!--<h1>Stats for Colorado High School Sports</h1>-->

<h2>Schedules, results, standings, leaders and more.</h2>

<ul class="subnav">
    <li><a href="{$externalURL}site=default&tpl=About">Read our welcome announcement</a></li>
    <li><a href="#today">Skip down to today's game schedule</a></li>
    <li><a href="http://preps.denverpost.com/sport/">Find sports not currently in season</a></li>
</ul>


<IFGREATER $strNow $springTime>
<h2>Spring Sports</h2>
<ul class="subnav">
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=29" title="Prep Baseball in Colorado">Baseball</a></li>
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=35" title="Prep Boys Lacrosse">Boys Lacrosse</a></li>
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=16" title="Prep Boys Swimming and Diving in Colorado">Boys Swimming and Diving</a></li>
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=25" title="Prep Girls Tennis in Colorado">Boys Track and Field</a></li>
<!--  <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=19" title="Prep Girls Golf in Colorado">Girls Golf</a></li>  -->
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=36" title="Prep Girls Lacrosse in Colorado">Girls Lacrosse</a></li>
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=15" title="Prep Girls Soccer in Colorado">Girls Soccer</a></li>
<!-- <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=31" title="Prep Girls Tennis in Colorado">Girls Tennis</a></li> -->
 <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=28" title="Prep Girls Track and Field in Colorado">Girls Track and Field</a></li>
</ul>
<ELSE>
<IFGREATER $strNow  $winterTime>
<h2>Winter Sports</h2>
<ul class="subnav">
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=6" title="Prep Boys Basketball in Colorado">Boys Basketball</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=21" title="Prep Girls Basketball in Colorado">Girls Basketball</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=17" title="Prep Girls Swimming and Diving in Colorado">Girls Swimming and Diving</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=34" title="Prep Ice Hockey in Colorado">Ice Hockey</a></li>
<!--    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=23" title="Prep Wrestling in Colorado">Wrestling</a></li>  -->
</ul>
<ELSE>
<IFGREATER $strNow  $midNovemberTime>
<h2>Fall Sports</h2>
<ul class="subnav">
    <li><a href="http://preps.denverpost.com/sport/football/" title="Prep Football in Colorado">State football championships</a></li>
</ul>
<ELSE>
<h2>Fall Sports</h2>
<ul class="subnav">
<!--   <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=13" title="Prep Boys Cross Country in Colorado">Boys Cross Country</a></li> -->
<!--    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=14" title="Prep Girls Cross Country in Colorado">Girls Cross Country</a></li> -->
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=32" title="Prep Field Hockey in Colorado">Field Hockey</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=1" title="Prep Football in Colorado">Football</a></li>
<!--    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=18" title="Prep Boys Golf in Colorado">Boys Golf</a></li> -->
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=33" title="Prep Girls Gymnastics in Colorado">Girls Gymnastics</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=12" title="Prep Boys Soccer in Colorado">Boys Soccer</a></li>
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=30" title="Prep Softball in Colorado">Softball</a></li>
<!--    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=27" title="Prep Boys Tennis in Colorado">Boys Tennis</a></li>  -->
    <li><a href="http://preps.denverpost.com/home.html?site=default&tpl=Sport&Sport=11" title="Prep Girls Volleyball in Colorado">Girls Volleyball</a></li>
</ul>
</IFGREATER>
</IFGREATER>
</IFGREATER>

###<QUERY name=SportBySeasonAndGender WHERECLAUSE = $whereClause BYTEAM=0>
<ul>
<RESULTS list=SportBySeasonAndGender_rows prefix=Sport>
    <IFEQUAL $Sport_SportSeasonRank 1>
    <li><a href="{$externalURL}site=default&tpl=Team&Sport={$Sport_SportID}" title="Colorado Prep {$Sport_SportName}">{$Sport_SportName}</a></li>
    </IFEQUAL>
</RESULTS>
</ul>###


### 
###


###
###
<VAR $form_count = 250>
<VAR $count = 250>


<a name="yesterday"></a>
<h2>Yesterday's scores and results</h2>
<?PHP $yesterday = time() - 86400; ?>
<VAR $sort="Sport.SportName, GameDate DESC, GameTime DESC">
<VAR $form_SearchDate = date("m/d/Y", $yesterday)>
<VAR $form_SearchDateEnd = date("m/d/Y", $yesterday)>
<INCLUDE site=default tpl=ScheduleResultsWrapper>
<?PHP
//include("/var/www/denver/tpweb/web/templates/tplScheduleResultsWrapper_default.php");
?>



<?PHP
unset($_REQUEST);
?>

<a name="today"></a>
<h2>Today's games and meets</h2>
<VAR $sort="Sport.SportName, GameDate, GameTime">
<VAR $form_SearchDate = date("m/d/Y")>
<VAR $form_SearchDateEnd = date("m/d/Y")>

<?PHP
//include("/var/www/denver/tpweb/web/templates/tplScheduleInclude_default.php");
?>
<INCLUDE site=default tpl=ScheduleInclude>
### <INCLUDE site=default tpl=TodaySchedule> ###
