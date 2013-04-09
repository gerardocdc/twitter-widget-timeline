Twitter Timeline Widget
=======================

Purpose
-------
Creates a widget for Twitter showing a user's timeline.

Configuration
-------------
You must first create a widget for your Twitter account.
https://twitter.com/settings/widgets/
Once you have created the widget, you must obtain the widget's Id from the HTML code to insert in your site. They consist normally of a number (like 1234567890).

Usage
-----
	$twitterWidget = new TwitterWidgetTimeline();
	$twitterWidget->setUsername("my.twitter.username");
	$twitterWidget->setWidgetId("1234567890");
	$twitterWidget->render();

Copyright
---------
Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)

Copyright (c) 2012-3 Diaz-Caneja Consultores

Contact
--------
Gerardo Colorado Diaz-Caneja   gcdiazcaneja@diaz-caneja-consultores.com

Github: https://github.com/gerardocdc/twitter-widget-timeline (feel free to contribute)