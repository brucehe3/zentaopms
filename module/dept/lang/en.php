<?php
/**
 * The dept module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     dept
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
$lang->dept->common      = 'Department';
$lang->dept->manageChild = "Child Dept";
$lang->dept->edit        = "Edit";
$lang->dept->delete      = "Delete";
$lang->dept->parent      = "Parent Dept";
$lang->dept->manager     = "Manager";
$lang->dept->name        = "Department Name";
$lang->dept->browse      = "Manage";
$lang->dept->manage      = "Manage Department";
$lang->dept->updateOrder = "Sort";
$lang->dept->add         = "Add Department";
$lang->dept->dragAndSort = "Drag and Sort";

$lang->dept->confirmDelete = " Do you want to delete this Department?";
$lang->dept->successSave   = " Saved!";

$lang->dept->error = new stdclass();
$lang->dept->error->hasSons  = 'This Department has child departments. You cannot delete it!';
$lang->dept->error->hasUsers = 'This Department has users. You cannot delete it!';
