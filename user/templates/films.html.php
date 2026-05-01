<h2>Films List</h2>

<table style="width:100%; border-collapse:collapse; table-layout:fixed;">

<tr style="background:#f4f4f4;">
    <th style="padding:10px; width:80px; text-align:left;">Film</th>
    <th style="padding:10px; width:200px; text-align:left;">Name</th>
    <th style="padding:10px; text-align:left;">Description</th>
    <th style="padding:10px; width:80px; text-align:center;">Year</th>

</tr>

<?php foreach ($films as $film): ?>

<tr style="border-bottom:1px solid #ddd;">


    <td style="padding:10px;">
        <?php if (!empty($film['image'])): ?>
            <img src="../uploads/<?= htmlspecialchars($film['image']) ?>" style="width:60px; display:block;">
        <?php endif; ?>
    </td>


    <td style="padding:10px;">
        <?= htmlspecialchars($film['title']) ?>
    </td>
  <td style="padding:10px;">
        <?= htmlspecialchars($film['description']) ?>
    </td>


    <td style="padding:10px; text-align:center;">
        <?= htmlspecialchars($film['release_year']) ?>
    </td>
    <td style="padding:10px; text-align:center;">

    </td>

</tr>

<?php endforeach; ?>

</table>