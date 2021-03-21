<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace UCRM\REST\Endpoints;

use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;
use MVQN\REST\Annotations\ExcludeIdAnnotation as ExcludeId;

/**
 * Class Option
 *
 * @Endpoint { "get": "/options" }
 * @ExcludeId
 *
 * @method string|null getAppLocale()
 * @method string|null getAppTimezone()
 * @method bool|null   getAutomaticBillingEnabled()
 * @method bool|null   getBackupIncludePdf()
 * @method bool|null   getBackupIncludeDownloads()
 * @method bool|null   getBackupIncludeMedia()
 * @method bool|null   getBackupIncludeWebroot()
 * @method bool|null   getBackupIncludeDocuments()
 * @method bool|null   getBackupIncludePlugins()
 * @method bool|null   getBackupIncludeTicketAttachments()
 * @method bool|null   getBackupIncludeJobAttachments()
 * @method string|null getBalanceStyle()
 * @method int|null    getBillingCycleType()
 * @method int|null    getClientIdType()
 * @method bool|null   getClientZoneReactivation()
 * @method bool|null   getClientZonePaymentDetails()
 * @method bool|null   getClientZonePaymentAmountChange()
 * @method bool|null   getClientZoneServicePlanShapingInformation()
 * @method string|null getDiscountInvoiceLabel()
 * @method string|null getEarlyTerminationFeeInvoiceLabel()
 * @method bool|null   getEarlyTerminationFeeTaxable()
 * @method int|null    getEarlyTerminationFeeTaxId()
 * @method bool|null   getFccAlwaysUseGps()
 * @method int|null    getFormatDateDefault()
 * @method int|null    getFormatDateAlternative()
 * @method string|null getFormatDecimalSeparator()
 * @method string|null getFormatThousandsSeparator()
 * @method string|null getFormatTime()
 * @method bool|null   getGenerateProformaInvoices()
 * @method string|null getGoogleOauthSecret()
 * @method int|null    getHeaderNotificationsLifetime()
 * @method int|null    getInvoicePeriodStartDay()
 * @method int|null    getInvoiceTimeHour()
 * @method int|null    getInvoicingPeriodType()
 * @method bool|null   getLateFeeActive()
 * @method int|null    getLateFeeDelayDays()
 * @method string|null getLateFeeInvoiceLabel()
 * @method float|null  getLateFeePrice()
 * @method int|null    getLateFeePriceType()
 * @method bool|null   getLateFeeTaxable()
 * @method int|null    getLateFeeTaxId()
 * @method int|null    getLogLifetimeEmail()
 * @method int|null    getLogLifetimeEntity()
 * @method int|null    getLogLifetimeWebhookEvent()
 * @method int|null    getMailerAntifloodLimitCount()
 * @method int|null    getMailerAntifloodSleepTime()
 * @method int|null    getMailerThrottlerLimitCount()
 * @method int|null    getMailerThrottlerLimitTime()
 * @method bool|null   getOnlinePaymentsEnabled()
 * @method string|null getPdfPageSizeExport()
 * @method string|null getPdfPageSizeInvoice()
 * @method string|null getPdfPageSizePaymentReceipt()
 * @method int|null    getPricingMode()
 * @method int|null    getPricingTaxCoefficientPrecision()
 * @method bool|null   getSubscriptionsEnabledCustom()
 * @method bool|null   getSubscriptionsEnabledLinked()
 * @method bool|null   getApproveAndSendInvoiceAutomatically()
 * @method bool|null   getSendInvoiceByPost()
 * @method string|null getServerHostname()
 * @method string|null getServerIp()
 * @method int|null    getServiceInvoicingDayAdjustment()
 * @method string|null getSetupFeeInvoiceLabel()
 * @method bool|null   getSetupFeeTaxable()
 * @method int|null    getSetupFeeTaxId()
 * @method string|null getSiteName()
 * @method bool|null   getStopInvoicing()
 * @method bool|null   getStopServiceDue()
 * @method int|null    getStopServiceDueDays()
 * @method string|null getSupportEmailAddress()
 * @method bool|null   getSuspendEnabled()
 * @method bool|null   getSuspensionEnablePostpone()
 * @method float|null  getSuspensionMinimumUnpaidAmount()
 * @method bool|null   getTicketingEnabled()
 * @method bool|null   getTicketingImapAutomaticReplyEnabled()
 * @method int|null    getTicketingImapAttachmentFilesizeImportLimit()
 * @method bool|null   getNotificationCreatedDraftsByEmail()
 * @method bool|null   getNotificationCreatedDraftsInHeader()
 * @method bool|null   getNotificationCreatedInvoicesByEmail()
 * @method bool|null   getNotificationCreatedInvoicesInHeader()
 * @method string|null getNotificationEmailAddress()
 * @method string|null getSandboxRedirectEmailAddress()
 * @method bool|null   getNotificationInvoiceNearDue()
 * @method int|null    getNotificationInvoiceNearDueDays()
 * @method bool|null   getNotificationInvoiceNew()
 * @method bool|null   getNotificationInvoiceOverdue()
 * @method bool|null   getNotificationServiceSuspended()
 * @method bool|null   getNotificationServiceSuspensionPostponed()
 * @method bool|null   getNotificationSubscriptionCancelled()
 * @method bool|null   getNotificationSubscriptionAmountChanged()
 * @method bool|null   getSendInvoiceWithZeroBalance()
 * @method bool|null   getNotificationTicketClientCreatedByEmail()
 * @method bool|null   getNotificationTicketClientCreatedInHeader()
 * @method bool|null   getNotificationTicketCommentClientCreatedByEmail()
 * @method bool|null   getNotificationTicketCommentClientCreatedInHeader()
 * @method bool|null   getNotificationTicketCommentUserCreatedByEmail()
 * @method bool|null   getNotificationTicketUserCreatedByEmail()
 * @method bool|null   getNotificationTicketUserChangedStatus()
 * @method bool|null   getSendPaymentReceipts()
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @copyright Copyright (c) 2020 - Spaeth Technologies, Inc.
 * @final
 */
final class Option extends EndpointObject
{
    public const BALANCE_STYLE_EU   = "EU";
    public const BALANCE_STYLE_US   = "US";

    public const BILLING_CYCLE_TYPE_REAL_DAYS   = 0;
    public const BILLING_CYCLE_TYPE_30_DAYS     = 1;

    public const CLIENT_ID_TYPE_DEFAULT         = 1;
    public const CLIENT_ID_TYPE_CUSTOM          = 2;

    //public const FORMAT_DATE_DEFAULT_D_MMM_YYYY = 1;

    public const INVOICING_PERIOD_TYPE_BACKWARD = 1;
    public const INVOICING_PERIOD_TYPE_FORWARD  = 2;

    public const LATE_FEE_PRICE_TYPE_CURRENCY   = 1;
    public const LATE_FEE_PRICE_TYPE_PERCENTAGE = 2;

    public const PRICING_MODE_TAX_EXCLUSIVE     = 1;
    public const PRICING_MODE_TAX_INCLUSIVE     = 2;

    /**
     * Language used for Invoicing, Client Zone and as a default language for Admin Zone.
     * @example `en_US`
     * @var string
     */
    protected $appLocale;

    /**
     * System timezone.
     * @example `Europe/Amsterdam`
     * @var string
     */
    protected $appTimezone;

    /**
     * When disabled, no recurring invoices will be automatically generated. After you enable this again, the recurring
     * invoices generation will resume where it ended.
     * @var bool
     */
    protected $automaticBillingEnabled;

    /**
     * Include generated PDF files (i.e. invoices, quotes, etc.) in backup.
     * @var bool
     */
    protected $backupIncludePdf;

    /**
     * Include downloads (i.e. generated billing report) in backup.
     * @var bool
     */
    protected $backupIncludeDownloads;

    /**
     * Include media (i.e. organization logo and stamp) in backup.
     * @var bool
     */
    protected $backupIncludeMedia;

    /**
     * Include custom webroot files in backup.
     * @var bool
     */
    protected $backupIncludeWebroot;

    /**
     * Include client documents in backup.
     * @var bool
     */
    protected $backupIncludeDocuments;

    /**
     * Include plugins in backup.
     * @var bool
     */
    protected $backupIncludePlugins;

    /**
     * Include ticket attachments in backup.
     * @var bool
     */
    protected $backupIncludeTicketAttachments;

    /**
     * Include job attachments in backup.
     * @var bool
     */
    protected $backupIncludeJobAttachments;

    /**
     * Positive or negative sign for client's balance.
     * @example `"EU" = "+" for client's available funds, "-" for client's debit`
     * @example `"US" = "-" for client's available funds, "+" for client's debit`
     * @var string
     */
    protected $balanceStyle;

    /**
     * Determines whether prorated periods should always use 30-day months or the real day count of the current month,
     * to calculate quantity.
     * @example `0 = Real days count`
     * @example `1 = 30 days in month`
     * @var int
     */
    protected $billingCycleType;

    /**
     * Specifies which client ID will be displayed throughout UCRM. Administrators can see both IDs, but only the
     * selected ID will be displayed in Client Zone. When "Custom" ID is selected, but not filled for a client, there
     * will be no ID displayed in Client Zone.
     * @example `1 = Default`
     * @example `2 = Custom`
     * @var int
     */
    protected $clientIdType;

    /**
     * Enable clients to reactivate their ended service.
     * @var bool
     */
    protected $clientZoneReactivation;

    /**
     * If enabled, client will be able to see more detailed payment information.
     * @var bool
     */
    protected $clientZonePaymentDetails;

    /**
     * If enabled, client will be able to change amount of online payment.
     * @var bool
     */
    protected $clientZonePaymentAmountChange;

    /**
     * If enabled, client will be able to see service download and upload speed.
     * @var bool
     */
    protected $clientZoneServicePlanShapingInformation;

    /**
     * Default discount label. Can be overridden in any invoice.
     * @var string
     */
    protected $discountInvoiceLabel;

    /**
     * Early termination fee invoice label.
     * @var string
     */
    protected $earlyTerminationFeeInvoiceLabel;

    /**
     * Early termination fee taxable. If enabled, taxes related to client will be applied.
     * @var bool
     */
    protected $earlyTerminationFeeTaxable;

    /**
     * If this tax is set, it will be always used for invoicing regardless of the taxes associated with the client.
     * @var int
     */
    protected $earlyTerminationFeeTaxId;

    /**
     * Use GPS instead of address.
     * @var bool
     */
    protected $fccAlwaysUseGps;

    /**
     * Default date format.
     * @example `01 = "D MMM YYYY"`
     * @example `02 = "Do MMM YYYY"`
     * @example `03 = "DD MMM YYYY"`
     * @example `04 = "MMM D, YYYY"`
     * @example `05 = "MMM Do, YYYY"`
     * @example `06 = "MMM DD, YYYY"`
     * @example `07 = "YYYY-MM-DD"`
     * @example `08 = "DD-MM-YYYY"`
     * @example `09 = "D.M.YYYY"`
     * @example `10 = "DD.MM.YYYY"`
     * @example `11 = "D. M. YYYY"`
     * @example `12 = "DD. MM. YYYY"`
     * @example `13 = "D/MM/YYYY"`
     * @example `14 = "DD/MM/YYYY"`
     * @example `15 = "M/D/YYYY"`
     * @example `16 = "MM/DD/YYYY"`
     * @var int
     */
    protected $formatDateDefault;

    /**
     * Alternative date format is used in communication with client (i.e. Invoices in PDF, Email notifications, etc.).
     * @example `01 = "D MMM YYYY"`
     * @example `02 = "Do MMM YYYY"`
     * @example `03 = "DD MMM YYYY"`
     * @example `04 = "MMM D, YYYY"`
     * @example `05 = "MMM Do, YYYY"`
     * @example `06 = "MMM DD, YYYY"`
     * @example `07 = "YYYY-MM-DD"`
     * @example `08 = "DD-MM-YYYY"`
     * @example `09 = "D.M.YYYY"`
     * @example `10 = "DD.MM.YYYY"`
     * @example `11 = "D. M. YYYY"`
     * @example `12 = "DD. MM. YYYY"`
     * @example `13 = "D/MM/YYYY"`
     * @example `14 = "DD/MM/YYYY"`
     * @example `15 = "M/D/YYYY"`
     * @example `16 = "MM/DD/YYYY"`
     * @var int
     */
    protected $formatDateAlternative;

    /**
     * Decimal separator symbol.
     * @var string
     */
    protected $formatDecimalSeparator;

    /**
     * Thousands separator symbol.
     * @var string
     */
    protected $formatThousandsSeparator;

    /**
     * Time format.
     * @example `01 = "h:mm a"`
     * @example `02 = "H:mm"`
     * @var int
     */
    protected $formatTime;

    /**
     * If enabled, proforma invoice will be generated instead of regular invoice.
     * @var bool
     */
    protected $generateProformaInvoices;

    /**
     * Google OAuth secret (e.g. for Google Calendar sync). Only present in the response if user has view permissions.
     * @var string
     */
    protected $googleOauthSecret;

    /**
     * Lifetime of notifications logs.
     * @var int
     */
    protected $headerNotificationsLifetime;

    /**
     * Day in month when the recurring invoicing period starts.
     * @var int
     */
    protected $invoicePeriodStartDay;

    /**
     * At this hour (in the 24-hour notation) recurring invoices will be generated.
     * @var int
     */
    protected $invoiceTimeHour;

    /**
     * Billing period type.
     * @example `01 = "Backward: recurring invoices are created at the end of the billing period"`
     * @example `02 = "Forward: recurring invoices are created at the beginning of the billing period (clients pay for
     * the service in advance)"`
     * @var int
     */
    protected $invoicingPeriodType;

    /**
     * If enabled, late fee will be created when an invoice is overdue.
     * @var bool
     */
    protected $lateFeeActive;

    /**
     * Number of days for which the late fee creation is deferred. For example, if 3 days are set and invoice due date
     * is 17th March the late fee will be created on 20th March.
     * @var int
     */
    protected $lateFeeDelayDays;

    /**
     * Late fee invoice label.
     * @var string
     */
    protected $lateFeeInvoiceLabel;

    /**
     * Late fee price.
     * @var float
     */
    protected $lateFeePrice;

    /**
     * Late fee price type.
     * @example `01 = "Currency"`
     * @example `02 = "Percentage"`
     * @var int
     */
    protected $lateFeePriceType;

    /**
     * If enabled, taxes related to client will be applied.
     * @var bool
     */
    protected $lateFeeTaxable;

    /**
     * If this tax is set, it will be always used for invoicing regardless of the taxes associated with the client.
     * @var int
     */
    protected $lateFeeTaxId;

    /**
     * Lifetime of email logs.
     * @var int
     */
    protected $logLifetimeEmail;

    /**
     * Lifetime of system logs.
     * @var int
     */
    protected $logLifetimeEntity;

    /**
     * Lifetime of webhook request logs.
     * @var int
     */
    protected $logLifetimeWebhookEvent;

    /**
     * Mailer Antiflood count limit. Number of messages to Antiflood sleep time.
     * @var int
     */
    protected $mailerAntifloodLimitCount;

    /**
     * Mailer Antiflood sleep time.
     * @var int
     */
    protected $mailerAntifloodSleepTime;

    /**
     * Mailer Throttler count limit. Number of messages sent within the throttler time limit.
     * @var int
     */
    protected $mailerThrottlerLimitCount;

    /**
     * Mailer Throttler time limit.
     * @var int
     */
    protected $mailerThrottlerLimitTime;

    /**
     * Online payment processing. When disabled, processing of all online payments will be stopped, all online payment
     * related pages will display a maintenance notice and all webhook events sent from payment processors will be
     * rejected.
     * @var bool
     */
    protected $onlinePaymentsEnabled;

    /**
     * Export page size.
     * @example `"letter"`
     * @var string
     */
    protected $pdfPageSizeExport;

    /**
     * Invoice page size.
     * @example `"letter"`
     * @var string
     */
    protected $pdfPageSizeInvoice;

    /**
     * Payment receipt page size.
     * @example `"letter"`
     * @var string
     */
    protected $pdfPageSizePaymentReceipt;

    /**
     * Pricing mode. Whether all item prices stored in UCRM are considered to be with or without tax. Has no effect on
     * existing invoices.
     * @example `01 = "Tax exclusive pricing"`
     * @example `02 = "Tax inclusive pricing"`
     * @var int
     */
    protected $pricingMode;

    /**
     * Decimal places for tax coefficient. Used to calculate the taxed amount and consequently, also the net price from
     * the given gross price.
     * @var int
     */
    protected $pricingTaxCoefficientPrecision;

    /**
     * Custom subscriptions allow setting custom amount, payment frequency and start date when creating it.
     * @var bool
     */
    protected $subscriptionsEnabledCustom;

    /**
     * Linked subscriptions is linked to client's service. Start date can be changed when creating it, but amount and
     * frequency are fixed to be the same as the service.
     * @var bool
     */
    protected $subscriptionsEnabledLinked;

    /**
     * If enabled, invoice drafts are automatically approved and sent by email right after generating.
     * @var bool
     */
    protected $approveAndSendInvoiceAutomatically;

    /**
     * If enabled, the approved invoices are marked to be sent by post. You can then batch print only these.
     * @var bool
     */
    protected $sendInvoiceByPost;

    /**
     * Server hostname or IP.
     * @var string
     */
    protected $serverHostname;

    /**
     * Server IP.
     * @var string
     */
    protected $serverIp;

    /**
     * Create invoice X days in advance. Create the recurring invoices earlier before the default create date.
     * @var int
     */
    protected $serviceInvoicingDayAdjustment;

    /**
     * Fee invoice label.
     * @var string
     */
    protected $setupFeeInvoiceLabel;

    /**
     * If enabled, taxes related to client will be applied.
     * @var bool
     */
    protected $setupFeeTaxable;

    /**
     * If this tax is set, it will be always used for invoicing regardless of the taxes associated with the client.
     * @var int
     */
    protected $setupFeeTaxId;

    /**
     * Site name.
     * @var string
     */
    protected $siteName;

    /**
     * If enabled, backward invoicing will be suppressed for periods which have been suspended, i.e. the suspension
     * lasted for the whole billing period.
     * @var bool
     */
    protected $stopInvoicing;

    /**
     * Suspend services if payment overdue.
     * @var bool
     */
    protected $stopServiceDue;

    /**
     * Suspension delay. "0" to suspend the service the day after the invoice due date.
     * @var int
     */
    protected $stopServiceDueDays;

    /**
     * Recipient for Client zone's contact form and the reply-to address for all emails sent to clients. Organization
     * email is used as a fallback.
     * @var string
     */
    protected $supportEmailAddress;

    /**
     * Suspension feature automatically stops internet services of clients with overdue invoices. You can disable this
     * feature here. Note that all suspended services will be activated by doing so.
     * @var bool
     */
    protected $suspendEnabled;

    /**
     * Enable clients to postpone their suspension by 24 hours. This also enables clients to pay online directly from
     * the suspension page without entering the Client Zone.
     * @var bool
     */
    protected $suspensionEnablePostpone;

    /**
     * Minimum unpaid amount of an overdue invoice to activate suspension. For example, if set to 5 the service would
     * only be suspended, if unpaid amount on the invoice is greater than or equal to 5.
     * @var float
     */
    protected $suspensionMinimumUnpaidAmount;

    /**
     * Enables tickets in Client Zone. A new ticket will be created when client use the contact form.
     * @var bool
     */
    protected $ticketingEnabled;

    /**
     * Enable automatic reply. When enabled, new tickets created by IMAP integration will receive an automatic reply.
     * @var bool
     */
    protected $ticketingImapAutomaticReplyEnabled;

    /**
     * Attachments exceeding the maximum allowed file size will not be imported into UCRM. You can view these
     * attachments on demand.
     * @var int
     */
    protected $ticketingImapAttachmentFilesizeImportLimit;

    /**
     * If enabled, system email notification is sent when invoice drafts are generated.
     * @var bool
     */
    protected $notificationCreatedDraftsByEmail;

    /**
     * If enabled, notification in header is created when invoice drafts are generated.
     * @var bool
     */
    protected $notificationCreatedDraftsInHeader;

    /**
     * If enabled, system email notification is sent when invoices are generated and automatically approved.
     * @var bool
     */
    protected $notificationCreatedInvoicesByEmail;

    /**
     * If enabled, notification in header is created when invoices are generated and automatically approved.
     * @var bool
     */
    protected $notificationCreatedInvoicesInHeader;

    /**
     * System notification address. All UCRM system notifications are sent to this address. If system notification
     * address is not configured, no system notification emails will be sent. Only present in the response if user has
     * view permissions.
     * @var string
     */
    protected $notificationEmailAddress;

    /**
     * Sandbox redirect address. All CRM outgoing emails will be sent to this address instead of their original address.
     * Only present in the response if user has view permissions.
     * @var string
     */
    protected $sandboxRedirectEmailAddress;

    /**
     * Send notifications for invoices near due date. If enabled, email notification is sent to client when invoice is
     * near due date.
     * @var bool
     */
    protected $notificationInvoiceNearDue;

    /**
     * How many days before the due date send the notification.
     * @var int
     */
    protected $notificationInvoiceNearDueDays;

    /**
     * If enabled, email notification is sent to client when new invoice is generated.
     * @var bool
     */
    protected $notificationInvoiceNew;

    /**
     * If enabled, email notification is sent to client when invoice is overdue.
     * @var bool
     */
    protected $notificationInvoiceOverdue;

    /**
     * If enabled, email notification is sent to client whose service was automatically suspended because of an overdue
     * invoice.
     * @var bool
     */
    protected $notificationServiceSuspended;

    /**
     * Service suspension postponed. If enabled, email notification is sent to client whose suspension has been manually
     * postponed from the "walled garden" page.
     * @var bool
     */
    protected $notificationServiceSuspensionPostponed;

    /**
     * If enabled, email notification is sent to client when subscription is cancelled.
     * @var bool
     */
    protected $notificationSubscriptionCancelled;

    /**
     * If enabled, email notification is sent to client when subscription amount is changed.
     * @var bool
     */
    protected $notificationSubscriptionAmountChanged;

    /**
     * If disabled, only invoices with balance higher than 0 will be sent.
     * @var bool
     */
    protected $sendInvoiceWithZeroBalance;

    /**
     * If enabled, system email notification is sent when client submits ticket.
     * @var bool
     */
    protected $notificationTicketClientCreatedByEmail;

    /**
     * If enabled, notification in header is created when client submits ticket.
     * @var bool
     */
    protected $notificationTicketClientCreatedInHeader;

    /**
     * If enabled, system email notification is sent when client comments ticket.
     * @var bool
     */
    protected $notificationTicketCommentClientCreatedByEmail;

    /**
     * If enabled, notification in header is created when client comments ticket.
     * @var bool
     */
    protected $notificationTicketCommentClientCreatedInHeader;

    /**
     * If enabled, email notification is sent to client when ticket is commented.
     * @var bool
     */
    protected $notificationTicketCommentUserCreatedByEmail;

    /**
     * If enabled, email notification is sent to client when ticket is created by admin.
     * @var bool
     */
    protected $notificationTicketUserCreatedByEmail;

    /**
     * If enabled, email notification is sent to assigned client when ticket changes status.
     * @var bool
     */
    protected $notificationTicketUserChangedStatus;

    /**
     * Send payment receipts automatically. If enabled, payment receipt emails will be sent automatically after
     * receiving online payments. It is also used as the default while creating a payment manually.
     * @var bool
     */
    protected $sendPaymentReceipts;

}
