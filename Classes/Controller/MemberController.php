<?php
namespace Gmbit\Staff\Controller;

use Gmbit\Staff\Domain\Model\Member;
use Gmbit\Staff\Domain\Repository\MemberRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Fluid\View\StandaloneView;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Http\HtmlResponse;
use Psr\Http\Message\ResponseInterface;

class MemberController extends ActionController
{
    protected MemberRepository $memberRepository;

    public function injectMemberRepository(MemberRepository $memberRepository): void
    {
        $this->memberRepository = $memberRepository;
    }

protected function renderView(string $templateName, array $variables = []): ResponseInterface
{
    $view = GeneralUtility::makeInstance(StandaloneView::class);

    // Postavljanje putanje do šablona
    $templatePath = GeneralUtility::getFileAbsFileName(
        'EXT:gmbit_staff/Resources/Private/Backend/Templates/Member/' . $templateName . '.html'
    );

    if (!is_file($templatePath)) {
        throw new \RuntimeException('Template not found: ' . $templatePath, 1715510001);
    }

    $view->setTemplatePathAndFilename($templatePath);
    $view->setLayoutRootPaths([
        GeneralUtility::getFileAbsFileName('EXT:gmbit_staff/Resources/Private/Backend/Layouts/')
    ]);
    $view->setPartialRootPaths([
        GeneralUtility::getFileAbsFileName('EXT:gmbit_staff/Resources/Private/Backend/Partials/')
    ]);

    // Postavljanje Request objekta
    $view->setRequest($this->request);

    foreach ($variables as $key => $value) {
        $view->assign($key, $value);
    }

    return new HtmlResponse($view->render());
}

    public function listAction(): ResponseInterface
    {
        $members = $this->memberRepository->findAll();
        var_dump($members);
        exit;
        return $this->renderView('List', ['members' => $members]);
    }

    public function newAction(): ResponseInterface
    {
        return $this->renderView('New', ['newMember' => new Member()]);
    }

    public function createAction(Member $newMember): ResponseInterface
    {
        $this->memberRepository->add($newMember);
        $this->addFlashMessage('Član je uspešno dodat.');
        return $this->redirect('list');
    }

    public function editAction(Member $member): ResponseInterface
    {
        return $this->renderView('Edit', ['member' => $member]);
    }

    public function updateAction(Member $member): ResponseInterface
    {
        $this->memberRepository->update($member);
        $this->addFlashMessage('Član je uspešno izmenjen.');
        return $this->redirect('list');
    }

    public function deleteAction(Member $member): ResponseInterface
    {
        $this->memberRepository->remove($member);
        $this->addFlashMessage('Član je uspešno obrisan.');
        return $this->redirect('list');
    }
}
