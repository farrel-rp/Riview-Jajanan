<table class="table table-bordered">

<thead>

<tr>

<th>No</th>

<th>Nama</th>

<th>Rating</th>

<th>Difficulty</th>

<th>Cuisine</th>

</tr>

</thead>

<tbody>

<?php foreach($recipes as $row): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $row['name'] ?></td>

<td><?= $row['rating'] ?></td>

<td><?= $row['difficulty'] ?></td>

<td><?= $row['cuisine'] ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>
