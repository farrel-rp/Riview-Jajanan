<div class="container mt-4">

<h2>Review Jajanan</h2>

<a href="/review/create"
class="btn btn-primary mb-3">

Tambah Review

</a>

<table class="table table-striped table-hover">

<thead>

<tr>

<th>No</th>

<th>Nama Jajanan</th>

<th>Kategori</th>

<th>Rating</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php foreach($review as $r): ?>

<tr>

<td><?= $r['id']; ?></td>

<td><?= $r['nama_jajanan']; ?></td>

<td><?= $r['kategori']; ?></td>

<td><?= $r['rating']; ?></td>

<td>

<a href="/review/edit/<?= $r['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="/review/delete/<?= $r['id']; ?>"
class="btn btn-danger btn-sm">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>
