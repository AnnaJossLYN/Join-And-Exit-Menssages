<?php

namespace AnnaJossLYN;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as L;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PB implements L {

	public function onJoin(PlayerJoinEvent $event){
	   $player = $event->getPlayer();
	   $event->setJoinMessage("§a".$player->getName());

	}
	
	public function onExit(PlayerQuitEvent $event){
           $player = $event->getPlayer();
           $event->setQuitMessage("§c".$player->getName());
	}
	
}
