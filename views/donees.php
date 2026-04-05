<div class="section-title">All Donees</div>
<div class="cards">
    <?php foreach ($donees as $donee): ?>
    <div class="card match-card">
        <h3><?php echo htmlspecialchars($donee->title); ?></h3>
        <p><strong>Need:</strong> $<?php echo number_format($donee->need); ?></p>
        <p><?php echo htmlspecialchars($donee->description); ?></p>
        <button class="supportBtn">Support as Donor</button>
        <button class="connectBtn">Connect with Fundraiser</button>
    </div>
    <?php endforeach; ?>
</div>