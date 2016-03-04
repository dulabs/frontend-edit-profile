=== Frontend Edit Profile ===
Contributors: abdul_ibad, dulabs
Plugin Name: Frontend Edit Profile
Plugin URI: http://fep.dulabs.com
Donate Link: http://fep.dulabs.com
Tags: profile, pages, posts, frontend
Requires at least: 3.0
Tested up to: 3.0
Stable tag: 1.0

Wordpress plugin to add profile information to your frontend with shortcode, no coding required.

== Description ==

Wordpress plugin to add profile information to your frontend through shortcode, without coding or hacks. Great for membership site.

= Note =
Since version 1.0.5, You need to separate between login and profile page, See installation.

= Development =
See development update at github
https://github.com/dulabs/frontend-edit-profile

= Whitelist =
not all plugins compatible, see our whitelist 
http://fep.dulabs.com/

Tested on Wordpress 4.0.0
Please backup before upgrade.

== Installation ==
This section describes how to install the plugin and get it working.

See <a href="http://codex.wordpress.org/Managing_Plugins#Installing_Plugins">WordPress Codex Plugins Documentation</a>

= Shortcode =
Since v1.0.5
shortcode to show login page.
`[LOGIN_FORM]`

shortcode to show profile page.
`[PROFILE_FORM]` 

= Old Version=

for version < v1.0.3 

insert [LOGIN] or [EDITPROFILE] to your post or page.

and You are ready to go!

= Widget = 

You need to configure login and register url in setting page.


== Screenshots ==

1. General Settings
2. Disable Contact Methods

== Changelog ==

= Version 1.0.6 =
* added: russian and swedish languages
* feature: override URL
* fixed: global wp-roles
see <a href="https://github.com/dulabs/frontend-edit-profile/pull/6">Development Status</a> 
[Updated Mar 04, 2016]

= Version 1.0.5 =
* Separate between login page and profile page
* Assign login,logout, and lost password through custom url or page
* Add After Login Title in widget
[Updated Jan 07, 2016]


= Version 1.0.3 =
* Feature: Widget login form
* Feature: Custom login url, logout url, lostpassword url, and password  hint
* Fixed: remove plugin password strength meter and change to wordpress default password strength meter
[Updated Jul 13, 2014]


= Version 1.0.2 =
* Fixed bug on [http://wordpress.org/support/topic/481466]
* Feature: login form
* Feature: Custom login url, logout url, lostpassword url, and password  hint
* Feature: Disable Contact Method(s)
[Updated Nov 29, 2010]

= Version 1.0.1 =
* Fixed: undefined function get_user_to_edit

= Version 1.0.0 =
* Initial release
* [Updated Oct 30, 2010]