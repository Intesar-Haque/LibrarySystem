<?php
require "header.php";
include_once 'includes/db-inc.php';
$book = $_POST['sl'];
$sql = "SELECT loc FROM booklist WHERE sl='$book';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['loc'];
?>
<iframe src="//docs.google.com/gview?url=http://library-system.great-site.net/books/<?php echo $bookname; ?>&embedded=true" style="width:600px; height:800px;" frameborder="0"></iframe>
</body>
</html>