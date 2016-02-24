<?php
namespace Invoice\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DOMPDFModule\View\Model\PdfModel;
class InvoiceController extends AbstractActionController
{
    /**
     * (non-PHPdoc)
     * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
     */
    public function indexAction()
    {
    	// Instantiate new PDF Model
         $pdf = new PdfModel();
         // set filename
         $pdf->setOption('filename', 'invoice.pdf');
         // Defaults to "8x11"
         $pdf->setOption('paperSize', 'a4');
         // paper orientation
         $pdf->setOption('paperOrientation', 'portrait');

         return $pdf;
	 }
        // return new ViewModel();
    }
