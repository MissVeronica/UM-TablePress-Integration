# UM TablePress Integration
 Adds a Private Tab to the UM User Profile Page and displays the TablePress Shortcode <code>[table id=N /]</code> for this User.
 
## Installation
Linking between the UM User and the TablePress ID you create by adding an UM Forms Field with meta_key = <code>tablepress_id</code> to the UM Profile Page.

The <code>tablepress_id</code> UM Field you set the UM Forms Field Privacy to “Only specific member roles” and select Administrator. You modify the User Profile being the Adminstrator and update this <code>tablepress_id</code> field which now is hidden for all other UM Users.

Add the code snippet source.php to your child-theme’s functions.php file or add to the “Code Snippets” plugin

https://wordpress.org/plugins/code-snippets/
