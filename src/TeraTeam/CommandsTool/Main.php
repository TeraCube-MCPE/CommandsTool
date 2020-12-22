<?php

declare(strict_types=1);
namespace TeraTeam\CommandsTool;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
       $this->getLogger()->info("CommandsTool : ON");
       $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onDisable()
    {
        $this->getLogger()->info("CommandsTool : OFF");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()){
            case "discord":
                $sender->sendMessage("§e[Discord] Lien vers le serveur discord : §6teracube.eu/discord");
                break;
        }
        switch ($command->getName()){
            case "web":
                $sender->sendMessage("§e[Web] Lien vers le site web : §6teracube.eu");
                break;

        }

        switch ($command->getName()){
            case "support":
                $sender->sendMessage("§e[Support] Lien vers le support du serveur : §6teracube.eu/Support");
                break;

        }
        switch ($command->getName()){
            case "reglement":
                $sender->sendMessage("§e[Reglement] Lien vers le règlement du serveur : §6teracube.eu/terms");
                break;

        }return true;
    }



}


