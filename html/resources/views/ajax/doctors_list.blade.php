<div class="doctors_list">
    <ul>
        <?php foreach ($doctors as $doctor): ?>
            <li><?php echo $doctor->name; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php echo $doctors->render(); ?>
