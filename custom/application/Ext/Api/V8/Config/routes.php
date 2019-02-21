<?php
/**
 * Custom API routing
 */

// Fusion Things
$app->group('/fusion', function () use ($app) {

  // Allow us to create invoice in 1 request - need to do quite a few for syncing 
  // between Fusion and SuiteCRM, this makes it quicker and easier
  $app->get('/invoices', 'CustomApi\Controller\FusionInvoiceController:createInvoice');

});
