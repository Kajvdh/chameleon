<?php
/*
  Copyright (C) 2020  Kaj Van der Hallen; Edited by Stanley Kulik (DjSxX)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License along
  with this program; if not, write to the Free Software Foundation, Inc.,
  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

/**
 * Description of Radio
 *
 * @author Kaj
 * @edit Stanley Kulik (DjSxX)
 */
class Radio {
    private $_enabled;
    private $_name;
    private $_player;
    private $_type;

    private $_streamLink;
    private $_streamType;
	

    public function getEnabled() {
        return $this->_enabled;
    }
    public function getName() {
        return $this->_name;
    }
    public function getPlayer() {
        return $this->_player;
    }

    public function getStreamLink() {
        return $this->_streamLink;
    }
    public function getStreamType() {
        return $this->_streamType;
    }

    public function setEnabled($enabled) {
        $this->_enabled = $enabled;
    }
    public function setName($name) {
        $this->_name = $name;
    }
    public function setPlayer($player) {
        $this->_player = $player;
    }

    public function setStreamLink($streamLink) {
        $this->_streamLink = $streamLink;
    }
    public function setStreamType($streamType) {
        $this->_streamType = $streamType;
    }
}
