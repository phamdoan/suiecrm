<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Hoạt động',
    'LBL_MODULE_TITLE' => 'Hoạt động: Trang chủ',
    'LBL_SEARCH_FORM_TITLE' => 'Hoạt động tìm kiếm',
    'LBL_LIST_FORM_TITLE' => 'Danh sách các hoạt động',
    'LBL_LIST_SUBJECT' => 'Chủ đề',
    'LBL_OVERVIEW' => 'Thông tin Khách hàng', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'NHIỆM VỤ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Hội họp', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CUỘC GỌI', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Emails', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'GHI CHÚ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'IN', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Hội họp',
    'LBL_CALL_TYPE' => 'Cuộc gọi',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Ghi chú',
    'LBL_DATA_TYPE_START' => 'Bắt đầu:',
    'LBL_DATA_TYPE_SENT' => 'Gửi:',
    'LBL_DATA_TYPE_MODIFIED' => 'Đã sửa:',
    'LBL_LIST_CONTACT' => 'Liên hệ',
    'LBL_LIST_RELATED_TO' => 'Liên quan đến',
    'LBL_LIST_DATE' => 'Ngày giờ',
    'LBL_LIST_CLOSE' => 'Đóng',
    'LBL_SUBJECT' => 'Chủ đề:',
    'LBL_STATUS' => 'Tình trạng:',
    'LBL_LOCATION' => 'Thời lượng:',
    'LBL_DATE_TIME' => 'Ngày & thời gian bắt đầu:',
    'LBL_DATE' => 'Ngày bắt đầu:',
    'LBL_TIME' => 'Thời gian bắt đầu:',
    'LBL_DURATION' => 'Thời lượng:',
    'LBL_HOURS_MINS' => '(giờ/phút)',
    'LBL_CONTACT_NAME' => 'Tên liên lạc: ',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú hoặc Đính kèm',
    'LNK_NEW_EMAIL' => 'Gửi Email',
    'LNK_CALL_LIST' => 'Xem cuộc gọi',
    'LNK_MEETING_LIST' => 'Xem Hội họp',
    'LNK_TASK_LIST' => 'Xem Tác vụ',
    'LNK_NOTE_LIST' => 'Ghi chú',
    'LBL_DELETE_ACTIVITY' => 'Bạn có chắc bạn muốn xóa bỏ các hoạt động này không?',
    'ERR_DELETE_RECORD' => 'Bạn phải chỉ định một bản ghi để xóa tài khoản.',
    'LBL_INVITEE' => 'Người được mời',
    'LBL_LIST_DIRECTION' => 'Phương hướng',
    'LBL_DIRECTION' => 'Phương hướng',
    'LNK_NEW_APPOINTMENT' => 'Cuộc hẹn mới',
    'LNK_VIEW_CALENDAR' => 'Xem lịch',
    'LBL_OPEN_ACTIVITIES' => 'Mở các hoạt động',
    'LBL_HISTORY' => 'Lịch sử',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Tạo Tác vụ',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Tạo Tác vụ',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Lịch họp',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Lịch họp',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Cuộc gọi',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Tạo Ghi chú hoặc Đính kèm',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Tạo Ghi chú hoặc Đính kèm',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Lưu trữ Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Lưu trữ Email',
    'LBL_LIST_STATUS' => 'Tình trạng',
    'LBL_LIST_DUE_DATE' => 'Ngày hạn',
    'LBL_LIST_LAST_MODIFIED' => 'Lần sửa cuối',
    'LNK_IMPORT_CALLS' => 'Nhập Cuộc gọi',
    'LNK_IMPORT_MEETINGS' => 'Nhập Hội họp',
    'LNK_IMPORT_TASKS' => 'Nhập Tác vụ',
    'LNK_IMPORT_NOTES' => 'Nhập Ghi chú',
    'LBL_ACCEPT_THIS' => 'Đồng ý?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mở các hoạt động',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Đã chỉ định cho người dùng',

    'LBL_ACCEPT' => 'Chấp nhận' /*for 508 compliance fix*/,
);
