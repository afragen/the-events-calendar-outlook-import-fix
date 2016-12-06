=== The Events Calendar Outlook Import Fix ===
Contributors: afragen
Donate link: http://bit.ly/outlook-import-fix
Tags: events, outlook, modern tribe, ical feed, icalendar
Requires at least: 3.7
Tested up to: 4.7
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fix import of calendar events from The Events Calendar to Outlook.

== Description ==

[The Events Calendar](https://wordpress.org/plugins/the-events-calendar) allows for the import of calendar events via download of a generated iCalendar file. This generated file contains the `X-WR-CALNAME` header, which is a valid header.

Unfortunately Outlook chokes and will create a new calendar when it sees this header instead of adding the event(s) to the default Outlook calendar. This plugin removes that header from the generated iCalendar file.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `the-events-calendar-outlook-import-fix` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why would I need this? =

You would only need this plugin if you use [The Events Calendar](https://wordpress.org/plugins/the-events-calendar) and your users only use Outlook for their calendar app. If your users don't use Outlook then using this plugin may have deleterious effects when importing events into Google Calendar or Apple's Calendar.

= How can I help? =

If you have ideas for improvements the code is up on [GitHub](https://github.com/afragen/the-events-calendar-outlook-import-fix). Please feel free to fork it and submit a pull request against the develop branch.

== Changelog ==

= 1.0.3 =
* update tested to

= 1.0.2 =
* tested to 4.3

= 1.0.1 =
* tested to 4.1

= 1.0.0 =
* initial release
