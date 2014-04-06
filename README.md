###############################################
font resizer
Pre 0.1 proof of concept
###############################################

Credits
-----------------------------------------------

Developer
-----------------------------------------------
Nicolaas [at] sunnysideup.co.nz

Requirements
-----------------------------------------------
SilverStripe 2.3.0 or greater.

Documentation
-----------------------------------------------
Adding this module allows the user to change
font-sizes on your website.



Installation Instructions
-----------------------------------------------
1. Find out how to add modules to SS and add module as per usual.

2. copy configurations from this module's _config.php file
into mysite/_config.php file and edit settings as required.
NB. the idea is not to edit the module at all, but instead customise
it from your mysite folder, so that you can upgrade the module without redoing the settings.

3. place the part of the website that you would like to be font-resized in the following div:
	...
	<div id="FontSizeWrapper">
		fonts are resized!!!
	</div>
	...

4. for the place in your template where you want to have the resize buttons, add

<% include FontResizer %>
