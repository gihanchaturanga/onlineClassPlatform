<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset($_GET['title'])){
    echo "<script>Swal.fire(
        '".$_GET['title']."',
        '".$_GET['msg']."',
        '".$_GET['type']."'
      )</script>";
}

?>