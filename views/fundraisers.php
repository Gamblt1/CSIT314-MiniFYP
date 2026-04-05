<div class="section-title">All Fundraisers</div>
<div class="cards">
    <?php foreach ($fundraisers as $fundraiser): ?>
    <div class="card">
        <h3><?php echo htmlspecialchars($fundraiser->title); ?></h3>
        <p><strong>Goal:</strong> $<?php echo number_format($fundraiser->goal); ?> | <strong>Raised:</strong> $<?php echo number_format($fundraiser->raised); ?></p>
        <p><?php echo htmlspecialchars($fundraiser->description); ?></p>
        <button class="donateBtn">Donate Now</button>
    </div>
    <?php endforeach; ?>
</div>