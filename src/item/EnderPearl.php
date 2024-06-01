<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author xpocketmc Team
 * @link http://www.xpocketmc.net/
 *
 *
 */

declare(strict_types=1);

namespace xpocketmc\item;

use xpocketmc\entity\Location;
use xpocketmc\entity\projectile\EnderPearl as EnderPearlEntity;
use xpocketmc\entity\projectile\Throwable;
use xpocketmc\player\Player;

class EnderPearl extends ProjectileItem{

	public function getMaxStackSize() : int{
		return 16;
	}

	protected function createEntity(Location $location, Player $thrower) : Throwable{
		return new EnderPearlEntity($location, $thrower);
	}

	public function getThrowForce() : float{
		return 1.5;
	}

	public function getCooldownTicks() : int{
		return 20;
	}
}