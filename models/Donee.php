<?php
class Donee 
{
    public $id;
    public $title;
    public $need;
    public $description;

    public function __construct($id, $title, $need, $description) 
	{
        $this->id = $id;
        $this->title = $title;
        $this->need = $need;
        $this->description = $description;
    }

    public static function getAll() 
	{
        return array
		(
            new Donee(1, 'Community Center Renovation', 15000, 'Roof repairs and accessibility upgrades for the local community center.'),
            new Donee(2, 'Local Animal Shelter', 8000, 'Food and medical supplies for rescued animals.'),
            new Donee(3, 'Scholarship for Low-Income Students', 12000, 'Tuition and books for deserving students.')
        );
    }

    public static function getFeatured() 
	{
        $all = self::getAll();
        return array($all[0], $all[1]);
    }
}
?>