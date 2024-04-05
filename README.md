# Get db connection (phpmyadmin)

Open the config.inc.php file and replace "change-to-database-name" with the name of your database.<br>
Insert the following lines into your PHP file to get a connection to your database:

```
<?php
// Order is important
require("includes/config.inc.php");
require("includes/common.inc.php");
require("includes/db.inc.php");

$conn = dbConnect();
?>
```
