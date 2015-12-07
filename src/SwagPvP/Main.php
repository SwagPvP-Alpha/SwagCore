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

public function onPlayerJoin(){
$player->prompt("[SwagAuth] Welcome to SwagPvP! \n It is required for you to authenticate before playing. \n Please register or login by typing your password directly into the chat.");
if($player->isRegistered);
$sender->info(.$player "has aithenticated by UUID");
$player->sendPopup("You have Logged In");
else($player->notRegistered);
$sender->info(.$player "is not registered");
$player->sendPopup("You are registered);
}


return;
