<?php
/**
 * Class TwitterWidgetTimeline
 * Creates a widget for Twitter showing a user's timeline
 * https://twitter.com/settings/widgets/
 *
 * @author		Gerardo Colorado Diaz-Caneja <gcdiazcaneja@diaz-caneja-consultores.com>
 * @link		http://www.diaz-caneja-consultores.com
 * @link        https://github.com/gerardocdc/twitter-widget-timeline
 * @copyright	Copyright (c) 2012 Diaz-Caneja Consultores
 * @license		Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
 * @version     1.1
 * @filesource
 */

/**
 * Class TwitterWidgetTimeline
 * Creates a widget for Twitter showing a user's timeline
 * https://twitter.com/settings/widgets/
 *
 * Usage:
 * <code>
 *      $twitterWidget = new TwitterWidgetTimeline();
 *		$twitterWidget->setUsername("my.twitter.username");
 *		$twitterWidget->setWidgetId("1234567890";
 *		$twitterWidget->render();
 * </code>
 *
 * @package		Twitter
 * @version     1.1
 * @since		Version 1.0
 */
class TwitterWidgetTimeline
{
	/*--------------------------------------------
	|             V A R I A B L E S             |
	============================================*/

	/**
	 * Twitter username
	 *
	 * @var string
	 */
	private $username;

	/**
	 * Twitter widget id
	 *
	 * @var integer
	 */
	private $widgetId;

	/*--------------------------------------------
	|           C O N S T R U C T O R           |
	============================================*/

	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/*--------------------------------------------
	|      G E T T E R S / S E T T E R S        |
	============================================*/

	/**
	 * @param string $username
	 */
	public function setUsername($username)
	{
		$this->username = $username;
	}

	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @param int $widgetId
	 */
	public function setWidgetId($widgetId)
	{
		$this->widgetId = $widgetId;
	}

	/**
	 * @return int
	 */
	public function getWidgetId()
	{
		return $this->widgetId;
	}

	/*--------------------------------------------
	|        C L A S S   M E T H O D S          |
	============================================*/

	/**
	 * Renderizes and creates the Twitter Widget Timeline
	 */
	public function render()
	{
		$code = "<a class=\"twitter-timeline\"";
		$code .= "href=\"https://twitter.com/".$this->getUsername()."\"";
		$code .= "data-widget-id=\"".$this->getWidgetId()."\">";
		$code .= "Tweets por @".$this->getUsername()."</a>\r\n";
		$code .= "<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>\r\n";

		echo $code;
	}
}