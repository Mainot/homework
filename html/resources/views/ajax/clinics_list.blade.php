<div class="clinics_list">
    <ul>
        <?php foreach ($clinics as $clinic): ?>
            <li><a href="{{ route('clinics', ['clinic_id' => $clinic->id]) }}"><?php echo $clinic->title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php echo $clinics->render(); ?>
