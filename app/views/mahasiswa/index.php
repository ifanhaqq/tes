<h2>Mahasiswa</h2>

<a href="<?php echo URL; ?>/mahasiswa/input" class="btn">Input Mahasiswa</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>NIM</th>
            <th>PRODI</th>
            <th>EDIT</th>
            <th>HAPUS</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['nim']; ?></td>
                  <td><?php echo $row['prodi']; ?></td>
                  <td><a href="<?php echo URL; ?>/mahasiswa/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mahasiswa/delete/<?php echo $row['id']; ?>" class="btn" style="background-color: red;">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>