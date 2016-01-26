<widget type="events_calendar">
	<arg id="mini_cal_heat_map">true</arg>
	<arg id="thumb_width">200</arg>
	<arg id="thumb_height">200</arg>
	<arg id="hide_repeats">true</arg>
	<arg id="show_groups">false</arg>
	<arg id="show_tags">false</arg>
	<arg id="modular">true</arg>
	<arg id="default_view">month</arg>
	<arg id="exclude_group">Admin</arg>
</widget>

<div class="row">
	<div class="col-md-3 col-md-push-9" id="sidebar">
		<div id="lw_mini_cal"></div>

		<xphp var="lw_calendar_subscribe"/>

		<div class="lw_cal_search_wrapper">
			<xphp var="lw_calendar_search"/>
			<span class="fa fa-search lw_search_icon"></span>
		</div>

		<xphp var="lw_calendar_calendars"/>

		<xphp var="lw_calendar_groups"/>

		<xphp var="lw_calendar_categories"/>

		<xphp var="lw_calendar_tags"/>
	</div>
	<div class="col-md-9 col-md-pull-3" id="main">
		<xphp var="lw_calendar_view_menu"/>
		<xphp var="lw_calendar"/>
	</div>
</div>