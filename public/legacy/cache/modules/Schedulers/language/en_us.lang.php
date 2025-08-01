<?php
// created: 2025-07-31 15:32:36
$mod_strings = array (
  'LBL_OOTB_WORKFLOW' => 'Process Workflow Tasks',
  'LBL_OOTB_REPORTS' => 'Run Report Generation Scheduled Tasks',
  'LBL_OOTB_IE' => 'Check Inbound Mailboxes',
  'LBL_OOTB_BOUNCE' => 'Run Nightly Process Bounced Campaign Emails',
  'LBL_OOTB_CAMPAIGN' => 'Run Nightly Mass Email Campaigns',
  'LBL_OOTB_PRUNE' => 'Prune Database on 1st of Month',
  'LBL_OOTB_TRACKER' => 'Prune Tracker Tables',
  'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Removal of documents from filesystem',
  'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
  'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
  'LBL_LIST_JOB_INTERVAL' => 'Interval:',
  'LBL_LIST_LIST_ORDER' => 'Schedulers:',
  'LBL_LIST_NAME' => 'Scheduler:',
  'LBL_LIST_RANGE' => 'Range:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LIST_TITLE' => 'Schedule List:',
  'LBL_SUN' => 'Sunday',
  'LBL_MON' => 'Monday',
  'LBL_TUE' => 'Tuesday',
  'LBL_WED' => 'Wednesday',
  'LBL_THU' => 'Thursday',
  'LBL_FRI' => 'Friday',
  'LBL_SAT' => 'Saturday',
  'LBL_ALL' => 'Every Day',
  'LBL_EVERY' => 'Every',
  'LBL_FROM' => 'From',
  'LBL_ON_THE' => 'On the',
  'LBL_RANGE' => 'to',
  'LBL_AND' => 'and',
  'LBL_MINUTES' => 'minutes',
  'LBL_HOUR' => 'hours',
  'LBL_HOUR_SING' => 'hour',
  'LBL_OFTEN' => 'As often as possible.',
  'LBL_MIN_MARK' => 'minute mark',
  'LBL_MINS' => 'min',
  'LBL_HOURS' => 'hrs',
  'LBL_DAY_OF_MONTH' => 'date',
  'LBL_MONTHS' => 'mo',
  'LBL_DAY_OF_WEEK' => 'day',
  'LBL_CRONTAB_EXAMPLES' => 'The above uses standard crontab notation.',
  'LBL_ALWAYS' => 'Always',
  'LBL_CATCH_UP' => 'Execute If Missed',
  'LBL_CATCH_UP_WARNING' => 'Uncheck if this job may take more than a moment to run.',
  'LBL_DATE_TIME_END' => 'Date & Time End',
  'LBL_DATE_TIME_START' => 'Date & Time Start',
  'LBL_INTERVAL' => 'Interval',
  'LBL_JOB' => 'Job',
  'LBL_JOB_URL' => 'Job URL',
  'LBL_LAST_RUN' => 'Last Successful Run',
  'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
  'LBL_MODULE_TITLE' => 'Schedulers',
  'LBL_NAME' => 'Job Name',
  'LBL_NEVER' => 'Never',
  'LBL_NEW_FORM_TITLE' => 'New Schedule',
  'LBL_PERENNIAL' => 'perpetual',
  'LBL_SEARCH_FORM_TITLE' => 'Scheduler Search',
  'LBL_SCHEDULER' => 'Scheduler:',
  'LBL_STATUS' => 'Status',
  'LBL_TIME_FROM' => 'Active From',
  'LBL_TIME_TO' => 'Active To',
  'LBL_WARN_CURL_TITLE' => 'cURL Warning:',
  'LBL_WARN_CURL' => 'Warning:',
  'LBL_WARN_NO_CURL' => 'This system does not have the cURL libraries enabled/compiled into the PHP module (--with-curl=/path/to/curl_library). Please contact your administrator to resolve this issue. Without the cURL functionality, the Scheduler cannot thread its jobs.',
  'LBL_BASIC_OPTIONS' => 'Basic Setup',
  'LBL_ADV_OPTIONS' => 'Advanced Options',
  'LBL_TOGGLE_ADV' => 'Show Advanced Options',
  'LBL_TOGGLE_BASIC' => 'Show Basic Options',
  'LNK_LIST_SCHEDULER' => 'Schedulers',
  'LNK_NEW_SCHEDULER' => 'Create Scheduler',
  'ERR_CRON_SYNTAX' => 'Invalid Cron syntax',
  'NTC_LIST_ORDER' => 'Set the order this schedule will appear in the Scheduler dropdown lists',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'To Setup Windows Scheduler',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'To Setup Crontab',
  'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
  'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
  'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
  'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
  'LBL_EXECUTE_TIME' => 'Execute Time',
  'LBL_REFRESHJOBS' => 'Refresh Jobs',
  'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
  'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Run Nightly Mass Email Campaigns',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Run Nightly Process Bounced Campaign Emails',
  'LBL_PRUNEDATABASE' => 'Prune Database on 1st of Month',
  'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
  'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
  'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
  'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
  'LBL_REMOVEDOCUMENTSFROMFS' => 'Removal of documents from filesystem',
  'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
  'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
  'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',
  'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
  'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
  'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);