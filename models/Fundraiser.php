<?php
class Fundraiser 
{
    public $id;
    public $title;
    public $goal;
    public $raised;
    public $description;

    public function __construct($id, $title, $goal, $raised, $description) 
	{
        $this->id = $id;
        $this->title = $title;
        $this->goal = $goal;
        $this->raised = $raised;
        $this->description = $description;
    }

    public static function getAll() 
	{
        return array
		(
            new Fundraiser(1, 'Medical Help for Sarah', 10000, 3200, 'Sarah needs urgent surgery. Help her family cover costs.'),
            new Fundraiser(2, 'Education Fund for Bright Kids', 5000, 1200, 'Providing school supplies and scholarships for underprivileged children.'),
            new Fundraiser(3, 'Disaster Relief - Flood Victims', 20000, 9500, 'Help rebuild homes after severe flooding.')
        );
    }

    public static function getFeatured() 
	{
        $all = self::getAll();
        return array($all[0], $all[1]);
    }
}
?>