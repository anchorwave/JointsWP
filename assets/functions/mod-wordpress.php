<?php
// conflicts with sb_slidebars jquery plugin for mobile nav...
// I know it makes me sad too I like the admin bar
add_filter("show_admin_bar", "__return_false");