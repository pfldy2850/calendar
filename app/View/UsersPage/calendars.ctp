<div id = "sideBar" class = "side-bar">
	<div class = "profile">
		<div class = "profile-photo">
		</div>

		<div class = "profile-name">
			nobinson94님
		</div>

		<textarea class = "profile-status-message" readonly="readonly"></textarea>

		<div id = "profileBtns" class = "profile-btns">
			<div class = "logout-btn btn">
				로그아웃
			</div>

			<div class = "mypage-btn btn">
				마이페이지
			</div>
		</div>
	</div>

	<div id ="pageNavigation" class="page-navigation">
		<form id = "myCalendarBtnForm" action = "./calendars" method="GET">
			<input type = "hidden" name = "type" value = "monthly">
			<button class = "mycalendar-btn navi-on">
				<div class = "mycalendar-btn-icon">
				</div>
				<div class = "mycalendar-btn-text">
					Calendar
				</div>
			</button>
		</form>
		<form id = "myMeetingsBtnForm" action = "./meetings">
			<button class = "mymeetings-btn">
				<div class = "mymeetings-btn-icon">
				</div>
				<div class = "mymeetings-btn-text">
					Meetings
				</div>
			</button>
		</form>
	</div>
</div>

<div id = "contents" class = "contents">
	<div class = "upper-bar">
		<div class = "contents-title">
			My Calendar
		</div>
		<?php if($type == 'weekly') {; ?>
		<div id = "calendarBtns" class = "calendar-btns">
			<form id = "monthlyBtnForm" action = "./calendars" class = "monthly-btn-form" method="GET">
				<input type = "hidden" name = "type" value = "monthly">
				<button id = "monthlyBtn" class = "monthly-btn">
					Monthly
				</button>
			</form>
			<form id = "weeklyBtnForm" action = "./calendars" class = "weekly-btn-form" method="GET">
				<input type = "hidden" name = "type" value = "weekly">
				<button id = "weeklyBtn" class = "weekly-btn calendar-btn-on">
					Weekly
				</button>
			</form>
		</div>
		<?php } else { ?>
		<div id = "calendarBtns" class = "calendar-btns">
			<form id = "monthlyBtnForm" action = "./calendars"  class = "monthly-btn-form" method="GET">
				<input type = "hidden" name = "type" value = "monthly">
				<button id = "monthlyBtn" class = "monthly-btn calendar-btn-on">
					Monthly
				</button>
			</form>
			<form id = "weeklyBtnForm" action = "./calendars" class = "weekly-btn-form" method="GET">
				<input type = "hidden" name = "type" value = "weekly">
				<button id = "weeklyBtn" class = "weekly-btn">
					Weekly
				</button>
			</form>
		</div>
		<?php }?>
	</div>
	<div class = "below-contents">
		<div class = "main-below-content">
			<div id = "mainContent" class = "main-content">
				캘린더나 미팅들 넣는곳
			</div>
		</div>

		<div class = "side-below-content">
			<div class = "side-btns">
				<button id= "upperBtn" class = "upper-btn">
					<div class = "sync-btn-icon">
					</div>
					<div class = "sync-btn-text">
						동기화하기
					</div>
				</button>

				<button id="belowBtn" class = "below-btn">
					<div class = "edit-btn-icon">
					</div>
					<div class = "edit-btn-text">
						수정/추가하기
					</div>
				</button>
			</div>
		</div>
	</div>
</div>
