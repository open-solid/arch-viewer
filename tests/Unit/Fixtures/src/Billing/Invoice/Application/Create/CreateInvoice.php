<?php

declare(strict_types=1);

namespace App\Billing\Invoice\Application\Create;

use App\Billing\Invoice\Domain\Model\InvoiceCustomerId;
use App\Billing\Invoice\Domain\Model\InvoiceId;
use OpenSolid\Core\Application\Command\Message\Command;

/**
 * Creates a new invoice for a customer.
 *
 * @extends Command<InvoiceId>
 */
final readonly class CreateInvoice extends Command
{
    /**
     * @param InvoiceCustomerId $customerId The customer who will own the invoice.
     * @param int               $amount     The invoice amount in cents.
     * @param string            $currency   The currency code (e.g., USD, EUR).
     */
    public function __construct(
        public InvoiceCustomerId $customerId,
        public int               $amount,
        public string            $currency,
    ) {
    }
}
