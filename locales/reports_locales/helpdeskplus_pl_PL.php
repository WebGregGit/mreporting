<?php

/**
 * -------------------------------------------------------------------------
 * Mreporting plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Mreporting.
 *
 * Mreporting is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Mreporting is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Mreporting. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2003-2022 by Mreporting plugin team.
 * @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/pluginsGLPI/mreporting
 * -------------------------------------------------------------------------
 */

global $LANG;

$LANG['plugin_mreporting']['Helpdeskplus'] = [
   'title'         => 'Zgłoszenia - rozszerzone',

   // MISC LOCALES
   'backlogs'      => "Backlogs",
   'opened'        => "Otwarte",
   'period'        => "Period",
   'backlogstatus' => "Status to display",
   'slaobserved'   => "SLA observed",
   'slanotobserved'=> "SLA not observed",
   'observed'      => "observed",
   'notobserved'   => "not observed",


   // SELECTOR
   'selector'      => [
      'slas'       => "SLAS",
      'categories' => "Categories",
   ],


   // GENERAL REPORTS
   'reportGlineBacklogs' => [
      'title'    => "Backlog",
      'desc'     => "",
      'category' => "General",
   ],

   'reportVstackbarLifetime' => [
      'title'    => "Wiek nierozwiązanych zgłoszeń",
      'desc'     => "",
      'category' => "General",
   ],

   'reportVstackbarTicketsgroups' => [
      'title'    => "Zgłoszenia nierozwiązane wg grup",
      'desc'     => "",
      'category' => "General",
   ],

   'reportVstackbarTicketstech' => [
      'title'    => "Zgłoszenia nierozwiązane wg przypisanego technika",
      'desc'     => "",
      'category' => "General",
   ],

   'reportVstackbarWorkflow' => [
      'title'    => "Orientation queues",
      'desc'     => "",
      'category' => "General",
   ],

   'reportHbarTopcategory' => [
      'title'    => "Najbardziej popularne kategorie",
      'desc'     => "",
      'category' => "General",
   ],

   'reportHbarTopapplicant' => [
      'title'    => "Najbardziej popularne grupy techników",
      'desc'     => "",
      'category' => "General",
   ],

   'reportVstackbarGroupChange' => [
      'title'    => "Number of group changes",
      'desc'     => "",
      'category' => "General",
   ],

   'reportLineActiontimeVsSolvedelay' => [
      'title'    => "Task action times and solve delay comparison",
      'desc'     => "",
      'category' => "General",
   ],


   // SLA REPORTS
   'reportVstackbarNbTicketBySla' => [
      'title'    => "Zgłoszenia wg SLA",
      'desc'     => "",
      'category' => "Per SLA",
   ],

   'reportGlineNbTicketBySla' => [
      'title'    => "Zmiana zgłoszeń wg SLA",
      'desc'     => "",
      'category' => "Per SLA",
   ],

   'reportHgbarRespectedSlasByTopCategory' => [
      'title'    => "Zgłoszenia wg SLA uporządkowane po kategorii",
      'desc'     => "",
      'category' => "Per SLA",
   ],

   'reportHgbarRespectedSlasByTechnician' => [
      'title'    => "Zgłoszenia wg SLA uporządkowane po przypisanym techniku",
      'desc'     => "",
      'category' => "Per SLA",
   ],

   'reportVstackbarRespectedSlasByGroup' => [
      'title'    => "Zgłoszenia wg SLA uporządkowane po grupach",
      'desc'     => "",
      'category' => "Per SLA",
   ],
];