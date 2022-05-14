=== The Events Calendar Outlook Import Fix ===
Contributors: afragen
Donate link: http://bit.ly/outlook-import-fix
Tags: events, outlook, modern tribe, ical feed, icalendar
Requires at least: 3.7
Requires PHP: 5.3
Stable tag: 1.1.0
Tested up to: 6.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fix import of calendar events from The Events Calendar to Outlook.

== Description ==

[The Events Calendar](https://wordpress.org/plugins/the-events-calendar) allows for the import of calendar events via download of a generated iCalendar file. This generated file contains the `X-WR-CALNAME` header, which is a valid header.

Unfortunately Outlook chokes and will create a new calendar when it sees this header instead of adding the event(s) to the default Outlook calendar. This plugin removes that header from the generated iCalendar file.

== Frequently Asked Questions ==

= Why would I need this? =

You would only need this plugin if you use [The Events Calendar](https://wordpress.org/plugins/the-events-calendar) and your users only use Outlook for their calendar app. If your users don't use Outlook then using this plugin may have deleterious effects when importing events into Google Calendar or Apple's Calendar.

= How can I help? =

If you have ideas for improvements the code is up on [GitHub](https://github.com/afragen/the-events-calendar-outlook-import-fix). Please feel free to fork it and submit a pull request against the develop branch.

== Changelog ==

#### 1.1.0 / 2021-07-07
* add @10up GitHub Actions for WordPress SVN

#### 1.0.6 / 2020-11-26
* add `X-MS-OLK-FORCEINSPECTOROPEN:TRUE` to ics instead of removing `X-WR-CALNAME` - only works for single events
* no functional changes from previous version

#### 1.0.5 / 2018-07-10
* fix filter for only one parameter

#### 1.0.4 / 2017-11-11
* bump tested to
* remove branch header

#### 1.0.3
* bump tested to

#### 1.0.2
* tested to 4.3

#### 1.0.1
* tested to 4.1

#### 1.0.0
* initial release
