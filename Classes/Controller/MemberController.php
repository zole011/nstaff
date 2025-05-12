<?php
namespace Gmbit\Staff\Controller;

use Gmbit\Staff\Domain\Model\Member;
use Gmbit\Staff\Domain\Repository\MemberRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MemberController extends ActionController
{
    protected MemberRepository $memberRepository;

    public function injectMemberRepository(MemberRepository $memberRepository): void
    {
        $this->memberRepository = $memberRepository;
    }

    public function listAction(): void
    {
        $members = $this->memberRepository->findAll();
        $this->view->assign('members', $members);
    }

    public function showAction(Member $member): void
    {
        $this->view->assign('member', $member);
    }
}
