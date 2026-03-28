<div style="font-family: Arial, sans-serif; max-width: 500px; margin: auto; padding: 20px;">
    <h2>Form Input User</h2>
    
    <form action="index.php" method="POST">
        <div style="margin-bottom: 10px;">
            <label>Nama Lengkap:</label><br>
            <input type="text" name="nama" required style="width: 100%; padding: 8px;">
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" required style="width: 100%; padding: 8px;">
        </div>
        
        <button type="submit" style="padding: 10px 15px; background: #4a90e2; color: white; border: none; cursor: pointer;">
            Kirim Data
        </button>
    </form>

    <hr style="margin: 30px 0;">

    <?php if ($dataTampil != null): ?>
        <div style="background: #e9f5ff; padding: 15px; border-left: 5px solid #4a90e2;">
            <h3>Data Berhasil Diinput:</h3>
            <p><strong>Nama:</strong> <?php echo htmlspecialchars($dataTampil['nama']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($dataTampil['email']); ?></p>
        </div>
    <?php endif; ?>
</div>