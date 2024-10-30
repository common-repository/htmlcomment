=== HTMLComment ===
Contributors: Henry Hartley
Tags: hidden, hide text, hide post, html
Requires at least: 1.0
Tested up to: 2.9.1
Stable tag: 1.0

== Description ==

A very useful and simple plug-in that allows you to hide a part of a post (links,image...) using standard HTML comment markers &lt;!-- and --&gt;. When Wordpress converts your post text into HTML, one thing it does it converts a double-hyphen to an en-dash (&#8211; which in Unicode is &#38;&#35;8211;). This plug-in simply changed it back if it happens to be followed by a greater than symbol. Since --&gt; is a HTML end-comment marker, this allows HTML comments to work again.

To hide a text,just place it between those two markers &lt;!-- and --&gt;. For example:

This is an example of a post with &lt;!-- Hey, what are you looking at? --&gt; hidden text.

== Installation ==

1. Upload HTMLComment.php to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Comment out text using &lt;!-- and --&gt; mark-up

== Frequently Asked Questions ==

If you have a question, let me know.

== Changelog ==

No changes yet.

== Upgrade Notice ==

Nothing so far.

== Screenshots ==

None.

== Version History ==

= Version 1.0 =
* First release
