<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    //cela crée un "slug nous permetant de l'utiliser
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        $parent = $this->creatCategories('informatique', null, $manager);
        $this->creatCategories('Ecran pc',$parent,$manager);
        $this->creatCategories('souris',$parent,$manager);
        $this->creatCategories('Clavier',$parent,$manager);
        $this->creatCategories('Unité central',$parent,$manager);
        $this->creatCategories('Cable HDMI',$parent,$manager);
        $manager->flush();
    }
    public function creatCategories(string $name , categories $parent=null, objectManager $manager){
        $category = new Categories();
        $category->setName($name);
        $category->setSlug($this->slugger->slug($category->getName()));
        $category->setParent($parent);
        $manager->persist($category);

        return $category;
    }
}
