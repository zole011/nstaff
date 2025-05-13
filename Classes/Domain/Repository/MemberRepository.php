<?php
namespace Gmbit\Staff\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class MemberRepository extends Repository
{
    public function initializeObject(): void
    {
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

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
