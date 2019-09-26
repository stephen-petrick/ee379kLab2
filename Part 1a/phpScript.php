<?php

echo "<pre>Current directory: ";
echo getcwd(). "\n";
echo "</pre>";
echo "<pre>Directory contents: ";
print_r (scandir(getcwd())). "\n";
echo "<?pre>";
echo "Contents of root directory: ";
$output = shell_exec('ls /');
echo "<pre>$output</pre>". "\n";
echo "Number of process: ";
echo shell_exec("ps aus --no-headers | wc -l"). "\n";

?>


