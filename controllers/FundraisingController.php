<?php
require_once __DIR__ . '/../models/Fundraiser.php';
require_once __DIR__ . '/../models/Donee.php';

class FundraisingController 
{
    public function home() 
	{
        $featuredFundraisers = Fundraiser::getFeatured();
        $featuredDonees = Donee::getFeatured();
        
        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/home.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    public function listFundraisers() 
	{
        $fundraisers = Fundraiser::getAll();
        
        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/fundraisers.php';
        include __DIR__ . '/../views/layout/footer.php';
    }

    public function listDonees() 
	{
        $donees = Donee::getAll();
        
        include __DIR__ . '/../views/layout/header.php';
        include __DIR__ . '/../views/donees.php';
        include __DIR__ . '/../views/layout/footer.php';
    }
}
?>