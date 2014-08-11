<table cellpadding="0" cellspacing="0" class="teamStatTable">
<tr><td colspan=50><font class="pageTitle">Team Stats</font> 
<span id="showKey"><a href="javascript:showKey('statKey')" class="keyButton">Show key</a></span>
<span id="hideKey" style="display:none"><a href="javascript:hideKey('statKey')" class="keyButton">Hide key</a></span></td></tr>
<tr><td colspan=50>
<div id="statKey" style="display:none">
<table class="keyTable" cellpadding="0" cellspacing="0">
<tr class="statKeyRow">
<td id="keyPoints">Pts: Points</td>
<td id="keyOffensiveRebounds">OREB: Offensive rebounds</td>
</tr>
<tr class="statKeyRowAlt">
<td id="keyFieldGoalsMade">FGM: Field goals made</td>
<td id="keyOffensiveRebounds">DREB: Defensive rebounds</td>
</tr>
<tr class="statKeyRow">
<td id="keyFieldGoalsAttempted">FGA: Field goals attempted</td>
<td id="keyAssists">AST: Assists</td>
</tr>
<tr class="statKeyRowAlt">
<td id="keyThreePointersMade">3PM: Three pointers made</td>
<td id="keySteals">STL: Steals</td>
</tr>
<tr class="statKeyRow">
<td id="keyThreePointersAttempted">3PA: Three pointers attempted</td>
<td id="keyBlockedShots">BLK: Blocked shots</td>
</tr>
<tr class="statKeyRowAlt">
<td id="keyFreeThrowsMade">FTM: Free throws made</td>
<td id="keyTurnovers">TO: Turnovers</td>
</tr>
<tr class="statKeyRow">
<td id="keyFreeThrowsAttempted">FTA: Free throws attempted</td>
<td id="keyPersonalFouls">PF: Personal fouls</td>
</tr>
<tr class="statKeyRowAlt">
<td id="keyFieldGoalPercentage">FGPCT: Field goal percentage</td>
<td id="keyThreePointerPercentage">3PPCT: Three pointer percentage</td>
</tr>
<tr class="statKeyRow">
<td id="keyFreeThrowPercentage">FTPCT: Free throw percentage</td>
<td id="keyPointsPerGame">PPG: Points per game</td>
</tr>
</table>
</div>
</td></tr>
<tr class="teamStatsHeader">
<td onmouseover="highlightKey('keyPoints')" onmouseout = "unHighlightKey('keyPoints')">Pts</td>
<td onmouseover="highlightKey('keyFieldGoalsMade')" onmouseout = "unHighlightKey('keyFieldGoalsMade')">FGM</td>
<td onmouseover="highlightKey('keyFieldGoalsAttempted')" onmouseout = "unHighlightKey('keyFieldGoalsAttempted')">FGA</td>
<td onmouseover="highlightKey('keyFieldGoalPercentage')" onmouseout = "unHighlightKey('keyFieldGoalPercentage')">FGPCT</td>
<td onmouseover="highlightKey('keyThreePointersMade')" onmouseout = "unHighlightKey('keyThreePointersMade')">3PM</td>
<td onmouseover="highlightKey('keyThreePointersAttempted')" onmouseout = "unHighlightKey('keyThreePointersAttempted')">3PA</td>
<td onmouseover="highlightKey('keyThreePointerPercentage')" onmouseout = "unHighlightKey('keyThreePointerPercentage')">3PPCT</td>
<td onmouseover="highlightKey('keyFreeThrowsMade')" onmouseout = "unHighlightKey('keyFreeThrowsMade')">FTM</td>
<td onmouseover="highlightKey('keyFreeThrowsAttempted')" onmouseout = "unHighlightKey('keyFreeThrowsAttempted')">FTA</td>
<td onmouseover="highlightKey('keyFreeThrowPercentage')" onmouseout = "unHighlightKey('keyFreeThrowPercentage')">FTPCT</td>
<td onmouseover="highlightKey('keyOffensiveRebounds')" onmouseout = "unHighlightKey('keyOffensiveRebounds')">OREB</td>
<td onmouseover="highlightKey('keyDefensiveRebounds')" onmouseout = "unHighlightKey('keyDefensiveRebounds')">DREB</td>
<td onmouseover="highlightKey('keyAssists')" onmouseout = "unHighlightKey('keyAssists')">AST</td>
<td onmouseover="highlightKey('keySteals')" onmouseout = "unHighlightKey('keySteals')">STL</td>
<td onmouseout = "unHighlightKey('keyBlockedShots')">BLK</td>
<td onmouseover="highlightKey('keyTurnovers')" onmouseout = "unHighlightKey('keyTurnovers')">TO</td>
<td onmouseover="highlightKey('keyPersonalFouls')" onmouseout = "unHighlightKey('keyPersonalFouls')">PF</td>
</tr>
<tr class="resultsText">
<td align="right">{$TeamSeasonStats_Points}</td>
<td align="right">{$TeamSeasonStats_FieldGoalsMade}</td>
<td align="right">{$TeamSeasonStats_FieldGoalsAttempted}</td>
<VAR $fgpct = round($TeamSeasonStats_FieldGoalPercentage,2)>
<td align="right">{$fgpct}</td>
<td align="right">{$TeamSeasonStats_ThreePointersMade}</td>
<td align="right">{$TeamSeasonStats_ThreePointersAttempted}</td>
<VAR $tppct = round($TeamSeasonStats_ThreePointerPercentage,2)>
<td align="right">{$tppct}</td>
<td align="right">{$TeamSeasonStats_FreeThrowsMade}</td>
<td align="right">{$TeamSeasonStats_FreeThrowsAttempted}</td>
<VAR $ftpct = round($TeamSeasonStats_FreeThrowPercentage,2)>
<td align="right">{$ftpct}</td>
<td align="right">{$TeamSeasonStats_OffensiveRebounds}</td>
<td align="right">{$TeamSeasonStats_DefensiveRebounds}</td>
<td align="right">{$TeamSeasonStats_Assists}</td>
<td align="right">{$TeamSeasonStats_Steals}</td>
<td align="right">{$TeamSeasonStats_BlockedShots}</td>
<td align="right">{$TeamSeasonStats_Turnovers}</td>
<td align="right">{$TeamSeasonStats_PersonalFouls}</td>
</td>
</tr>
</table>