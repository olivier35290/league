<?php


class Category
{
    private ? int $id = null;

    public function __construct(private string $nickname, private string $bio, private int $portrait, private int $team)
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
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }
    
    /**
     * @return string
     */
    public function getPortrait(): int
    {
        return $this->portrait;
    }

    /**
     * @param string $portrait
     */
    public function setPortrait(int $portrait): void
    {
        $this->portrait = $portrait;
    }
    
    /**
     * @return string
     */
    public function getTeam(): int
    {
        return $this->team;
    }

    /**
     * @param string $portrait
     */
    public function setTeam(int $team): void
    {
        $this->team = $team;
    }
}