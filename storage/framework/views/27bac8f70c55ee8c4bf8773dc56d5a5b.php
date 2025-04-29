<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Calendar</title>
    <!-- Bootstrap for responsive layout -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <?php echo $__env->yieldPushContent('styles'); ?>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\CA-project\calender-events\resources\views/layout.blade.php ENDPATH**/ ?>