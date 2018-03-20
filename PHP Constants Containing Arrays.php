<?php
# define constant, serialize array
define ("country", serialize (array ("Việt Nam", "Mỹ")));

# use it
$db_country = unserialize (country);
