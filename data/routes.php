
<?php
/*
 * Map of regular expressions which map to models the controller will construct
 */
$routes = array();
$format = 'html';
$routes['/^ForgotPassword'.'(\/)?'.$format.'$/']    = 'SelfServe\ForgotPassword';
$routes['/^ForgotUsername'.'(\/)?'.$format.'$/']    = 'SelfServe\ForgotUsername';
$routes['/^$/']                                     = 'UNL\UCBCN\Frontend\Day';

return $routes;
