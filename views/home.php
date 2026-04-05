<div class="hero">
    <h2>Every contribution tells a story. Every need deserves a response.</h2>
    <p>Connect with fundraisers, uplift donees, and be part of a community that turns compassion into action.</p>
	<p>Our smart matching connects your willingness to give with those who need it most—making every donation count.</p>
	<p>Explore fundraisers, support donees, and experience a platform built to create real-world impact.</p>
</div>

<div class="section-title">Featured Fundraisers</div>
<div class="cards">
    <?php foreach ($featuredFundraisers as $fundraiser): ?>
    <div class="card">
        <h3><?php echo htmlspecialchars($fundraiser->title); ?></h3>
        <p><strong>Goal:</strong> $<?php echo number_format($fundraiser->goal); ?> | <strong>Raised:</strong> $<?php echo number_format($fundraiser->raised); ?></p>
        <p><?php echo htmlspecialchars($fundraiser->description); ?></p>
        <button class="donateBtn">Donate Now</button>
    </div>
    <?php endforeach; ?>
</div>

<!-- Donees Section -->
<div class="section-title">Donees Seeking Support</div>
<div class="cards">
    <?php foreach ($featuredDonees as $donee): ?>
    <div class="card match-card">
        <h3><?php echo htmlspecialchars($donee->title); ?></h3>
        <p><strong>Need:</strong> $<?php echo number_format($donee->need); ?></p>
        <p><?php echo htmlspecialchars($donee->description); ?></p>
        <div class="button-group">
            <button class="supportBtn">Support as Donor</button>
            <button class="connectBtn">Connect with Fundraiser</button>
        </div>
    </div>
    <?php endforeach; ?>
</div>