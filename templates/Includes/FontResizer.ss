<ul class="fontSizeChooser">
	<li class="increaseFont"><a href="$URLSegment/increasefontsize/">+ increase</a></li>
	<li class="resetFont<% if HasAlteredFont %> hasAlteredFont<% else %> doesNotHaveAlteredFont<% end_if %>"><a href="$URLSegment/resetfontsize/">0 reset (current font-size is: <span class="currentFontSizeInPercentages">{$CurrentFontSizeInPercentages}%</span>)</a></li>
	<li class="decreaseFont"><a href="$URLSegment/decreasefontsize/">- decrease</a></li>
</ul>