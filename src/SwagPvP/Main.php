<?php

namespace SwagPvP/SwagCore;

use UltimateMC\Command\CommandSender;
use UltimateMC\Plugin\PluginBase;
use UltimateMC\Listener;

class Main extends PluginBase(){


public function onEnable(){
$sender->info("[SwagCore] SwagCore has loaded with UltimateMC!");
}

public function onLoad(){
$player->getPlayer();
$player->getName();
$sender->sendMessage(.$player ", has joined SwagPvP hosted by UltimateMC.");
}
return;
