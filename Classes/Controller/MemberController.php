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

    //public function listAction(): ResponseInterface
    //{
     //   $members = $this->memberRepository->findAll();
    //    $this->view->assign('members', $members);
    //    return $this->htmlResponse();
    //}
    public function listAction(): \Psr\Http\Message\ResponseInterface
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
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('newMember', new \Gmbit\Staff\Domain\Model\Member());
        return $this->htmlResponse();
    }

    public function createAction(\Gmbit\Staff\Domain\Model\Member $newMember): \Psr\Http\Message\ResponseInterface
    {
        $this->memberRepository->add($newMember);
        $this->addFlashMessage('Član je uspešno dodat.');
        return $this->redirect('list');
    }

}