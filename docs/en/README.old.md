font resizer
================================================================================

Credits
-----------------------------------------------

Developer
-----------------------------------------------
Nicolaas [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
see composer.json

Documentation
-----------------------------------------------
Adding this module allows the user to change
font-sizes on your website.



Installation Instructions
-----------------------------------------------
1. Find out how to add modules to SS and add module as per usual.

2. Review configs and add entries to mysite/_config/config.yml
(or similar) as necessary.
In the _config/ folder of this module
you can usually find some examples of config options (if any).

3. place the part of the website that you would like to be font-resized in the following div:
	...
	<div id="FontSizeWrapper">
		fonts are resized!!!
	</div>
	...

4. for the place in your template where you want to have the resize buttons, add

<% include FontResizer %>
