<?php

namespace AnnaJossLYN;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as L;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PB implements L {
	
	public function onEnable(){
		$config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
    $this->saveResource("config.yml");
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$event->setJoinMessage($this->getConfig()->get("JoinMessage"));
	}
	
	public function onExit(PlayerQuitEvent $event){
		$player = $event->getPlayer();
		$event->setQuitMessage($this->getConfig()->get("ExitMessage"));
	}
	
}
