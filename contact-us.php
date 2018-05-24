<?php
if(isset($_POST['submit'])) (
  $subject = 'Web Comment: ' .$_POST['Subject']
  $msg = 'Name: ' .$_POST['Name'] ."\n"
        .'Email: ' .$_POST['Email'] ."\n"
        .'Comment: ' .$_POST['Message'];
  mail('bitcoinsolutionshi@gmail.com', $subject, $msg);
  header('location: index.html#contact');
) else {
  header('location: index.html#contact');
  exit(0);
)
?>
