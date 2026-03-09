<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $categories = [];

        foreach($result as $item)
        {
            $category = new Category($item["title"], $item["description"]);
            $category->setId($item["id"]);
            $categories[] = $category;
        }

        return $categories;
    }
}