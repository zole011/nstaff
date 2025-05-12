<?php
namespace Gmbit\Staff\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class MemberRepository extends Repository
{
    public function findByName(string $name): array
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
                $query->like('firstName', '%' . $name . '%'),
                $query->like('lastName', '%' . $name . '%')
            )
        );
        return $query->execute()->toArray();
    }
}
