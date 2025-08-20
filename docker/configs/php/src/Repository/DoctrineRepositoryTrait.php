<?php

declare(strict_types=1);

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;

trait DoctrineRepositoryTrait
{
    abstract protected function getEntityManager(): EntityManagerInterface;

    public function save(): static
    {
        $this->getEntityManager()->flush();

        return $this;
    }

    public function add(object $entity, bool $save = false): static
    {
        $this->getEntityManager()->persist($entity);
        if ($save) {
            $this->save();
        }

        return $this;
    }

    public function remove(object $entity, bool $save = false): static
    {
        $this->getEntityManager()->remove($entity);
        if ($save) {
            $this->save();
        }

        return $this;
    }

    public function clearCache(): static
    {
        $this->getEntityManager()->clear();

        return $this;
    }

}
