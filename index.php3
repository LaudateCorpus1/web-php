<?
require("shared.inc");
commonHeader("PHP3 Main Page");
?>

<h3>PHP Meaning Vote</h3>

Help the development team decide about the meaning of the PHP acronym
by <a href="http://il.php.net/vote_form.php3">placing your vote</a>.
<br>

<h3>New Site</h3>

The PHP site has been given a serious facelift recently.  The design is
courtesy of Colin Viebrock at <a
href="http://www.privateworld.com">Private World Communications</a>.
Please let us know of any problems with the site by sending a message
to <a href="mailto:webmaster@php.net?subject=<?
echo "New Look Feedback (browser:$HTTP_USER_AGENT, site:$SERVER_NAME)";
?>">webmaster@php.net</A>.<P>
<br>

<h3>What is PHP?</h3>

PHP 3.0 is a server-side HTML embedded scripting language and it is a
complete rewrite of the popular <a href="http://php.iquest.net">PHP/FI
2.0</a> language.  This rewrite is faster, more robust and uses less
memory than version 2.  All users of version 2 are encouraged to
upgrade.<P>

If you are new to PHP, a good place to start discovering the power of
this language is by clicking on the &quot;Source&quot; button in the
top right corner of all the pages on this site.  What you see is the
actual PHP files that are behind each of the pages you are looking at.

<?
commonFooter();
?>
