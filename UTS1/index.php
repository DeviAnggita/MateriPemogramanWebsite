<head>
    <?php $pagename = "Simulasi Kredit Mobil"; ?>
    <?php require 'tampilan/header.php'; ?>
</head>

<div class="container">
        <div class="img">
            <img src="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true) ? "img/mobil.png" : "img/mobil1.svg"; ?>" alt="Home Image" class="img-fluid">
        </div>


<div class="div">
    <?php require 'Form/form-validation.php'; ?>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true): ?>
        <?php else: ?>
        <div class="div" style="height: 500px;">
            <?php require 'form/form.php'; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require 'tampilan/footer.php'; ?>