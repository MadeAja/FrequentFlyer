
<?php

declare(strict_types=1);

namespace BaliGamerz899\Task\TaskFal;

use BaliGamerz899\Main;
use pocketmine\item\Item;
use pocketmine\scheduler\Task;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

class FalseTask extends Task{
    
    public function onRun(int $tick) : void{
        foreach(Main::getInstance()->getServer()->getOnlinePlayers() as $players){
            $inv = $players->getInventory();
            $item = $inv->getItemInHand();
            if ($item->getCustomName() == "§aFrequent§eFlyer\nFlyDenganElytra\n§oTerbangBebas\n§oPluginByBaliGamerz\n§oNomer:8373837" && $item->getEnchantment(503)){
            switch($item->getId()){
                case 444:
                    if($item->getId() === Item::ELYTRA){
                    	$players->setAllowFlight(false);
                    }else{
                 $players->setAllowFlight(false);
                 return;
                 }
                 }
           }
   }
 }
 }
