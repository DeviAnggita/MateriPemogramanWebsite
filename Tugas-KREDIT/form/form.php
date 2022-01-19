<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h1 class="text-center">Simulasi Kredit Mobil</h1>

    <!-- Harga Mobil -->
    <div class="form-group">
        <label for="HargaMobil">Harga Mobil</label>
        <input name="HargaMobil" class="form-control" required type="number" placeholder="Minimal Rp. 100.000.000,00" 
        min="100000000">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $HargaMobilErr != "") : ?>
            <small class="text-danger">
                <?php echo $HargaMobilErr; ?>
            </small>
        <?php endif; ?>
    </div>

    <!-- Uang Muka -->
    <div class="form-group">
        <label for="UangMuka">Uang Muka (%)</label>
        <input class="form-control" name="UangMuka" required type="number" placeholder="Min 30% dan Max 100% " min="30" max="100"
        title="Isi dengan angka(0-9) tanpa karakter (%)"  >
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $UangMukaErr != "") : ?>
            <small class="text-danger">
                <?php echo $UangMukaErr; ?>
            </small>
        <?php endif; ?>
    </div>

    <!-- Lama Angsuran tahun-->
    <div class="form-group">
        <label for="Angsuran">Lama Angsuran (tahun) </label>
        <select class="custom-select" name="Angsuran" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $AngsuranErr != "") : ?>
            <small class="text-danger">
                <?php echo $AngsuranErr; ?>
            </small>
        <?php endif; ?>
    </div>

    <!-- Bunga %-->
    <div class="form-group">
        <label for="Bunga">Bunga (%) </label>
        <select class="custom-select" name="Bunga" required>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $BungaErr != "") : ?>
            <small class="text-danger">
                <?php echo $AngsuranErr; ?>
            </small>
        <?php endif; ?>
    </div>

    </br>
    <button class="btn btn-primary" type="reset" name="reset" href="index.php">Reset</button>
    <button class="btn btn-success" type="submit" name="submit" href="/admin/halaman.php">Submit</button>
</form>