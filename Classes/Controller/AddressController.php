<?php

namespace Ps14\Address\Controller;

use Ps14\Foundation\Domain\Repository\AddressRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class AddressController extends ActionController {

	/**
	 * @param array $overwrite
	 * @return array
	 */
	protected function getDemand($overwrite = []) {
		$options = [];

		if(empty($this->settings['records']) === false) {
			$options['records'] = GeneralUtility::trimExplode(',', $this->settings['records'], true);
		}

		if(empty($this->settings['storagePid']) === false) {
			$options['storagePid'] = GeneralUtility::trimExplode(',', $this->settings['storagePid'], true);
		}

		return $options;
	}

	/**
	 * @return \Psr\Http\Message\ResponseInterface
	 */
	public function recordAction() {

		/** @var AddressRepository $addressRepository */
		$addressRepository = GeneralUtility::makeInstance(AddressRepository::class);
		$addressRepository->setQuerySettings(['respectStoragePage' => false]);

		$this->view->assign('address', $addressRepository->findByOption($this->getDemand()));
		$this->view->assign('record', $this->request->getAttribute('currentContentObject')->data);

		return $this->htmlResponse();
	}
}