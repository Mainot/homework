<div class="clinics_list">
    <ul>
        <?php foreach ($clinics as $clinic): ?>
            <li><?php echo $clinic->title; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php echo $clinics->render(); ?>
