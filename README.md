# UM TablePress Integration
 Adds a Private Tab to the UM User Profile Page and displays the TablePress Shortcode <code>[table id=N /]</code> for this User.
 
## Installation
Linking between the UM User and the TablePress ID by adding an UM Forms Field with meta_key = <code>tablepress_id</code> to the UM Profile Page.

Set the <code>tablepress_id</code> UM Forms Field Privacy to “Only specific member roles” and select Administrator. Modify the User Profile from the Adminstrator role and update the <code>tablepress_id</code> field which now is hidden for all other UM Users.

Add the code snippet source.php to your child-theme’s functions.php file or add to the “Code Snippets” plugin

https://wordpress.org/plugins/code-snippets/
