<?php
$lang->cron->common      = 'Cron';
$lang->cron->index       = 'Home';
$lang->cron->list        = 'Task';
$lang->cron->create      = 'Add';
$lang->cron->edit        = 'Edit';
$lang->cron->delete      = 'Delete';
$lang->cron->toggle      = 'Activate/Deactivate';
$lang->cron->turnon      = 'On/Off';
$lang->cron->openProcess = 'Restart';

$lang->cron->m        = 'Min';
$lang->cron->h        = 'Hour';
$lang->cron->dom      = 'Day';
$lang->cron->mon      = 'Month';
$lang->cron->dow      = 'Week';
$lang->cron->command  = 'Command';
$lang->cron->status   = 'Status';
$lang->cron->type     = 'Type';
$lang->cron->remark   = 'Comment';
$lang->cron->lastTime = 'Last Executed';

$lang->cron->turnonList['1'] = 'On';
$lang->cron->turnonList['0'] = 'Shutdown';

$lang->cron->statusList['normal']  = 'Normal';
$lang->cron->statusList['running'] = 'Running';
$lang->cron->statusList['stop']    = 'Stop';

$lang->cron->typeList['zentao'] = 'Self call';
$lang->cron->typeList['system'] = 'System Command';

$lang->cron->toggleList['start'] = 'Activate';
$lang->cron->toggleList['stop']  = 'Deactivate';

$lang->cron->confirmDelete = 'Do you want to delete the cron?';
$lang->cron->confirmTurnon = 'Do you want to turn off the Cron?';
$lang->cron->introduction  = <<<EOD
<p>Cron is to perform scheduled actions, such as update burndown chart, backup, etc.</p>
<p>Features of Cron need to be improved, so it is turned off by default.</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>Do you want to turn it on?<a href="%s" target='hiddenwin'><strong>Turn On Scheduled Task<strong></a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = 'Range:0-59，"*" means the numbers within the range, "/" means "per", "-" means ranger.';
$lang->cron->notice->h    = 'Range:0-23';
$lang->cron->notice->dom  = 'Range:1-31';
$lang->cron->notice->mon  = 'Range:1-12';
$lang->cron->notice->dow  = 'Range:0-6';
$lang->cron->notice->help = 'Note：If the server is restarted, or the Cron is not working, it means the Cron has stopped. You can restart it by clicking 【Restart】 or refresh this page. If the last execution time is changed, it means the Cron is running.';
$lang->cron->notice->errorRule = '"%s" is not valid';
