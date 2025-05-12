<?php
namespace Gmbit\Staff\Controller;

use Gmbit\Staff\Domain\Model\Member;
use Gmbit\Staff\Domain\Repository\MemberRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class MemberController extends ActionController
{
    protected MemberRepository $memberRepository;

    public function injectMemberRepository(MemberRepository $memberRepository): void
    {
        $this->memberRepository = $memberRepository;
    }

    public function listAction(): ResponseInterface
    {
        $members = $this->memberRepository->findAll();
        $this->view->assign('members', $members);
        return $this->htmlResponse();
    }

    public function showAction(Member $member): ResponseInterface
    {
        $this->view->assign('member', $member);
        return $this->htmlResponse();
    }
}