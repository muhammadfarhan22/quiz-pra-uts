<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama_siswa" id="nama_siswa" value="<?php echo set_value('nama_siswa'); ?>">
                    </td>
                </tr>
                <td colspan="3" style="color: red; font-size: 10; text-align: center"><?= form_error('nama_siswa'); ?></td>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis" value="<?php echo set_value('nis'); ?>">
                    </td>
                </tr>
                <td colspan="3" style="color: red; font-size: 10; text-align: center"><?= form_error('nis'); ?></td>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" value="<?php echo set_value('kelas'); ?>">
                    </td>
                </tr>
                <td colspan="3" style="color: red; font-size: 10; text-align: center"><?= form_error('kelas'); ?></td>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>">
                    </td>
                </tr>
                <td colspan=" 3" style="color: red; font-size: 10; text-align: center"><?= form_error('tanggal_lahir'); ?>
                </td>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>">
                    </td>
                </tr>
                <td colspan=" 3" style="color: red; font-size: 10; text-align: center"><?= form_error('tempat_lahir'); ?>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="alamat" id="alamat" value="<?php echo set_value('alamat'); ?>">
                        </td>
                    </tr>
                <td colspan=" 3" style="color: red; font-size: 10; text-align: center"><?= form_error('alamat'); ?>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" <?php echo  set_radio('jenis_kelamin', 'laki-laki'); ?>>
                            <label for="jenis_kelamin">Laki-Laki</label>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" <?php echo  set_radio('jenis_kelamin', 'perempuan'); ?>>
                            <label for="jenis_kelamin">Perempuan</label>
                        </td>
                    </tr>
                <td colspan="3" style="color: red; font-size: 10; text-align: center"><?= form_error('jenis_kelamin'); ?></td>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam" <?php echo  set_select('agama', 'Islam'); ?>>Islam</option>
                            <option value="Kristen" <?php echo  set_select('agama', 'kristen'); ?>>Kristen</option>
                            <option value="Katolik" <?php echo  set_select('agama', 'katolik'); ?>>Katolik</option>
                            <option value="Budha" <?php echo  set_select('agama', 'budha'); ?>>Budha</option>
                            <option value="Hindu" <?php echo  set_select('agama', 'hindu'); ?>>Hindu</option>
                            <option value="Protestan" <?php echo  set_select('agama', 'katolik'); ?>>Protestan</option>
                        </select>
                    </td>
                </tr>
                <td colspan="3" style="color: red; font-size: 10; text-align: center;"><?= form_error('agama'); ?></td>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>