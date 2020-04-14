<?php

namespace BaliGamerz899;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use BaliGamerz899\Task\EffectTask;
use BaliGamerz899\Task\TaskFal\FalseTask;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\entity\Effect;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;

use DaPigGuy\PiggyCustomEnchants\enchants\CustomEnchantIds;
use DaPigGuy\PiggyCustomEnchants\PiggyCustomEnchants;
use pocketmine\item\Item;
use pocketmine\lang\BaseLang;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

use onebone\economyapi\EconomyAPI;

use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener {
    
    /** @var Main $instance */
    private static $instance;
	
	public $plugin;

	public function onEnable() : void{
	    self::$instance = $this;
	    $this->getScheduler()->scheduleRepeatingTask(new EffectTask(), 20);
	    $this->getScheduler()->scheduleRepeatingTask(new FalseTask(), 20);
        $this->getLogger()->info(TextFormat::GREEN . "PrequentPlayerAktiffByBaliGamerz12\n◢███░░───██⊙█◣
    ◢███░░──█████◣
    ◢███░░─█████◣
      ◢███░██████◣
    ◢███████████◣
    ◢███████████◣
  ◥▓█倫BaliGamerz倫█▓◤
   ◥▓█倫BaliGamrrz倫█▓◤");
        $this->eco = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");	
	}
	
	public static function getInstance() : self{
	    return self::$instance;
	}
 
 
 public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        switch($cmd->getName()){                    
            case "ff":
                if($sender instanceof Player){
                    if($sender->hasPermission("ff.item")){
                        $ff = Item::get(444, 0, 1)->setCustomName("§aFrequent§eFlyer\nFlyDenganElytra\n§oTerbangBebas\n§oPluginByBaliGamerz\n§oNomer:8373837"); 
                        $ec = Enchantment::getEnchantment(503);
                        $ech = new EnchantmentInstance($ec);
                        $ff->addEnchantment($ech);
                        $sender->getInventory()->addItem($ff);
                        $sender->addTitle("§aKamu diberikan\nSayap untuk terbang");
                        return true;
                    }else{
                        $sender->sendMessage("§cMembutuh Kan Permissions!");
                        return true;
                    }

                }else{
                    $sender->sendMessage("§cGunakan Command Dalam Game!");
                    return true;
                }  
        }
      }
    }
    
