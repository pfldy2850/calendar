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
			<button class = "mycalendar-btn">
				<div class = "mycalendar-btn-icon">
				</div>
				<div class = "mycalendar-btn-text">
					Calendar
				</div>
			</button>
		</form>
		<form id = "myMeetingsBtnForm" action = "./meetings">
			<button class = "mymeetings-btn navi-on">
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
			My Meetings
		</div>
	</div>

	<div class = "below-contents">
		<div class = "main-below-content">
			<div id = "mainContent" class = "main-content">
				캘린더나 미팅들 넣는곳
			</div>
		</div>

		<div class = "side-below-content">
			<div class = "side-btns">
				<button class = "sync-btn">
					<div class = "sync-btn-icon">
					</div>
					<div class = "sync-btn-text">
						동기화하기
					</div>
				</button>

				<button class = "edit-btn">
					<div class = "edit-btn-icon">
					</div>
					<div class = "edit-btn-text">
						수정하기
					</div>
				</button>
			</div>
		</div>
	</div>
</div>
