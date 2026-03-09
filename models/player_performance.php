<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Post
{
    private ? int $id = null;

    public function __construct(private int $player, private int $game, private int $points, private int $assists)
    {

    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPlayer(): int
    {
        return $this->player;
    }

    /**
     * @param string $player
     */
    public function setPlayer(int $player): void
    {
        $this->player = $player;
    }

    /**
     * @return string
     */
    public function getGame(): int
    {
        return $this->game;
    }

    /**
     * @param string $game
     */
    public function setGame(int $game): void
    {
        $this->game = $game;
    }

    /**
     * @return string
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }
    
    /**
     * @return string
     */
    public function getAssists(): int
    {
        return $this->assists;
    }

    /**
     * @param string $assists
     */
    public function setAssists(int $assists): void
    {
        $this->$assists = $assists;
    }
}