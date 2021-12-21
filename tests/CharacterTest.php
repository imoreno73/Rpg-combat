<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	
	//when comprobar vida=1000
	/** @test */
	public function test_charactherhealth1000whencreated()
	{
		// Test
		//given
		$character1=new character;
		//when character1health=1000;
		$character1->gethealth();
		//then
		$this->assertEquals(1000, $character1->health);

	}
	public function test_charactherlevel1whencreated()
	{
		// Test
		//given
		$character1=new character;
		//when character1health=1000;
		$character1->getlevel();
		//then
		$this->assertEquals(1, $character1->level);

	}
	public function test_charactheralivewhencreated()
	{
		// Test
		//given
		$character1=new character;
		//when character1alive
		$character1->getalive();
		//then
		$this->assertEquals(true, $character1->alive);

	}

	public function test_damage_characters()
	{
		//test_charactherdamage_character
		//given alive=true
		$character1=new character();
		$character2=new character();
		$resultExpected=200;

		//when charactertakesdamage
		$character1->deal_damage($character2,$character1->getdamage());
		//then damagesubstrated from health
		$this->assertEquals($resultExpected,$character2->gethealth());

	}
	public function test_health_characters()
	{
		//test_charactherhealth_character
		//given health>=1 & alive=true
		$character1=new character();
		$resultExpected=1000;
		
		//when characterhealdamage
		$character1->heal_damage($character1,$character1->healdamage());
		//then add heal from health
		$this->assertEquals($resultExpected,$character1->gethealth());

	}
	public function test_nodamage_characters()
	{
		//test_characternodamage_character
		//given alive=true
		$character1=new character();
		$resultExpected=1000;

		//when charactertakesowndamage
		$character1->nodamage_character($character1,$character1->nodamage());
		//then damagesubstrated from health and add
		$this->assertEquals($resultExpected,$character1->gethealth());

	}
	public function test_health_onlyme()
	{
		//test_characterhealth_owncharacter
		//given health>=1 & alive=true
		$character1=new character();
		$resultExpected=1000;
		
		//when characterhealowndamage
		$character1->heal_damage($character1,$character1->healowndamage());
		//then add heal from health
		$this->assertEquals($resultExpected,$character1->gethealth());

	}
	public function test_dealing_damage()
	{
		//test_character2 damage target
		//given health>=1 & alive=true
		$character1=new character();		
		$character2=new character();
		$character1=$this->level=5;
		$character2=$this->level=11;
		$resultExpected=1000;
		
		//when character2 takes damage
		$character2->damage_character2($character2,$character2->getdamage());
		//then calculate damage
		$this->assertEquals($resultExpected,$character2->gethealth());

	}
}	 
	




