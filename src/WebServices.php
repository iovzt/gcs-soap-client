<?php

class WebServices extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ClientsWSDS' => '\\ClientsWSDS',
      'CLIENTS' => '\\CLIENTS',
      'ERRORS' => '\\ERRORS',
      'META_INFO' => '\\META_INFO',
      'NotesWSDS' => '\\NotesWSDS',
      'NOTES' => '\\NOTES',
      'CheckImagesIndicatorWSDS' => '\\CheckImagesIndicatorWSDS',
      'CheckImagesIndicator' => '\\CheckImagesIndicator',
      'PhonePayResponseWSDS' => '\\PhonePayResponseWSDS',
      'RESPONSE' => '\\RESPONSE',
      'BAVClientWSDS' => '\\BAVClientWSDS',
      'BAVClient' => '\\BAVClient',
      'DocumentTypesWSDS' => '\\DocumentTypesWSDS',
      'DocumentTypes' => '\\DocumentTypes',
      'SettlementTransactionLinksWSDS' => '\\SettlementTransactionLinksWSDS',
      'SETTLEMENT_TRANSACTION_LINKS' => '\\SETTLEMENT_TRANSACTION_LINKS',
      'ChargesWSDS' => '\\ChargesWSDS',
      'CHARGES' => '\\CHARGES',
      'PolicyGroupsWSDS' => '\\PolicyGroupsWSDS',
      'POLICY_GROUPS' => '\\POLICY_GROUPS',
      'PayeesListWSDS' => '\\PayeesListWSDS',
      'PAYEES' => '\\PAYEES',
      'BankAccountStatusWSDS' => '\\BankAccountStatusWSDS',
      'BANKACCOUNTSTATUS' => '\\BANKACCOUNTSTATUS',
      'Clients2WSDS' => '\\Clients2WSDS',
      'PhonePayImageWSDS' => '\\PhonePayImageWSDS',
      'IMAGE_DATA' => '\\IMAGE_DATA',
      'PreValidationsWSDS' => '\\PreValidationsWSDS',
      'RESULTS' => '\\RESULTS',
      'DebitsWSDS' => '\\DebitsWSDS',
      'DEBITS' => '\\DEBITS',
      'PhonePayAckActiveExceptionsWSDS' => '\\PhonePayAckActiveExceptionsWSDS',
      'ACK_ACTIVE_EXCEPTIONS' => '\\ACK_ACTIVE_EXCEPTIONS',
      'ChargesDebitsLinkWSDS' => '\\ChargesDebitsLinkWSDS',
      'CHARGES_DEBITS_LINK' => '\\CHARGES_DEBITS_LINK',
      'TransfersWSDS' => '\\TransfersWSDS',
      'TRANSFERS' => '\\TRANSFERS',
      'TransactionsWSDS' => '\\TransactionsWSDS',
      'TRANSACTIONS' => '\\TRANSACTIONS',
      'SplitFeeInfoWSDS' => '\\SplitFeeInfoWSDS',
      'SPLIT_FEE_INFO' => '\\SPLIT_FEE_INFO',
      'PaymentInfoWSDS' => '\\PaymentInfoWSDS',
      'PAYMENT_CLASS' => '\\PAYMENT_CLASS',
      'PAYMENT_STATUS' => '\\PAYMENT_STATUS',
      'PAYMENT_TYPES' => '\\PAYMENT_TYPES',
      'PaymentsWSDS' => '\\PaymentsWSDS',
      'PAYMENTS' => '\\PAYMENTS',
      'ClientsFailedValidationWSDS' => '\\ClientsFailedValidationWSDS',
      'REQUESTED_DOCS' => '\\REQUESTED_DOCS',
      'PhonePayExceptionTypesWSDS' => '\\PhonePayExceptionTypesWSDS',
      'EXCEPTION_TYPES' => '\\EXCEPTION_TYPES',
      'PhonePayActiveExceptionsWSDS' => '\\PhonePayActiveExceptionsWSDS',
      'ACTIVE_EXCEPTIONS' => '\\ACTIVE_EXCEPTIONS',
      'PhonePayResolvedExceptionsWSDS' => '\\PhonePayResolvedExceptionsWSDS',
      'RESOLVED_EXCEPTIONS' => '\\RESOLVED_EXCEPTIONS',
      'TrackingInformationWSDS' => '\\TrackingInformationWSDS',
      'TRACKING_ACTIVITY' => '\\TRACKING_ACTIVITY',
      'TRACKING_INFO' => '\\TRACKING_INFO',
      'CustomPaymentsWSDS' => '\\CustomPaymentsWSDS',
      'DebitInfoWSDS' => '\\DebitInfoWSDS',
      'DEBIT_TYPES' => '\\DEBIT_TYPES',
      'CustomDebitsWSDS' => '\\CustomDebitsWSDS',
      'BankHolidaysWSDS' => '\\BankHolidaysWSDS',
      'HOLIDAYS' => '\\HOLIDAYS',
      'TransferReturnsWSDS' => '\\TransferReturnsWSDS',
      'TRANSFER_RETURNS' => '\\TRANSFER_RETURNS',
      'PhonePayResponseStatusWSDS' => '\\PhonePayResponseStatusWSDS',
      'RESPONSE_STATUS' => '\\RESPONSE_STATUS',
      'PhonePayResponseTypesWSDS' => '\\PhonePayResponseTypesWSDS',
      'RESPONSE_TYPES' => '\\RESPONSE_TYPES',
      'PaymentStatusWSDS' => '\\PaymentStatusWSDS',
      'SettlementWSDS' => '\\SettlementWSDS',
      'SETTLEMENTS' => '\\SETTLEMENTS',
      'ClientsListWSDS' => '\\ClientsListWSDS',
      'BanksWSDS' => '\\BanksWSDS',
      'BANKS' => '\\BANKS',
      'BankAccountTypesWSDS' => '\\BankAccountTypesWSDS',
      'BANK_ACCOUNT_TYPES' => '\\BANK_ACCOUNT_TYPES',
      'DepositsWSDS' => '\\DepositsWSDS',
      'DEPOSITS' => '\\DEPOSITS',
      'PhonePayAckResolvedExceptionsWSDS' => '\\PhonePayAckResolvedExceptionsWSDS',
      'ACK_RESOLVED_EXCEPTIONS' => '\\ACK_RESOLVED_EXCEPTIONS',
      'StatesWSDS' => '\\StatesWSDS',
      'STATES' => '\\STATES',
      'COUNTRIES' => '\\COUNTRIES',
      'TransactionStatusWSDS' => '\\TransactionStatusWSDS',
      'TRANSACTION_STATUS' => '\\TRANSACTION_STATUS',
      'ClientDocumentsWSDS' => '\\ClientDocumentsWSDS',
      'ClientDocuments' => '\\ClientDocuments',
      'AccountsWSDS' => '\\AccountsWSDS',
      'ACCOUNTS' => '\\ACCOUNTS',
      'PhonePayResetExceptionAckWSDS' => '\\PhonePayResetExceptionAckWSDS',
      'RESET_ACKNOWLEDGE' => '\\RESET_ACKNOWLEDGE',
      'RppsWSDS' => '\\RppsWSDS',
      'RppsResponse' => '\\RppsResponse',
      'PayeesWSDS' => '\\PayeesWSDS',
      'ADDRESSES' => '\\ADDRESSES',
      'CONTACTS' => '\\CONTACTS',
      'VANClientDetailsWSDS' => '\\VANClientDetailsWSDS',
      'VAN_CLIENT_DETAILS' => '\\VAN_CLIENT_DETAILS',
      'NsfStatusWSDS' => '\\NsfStatusWSDS',
      'NSF_STATUS' => '\\NSF_STATUS',
      'DebtsWSDS' => '\\DebtsWSDS',
      'DEBTS' => '\\DEBTS',
      'PhonePayAckResolvedExceptionsADO' => '\\PhonePayAckResolvedExceptionsADO',
      'exceptions' => '\\exceptions',
      'PhonePayAckResolvedExceptionsADOResponse' => '\\PhonePayAckResolvedExceptionsADOResponse',
      'PhonePayAckResolvedExceptionsADOResult' => '\\PhonePayAckResolvedExceptionsADOResult',
      'PhonePayAckResolvedExceptionsXML' => '\\PhonePayAckResolvedExceptionsXML',
      'resolvedExceptionsNodeIn' => '\\resolvedExceptionsNodeIn',
      'PhonePayAckResolvedExceptionsXMLResponse' => '\\PhonePayAckResolvedExceptionsXMLResponse',
      'PhonePayAckResolvedExceptionsXMLResult' => '\\PhonePayAckResolvedExceptionsXMLResult',
      'PhonePayResponseStatusGetADO' => '\\PhonePayResponseStatusGetADO',
      'PhonePayResponseStatusGetADOResponse' => '\\PhonePayResponseStatusGetADOResponse',
      'PhonePayResponseStatusGetADOResult' => '\\PhonePayResponseStatusGetADOResult',
      'PhonePayResponseStatusGetXML' => '\\PhonePayResponseStatusGetXML',
      'PhonePayResponseStatusGetXMLResponse' => '\\PhonePayResponseStatusGetXMLResponse',
      'PhonePayResponseStatusGetXMLResult' => '\\PhonePayResponseStatusGetXMLResult',
      'TrackingInfoGetADO' => '\\TrackingInfoGetADO',
      'TrackingInfoGetADOResponse' => '\\TrackingInfoGetADOResponse',
      'TrackingInfoGetADOResult' => '\\TrackingInfoGetADOResult',
      'TrackingInfoGetXML' => '\\TrackingInfoGetXML',
      'TrackingInfoGetXMLResponse' => '\\TrackingInfoGetXMLResponse',
      'TrackingInfoGetXMLResult' => '\\TrackingInfoGetXMLResult',
      'TransactionStatusDescriptionGetADO' => '\\TransactionStatusDescriptionGetADO',
      'TransactionStatusDescriptionGetADOResponse' => '\\TransactionStatusDescriptionGetADOResponse',
      'TransactionStatusDescriptionGetADOResult' => '\\TransactionStatusDescriptionGetADOResult',
      'TransactionStatusDescriptionGetXML' => '\\TransactionStatusDescriptionGetXML',
      'TransactionStatusDescriptionGetXMLResponse' => '\\TransactionStatusDescriptionGetXMLResponse',
      'TransactionStatusDescriptionGetXMLResult' => '\\TransactionStatusDescriptionGetXMLResult',
      'PaymentStatusDescriptionGetADO' => '\\PaymentStatusDescriptionGetADO',
      'PaymentStatusDescriptionGetADOResponse' => '\\PaymentStatusDescriptionGetADOResponse',
      'PaymentStatusDescriptionGetADOResult' => '\\PaymentStatusDescriptionGetADOResult',
      'PaymentStatusDescriptionGetXML' => '\\PaymentStatusDescriptionGetXML',
      'PaymentStatusDescriptionGetXMLResponse' => '\\PaymentStatusDescriptionGetXMLResponse',
      'PaymentStatusDescriptionGetXMLResult' => '\\PaymentStatusDescriptionGetXMLResult',
      'BankAccountStatusGetADO' => '\\BankAccountStatusGetADO',
      'BankAccountStatusGetADOResponse' => '\\BankAccountStatusGetADOResponse',
      'BankAccountStatusGetADOResult' => '\\BankAccountStatusGetADOResult',
      'BankAccountStatusGetXML' => '\\BankAccountStatusGetXML',
      'BankAccountStatusGetXMLResponse' => '\\BankAccountStatusGetXMLResponse',
      'BankAccountStatusGetXMLResult' => '\\BankAccountStatusGetXMLResult',
      'BankAccountStatusByClientGetADO' => '\\BankAccountStatusByClientGetADO',
      'BankAccountStatusByClientGetADOResponse' => '\\BankAccountStatusByClientGetADOResponse',
      'BankAccountStatusByClientGetADOResult' => '\\BankAccountStatusByClientGetADOResult',
      'BankAccountStatusByClientGetXML' => '\\BankAccountStatusByClientGetXML',
      'BankAccountStatusByClientGetXMLResponse' => '\\BankAccountStatusByClientGetXMLResponse',
      'BankAccountStatusByClientGetXMLResult' => '\\BankAccountStatusByClientGetXMLResult',
      'ClientTransferSetADO' => '\\ClientTransferSetADO',
      'ClientTransferSetADOResponse' => '\\ClientTransferSetADOResponse',
      'ClientTransferSetADOResult' => '\\ClientTransferSetADOResult',
      'ClientTransferSetXML' => '\\ClientTransferSetXML',
      'ClientTransferSetXMLResponse' => '\\ClientTransferSetXMLResponse',
      'ClientTransferSetXMLResult' => '\\ClientTransferSetXMLResult',
      'DebtsGetADO' => '\\DebtsGetADO',
      'DebtsGetADOResponse' => '\\DebtsGetADOResponse',
      'DebtsGetADOResult' => '\\DebtsGetADOResult',
      'DebtsGetXML' => '\\DebtsGetXML',
      'DebtsGetXMLResponse' => '\\DebtsGetXMLResponse',
      'DebtsGetXMLResult' => '\\DebtsGetXMLResult',
      'TransfersGetXML' => '\\TransfersGetXML',
      'TransfersGetXMLResponse' => '\\TransfersGetXMLResponse',
      'TransfersGetXMLResult' => '\\TransfersGetXMLResult',
      'TransfersGetADO' => '\\TransfersGetADO',
      'TransfersGetADOResponse' => '\\TransfersGetADOResponse',
      'TransfersGetADOResult' => '\\TransfersGetADOResult',
      'TransfersSetXML' => '\\TransfersSetXML',
      'transfersNodeIn' => '\\transfersNodeIn',
      'TransfersSetXMLResponse' => '\\TransfersSetXMLResponse',
      'TransfersSetXMLResult' => '\\TransfersSetXMLResult',
      'TransfersSetADO' => '\\TransfersSetADO',
      'transfersDataADO' => '\\transfersDataADO',
      'TransfersSetADOResponse' => '\\TransfersSetADOResponse',
      'TransfersSetADOResult' => '\\TransfersSetADOResult',
      'TransferReturnsGetXML' => '\\TransferReturnsGetXML',
      'TransferReturnsGetXMLResponse' => '\\TransferReturnsGetXMLResponse',
      'TransferReturnsGetXMLResult' => '\\TransferReturnsGetXMLResult',
      'TransferReturnsGetADO' => '\\TransferReturnsGetADO',
      'TransferReturnsGetADOResponse' => '\\TransferReturnsGetADOResponse',
      'TransferReturnsGetADOResult' => '\\TransferReturnsGetADOResult',
      'TransferReturnsSetXML' => '\\TransferReturnsSetXML',
      'TransferReturnsSetXMLResponse' => '\\TransferReturnsSetXMLResponse',
      'TransferReturnsSetXMLResult' => '\\TransferReturnsSetXMLResult',
      'TransferReturnsSetADO' => '\\TransferReturnsSetADO',
      'transferReturnsDataADO' => '\\transferReturnsDataADO',
      'TransferReturnsSetADOResponse' => '\\TransferReturnsSetADOResponse',
      'TransferReturnsSetADOResult' => '\\TransferReturnsSetADOResult',
      'DebtsSetADO' => '\\DebtsSetADO',
      'debtsDataADO' => '\\debtsDataADO',
      'DebtsSetADOResponse' => '\\DebtsSetADOResponse',
      'DebtsSetADOResult' => '\\DebtsSetADOResult',
      'DebtsSetXML' => '\\DebtsSetXML',
      'debtsNodeIn' => '\\debtsNodeIn',
      'DebtsSetXMLResponse' => '\\DebtsSetXMLResponse',
      'DebtsSetXMLResult' => '\\DebtsSetXMLResult',
      'SettlementTransactionLinksGetADO' => '\\SettlementTransactionLinksGetADO',
      'SettlementTransactionLinksGetADOResponse' => '\\SettlementTransactionLinksGetADOResponse',
      'SettlementTransactionLinksGetADOResult' => '\\SettlementTransactionLinksGetADOResult',
      'SettlementTransactionLinksGetXML' => '\\SettlementTransactionLinksGetXML',
      'SettlementTransactionLinksGetXMLResponse' => '\\SettlementTransactionLinksGetXMLResponse',
      'SettlementTransactionLinksGetXMLResult' => '\\SettlementTransactionLinksGetXMLResult',
      'SettlementsGetADO' => '\\SettlementsGetADO',
      'SettlementsGetADOResponse' => '\\SettlementsGetADOResponse',
      'SettlementsGetADOResult' => '\\SettlementsGetADOResult',
      'SettlementsGetXML' => '\\SettlementsGetXML',
      'SettlementsGetXMLResponse' => '\\SettlementsGetXMLResponse',
      'SettlementsGetXMLResult' => '\\SettlementsGetXMLResult',
      'SettlementsSetADO' => '\\SettlementsSetADO',
      'settlementDataADO' => '\\settlementDataADO',
      'SettlementsSetADOResponse' => '\\SettlementsSetADOResponse',
      'SettlementsSetADOResult' => '\\SettlementsSetADOResult',
      'SettlementsSetXML' => '\\SettlementsSetXML',
      'settlementNodeIn' => '\\settlementNodeIn',
      'SettlementsSetXMLResponse' => '\\SettlementsSetXMLResponse',
      'SettlementsSetXMLResult' => '\\SettlementsSetXMLResult',
      'SettlementTransactionLinksSetADO' => '\\SettlementTransactionLinksSetADO',
      'settlementTransactionLinksDataADO' => '\\settlementTransactionLinksDataADO',
      'SettlementTransactionLinksSetADOResponse' => '\\SettlementTransactionLinksSetADOResponse',
      'SettlementTransactionLinksSetADOResult' => '\\SettlementTransactionLinksSetADOResult',
      'SettlementTransactionLinksSetXML' => '\\SettlementTransactionLinksSetXML',
      'settlementTransactionLinksNodeIn' => '\\settlementTransactionLinksNodeIn',
      'SettlementTransactionLinksSetXMLResponse' => '\\SettlementTransactionLinksSetXMLResponse',
      'SettlementTransactionLinksSetXMLResult' => '\\SettlementTransactionLinksSetXMLResult',
      'ChargesGetADO' => '\\ChargesGetADO',
      'ChargesGetADOResponse' => '\\ChargesGetADOResponse',
      'ChargesGetADOResult' => '\\ChargesGetADOResult',
      'ChargesGetXML' => '\\ChargesGetXML',
      'ChargesGetXMLResponse' => '\\ChargesGetXMLResponse',
      'ChargesGetXMLResult' => '\\ChargesGetXMLResult',
      'ChargesSetADO' => '\\ChargesSetADO',
      'chargesDataADO' => '\\chargesDataADO',
      'ChargesSetADOResponse' => '\\ChargesSetADOResponse',
      'ChargesSetADOResult' => '\\ChargesSetADOResult',
      'ChargesSetXML' => '\\ChargesSetXML',
      'chargesNodeIn' => '\\chargesNodeIn',
      'ChargesSetXMLResponse' => '\\ChargesSetXMLResponse',
      'ChargesSetXMLResult' => '\\ChargesSetXMLResult',
      'ChargesDebitsLinkSetADO' => '\\ChargesDebitsLinkSetADO',
      'chargesDebitsLinkDataADO' => '\\chargesDebitsLinkDataADO',
      'ChargesDebitsLinkSetADOResponse' => '\\ChargesDebitsLinkSetADOResponse',
      'ChargesDebitsLinkSetADOResult' => '\\ChargesDebitsLinkSetADOResult',
      'ChargesDebitsLinkSetXML' => '\\ChargesDebitsLinkSetXML',
      'ChargesDebitsLinkSetXMLResponse' => '\\ChargesDebitsLinkSetXMLResponse',
      'ChargesDebitsLinkSetXMLResult' => '\\ChargesDebitsLinkSetXMLResult',
      'ChargesDebitLinksGetADO' => '\\ChargesDebitLinksGetADO',
      'ChargesDebitLinksGetADOResponse' => '\\ChargesDebitLinksGetADOResponse',
      'ChargesDebitLinksGetADOResult' => '\\ChargesDebitLinksGetADOResult',
      'ChargesDebitLinksGetXML' => '\\ChargesDebitLinksGetXML',
      'ChargesDebitLinksGetXMLResponse' => '\\ChargesDebitLinksGetXMLResponse',
      'ChargesDebitLinksGetXMLResult' => '\\ChargesDebitLinksGetXMLResult',
      'SplitFeeInfoGetXML' => '\\SplitFeeInfoGetXML',
      'SplitFeeInfoGetXMLResponse' => '\\SplitFeeInfoGetXMLResponse',
      'SplitFeeInfoGetXMLResult' => '\\SplitFeeInfoGetXMLResult',
      'SplitFeeInfoGetADO' => '\\SplitFeeInfoGetADO',
      'SplitFeeInfoGetADOResponse' => '\\SplitFeeInfoGetADOResponse',
      'SplitFeeInfoGetADOResult' => '\\SplitFeeInfoGetADOResult',
      'DepositsGetADO' => '\\DepositsGetADO',
      'DepositsGetADOResponse' => '\\DepositsGetADOResponse',
      'DepositsGetADOResult' => '\\DepositsGetADOResult',
      'DepositsGetXML' => '\\DepositsGetXML',
      'DepositsGetXMLResponse' => '\\DepositsGetXMLResponse',
      'DepositsGetXMLResult' => '\\DepositsGetXMLResult',
      'PayeesGetADO' => '\\PayeesGetADO',
      'PayeesGetADOResponse' => '\\PayeesGetADOResponse',
      'PayeesGetADOResult' => '\\PayeesGetADOResult',
      'PayeesGetXML' => '\\PayeesGetXML',
      'PayeesGetXMLResponse' => '\\PayeesGetXMLResponse',
      'PayeesGetXMLResult' => '\\PayeesGetXMLResult',
      'PayeesDirectPayGetADO' => '\\PayeesDirectPayGetADO',
      'PayeesDirectPayGetADOResponse' => '\\PayeesDirectPayGetADOResponse',
      'PayeesDirectPayGetADOResult' => '\\PayeesDirectPayGetADOResult',
      'PayeesDirectPayGetXML' => '\\PayeesDirectPayGetXML',
      'PayeesDirectPayGetXMLResponse' => '\\PayeesDirectPayGetXMLResponse',
      'PayeesDirectPayGetXMLResult' => '\\PayeesDirectPayGetXMLResult',
      'PayeesListGetADO' => '\\PayeesListGetADO',
      'PayeesListGetADOResponse' => '\\PayeesListGetADOResponse',
      'PayeesListGetADOResult' => '\\PayeesListGetADOResult',
      'PayeesListGetXML' => '\\PayeesListGetXML',
      'PayeesListGetXMLResponse' => '\\PayeesListGetXMLResponse',
      'PayeesListGetXMLResult' => '\\PayeesListGetXMLResult',
      'PayeesSetADO' => '\\PayeesSetADO',
      'payeesDataADO' => '\\payeesDataADO',
      'PayeesSetADOResponse' => '\\PayeesSetADOResponse',
      'PayeesSetADOResult' => '\\PayeesSetADOResult',
      'PayeesSetXML' => '\\PayeesSetXML',
      'payeesNodeIn' => '\\payeesNodeIn',
      'PayeesSetXMLResponse' => '\\PayeesSetXMLResponse',
      'PayeesSetXMLResult' => '\\PayeesSetXMLResult',
      'AccountsGetADO' => '\\AccountsGetADO',
      'AccountsGetADOResponse' => '\\AccountsGetADOResponse',
      'AccountsGetADOResult' => '\\AccountsGetADOResult',
      'AccountsGetXML' => '\\AccountsGetXML',
      'AccountsGetXMLResponse' => '\\AccountsGetXMLResponse',
      'AccountsGetXMLResult' => '\\AccountsGetXMLResult',
      'NextAccountGetADO' => '\\NextAccountGetADO',
      'NextAccountGetADOResponse' => '\\NextAccountGetADOResponse',
      'NextAccountGetADOResult' => '\\NextAccountGetADOResult',
      'NextAccountGetXML' => '\\NextAccountGetXML',
      'NextAccountGetXMLResponse' => '\\NextAccountGetXMLResponse',
      'NextAccountGetXMLResult' => '\\NextAccountGetXMLResult',
      'ClientsGetADO' => '\\ClientsGetADO',
      'ClientsGetADOResponse' => '\\ClientsGetADOResponse',
      'ClientsGetADOResult' => '\\ClientsGetADOResult',
      'ClientsGetXML' => '\\ClientsGetXML',
      'ClientsGetXMLResponse' => '\\ClientsGetXMLResponse',
      'ClientsGetXMLResult' => '\\ClientsGetXMLResult',
      'ClientsSetADO' => '\\ClientsSetADO',
      'clientsDataADO' => '\\clientsDataADO',
      'ClientsSetADOResponse' => '\\ClientsSetADOResponse',
      'ClientsSetADOResult' => '\\ClientsSetADOResult',
      'ClientsSetXML' => '\\ClientsSetXML',
      'clientNodeIn' => '\\clientNodeIn',
      'ClientsSetXMLResponse' => '\\ClientsSetXMLResponse',
      'ClientsSetXMLResult' => '\\ClientsSetXMLResult',
      'ClientsListGetADO' => '\\ClientsListGetADO',
      'ClientsListGetADOResponse' => '\\ClientsListGetADOResponse',
      'ClientsListGetADOResult' => '\\ClientsListGetADOResult',
      'ClientsListGetXML' => '\\ClientsListGetXML',
      'ClientsListGetXMLResponse' => '\\ClientsListGetXMLResponse',
      'ClientsListGetXMLResult' => '\\ClientsListGetXMLResult',
      'PolicyGroupsGetADO' => '\\PolicyGroupsGetADO',
      'PolicyGroupsGetADOResponse' => '\\PolicyGroupsGetADOResponse',
      'PolicyGroupsGetADOResult' => '\\PolicyGroupsGetADOResult',
      'PolicyGroupsGetXML' => '\\PolicyGroupsGetXML',
      'PolicyGroupsGetXMLResponse' => '\\PolicyGroupsGetXMLResponse',
      'PolicyGroupsGetXMLResult' => '\\PolicyGroupsGetXMLResult',
      'DebitsSetADO' => '\\DebitsSetADO',
      'debitsDataADO' => '\\debitsDataADO',
      'DebitsSetADOResponse' => '\\DebitsSetADOResponse',
      'DebitsSetADOResult' => '\\DebitsSetADOResult',
      'DebitsSet2ADO' => '\\DebitsSet2ADO',
      'DebitsSet2ADOResponse' => '\\DebitsSet2ADOResponse',
      'DebitsSet2ADOResult' => '\\DebitsSet2ADOResult',
      'DebitsSet3ADO' => '\\DebitsSet3ADO',
      'DebitsSet3ADOResponse' => '\\DebitsSet3ADOResponse',
      'DebitsSet3ADOResult' => '\\DebitsSet3ADOResult',
      'DebitsSetXML' => '\\DebitsSetXML',
      'debitsNodeIn' => '\\debitsNodeIn',
      'DebitsSetXMLResponse' => '\\DebitsSetXMLResponse',
      'DebitsSetXMLResult' => '\\DebitsSetXMLResult',
      'DebitsSet2XML' => '\\DebitsSet2XML',
      'DebitsSet2XMLResponse' => '\\DebitsSet2XMLResponse',
      'DebitsSet2XMLResult' => '\\DebitsSet2XMLResult',
      'DebitsSet3XML' => '\\DebitsSet3XML',
      'DebitsSet3XMLResponse' => '\\DebitsSet3XMLResponse',
      'DebitsSet3XMLResult' => '\\DebitsSet3XMLResult',
      'DebitInfoGetADO' => '\\DebitInfoGetADO',
      'DebitInfoGetADOResponse' => '\\DebitInfoGetADOResponse',
      'DebitInfoGetADOResult' => '\\DebitInfoGetADOResult',
      'DebitsInfoGetXML' => '\\DebitsInfoGetXML',
      'DebitsInfoGetXMLResponse' => '\\DebitsInfoGetXMLResponse',
      'DebitsInfoGetXMLResult' => '\\DebitsInfoGetXMLResult',
      'DebitsGetADO' => '\\DebitsGetADO',
      'DebitsGetADOResponse' => '\\DebitsGetADOResponse',
      'DebitsGetADOResult' => '\\DebitsGetADOResult',
      'DebitsGet2ADO' => '\\DebitsGet2ADO',
      'DebitsGet2ADOResponse' => '\\DebitsGet2ADOResponse',
      'DebitsGet2ADOResult' => '\\DebitsGet2ADOResult',
      'DebitsGetXML' => '\\DebitsGetXML',
      'DebitsGetXMLResponse' => '\\DebitsGetXMLResponse',
      'DebitsGetXMLResult' => '\\DebitsGetXMLResult',
      'DebitsGet2XML' => '\\DebitsGet2XML',
      'DebitsGet2XMLResponse' => '\\DebitsGet2XMLResponse',
      'DebitsGet2XMLResult' => '\\DebitsGet2XMLResult',
      'DraftInfoGetADO' => '\\DraftInfoGetADO',
      'DraftInfoGetADOResponse' => '\\DraftInfoGetADOResponse',
      'DraftInfoGetADOResult' => '\\DraftInfoGetADOResult',
      'DraftInfoGetXML' => '\\DraftInfoGetXML',
      'DraftInfoGetXMLResponse' => '\\DraftInfoGetXMLResponse',
      'DraftInfoGetXMLResult' => '\\DraftInfoGetXMLResult',
      'DraftsGetXML' => '\\DraftsGetXML',
      'DraftsGetXMLResponse' => '\\DraftsGetXMLResponse',
      'DraftsGetXMLResult' => '\\DraftsGetXMLResult',
      'DraftsSetADO' => '\\DraftsSetADO',
      'DraftsSetADOResponse' => '\\DraftsSetADOResponse',
      'DraftsSetADOResult' => '\\DraftsSetADOResult',
      'DraftsSet2ADO' => '\\DraftsSet2ADO',
      'DraftsSet2ADOResponse' => '\\DraftsSet2ADOResponse',
      'DraftsSet2ADOResult' => '\\DraftsSet2ADOResult',
      'DraftsSetXML' => '\\DraftsSetXML',
      'DraftsSetXMLResponse' => '\\DraftsSetXMLResponse',
      'DraftsSetXMLResult' => '\\DraftsSetXMLResult',
      'DraftsSet2XML' => '\\DraftsSet2XML',
      'DraftsSet2XMLResponse' => '\\DraftsSet2XMLResponse',
      'DraftsSet2XMLResult' => '\\DraftsSet2XMLResult',
      'DraftsGetADO' => '\\DraftsGetADO',
      'DraftsGetADOResponse' => '\\DraftsGetADOResponse',
      'DraftsGetADOResult' => '\\DraftsGetADOResult',
      'FeeInfoGetADO' => '\\FeeInfoGetADO',
      'FeeInfoGetADOResponse' => '\\FeeInfoGetADOResponse',
      'FeeInfoGetADOResult' => '\\FeeInfoGetADOResult',
      'FeeInfoGetXML' => '\\FeeInfoGetXML',
      'FeeInfoGetXMLResponse' => '\\FeeInfoGetXMLResponse',
      'FeeInfoGetXMLResult' => '\\FeeInfoGetXMLResult',
      'FeesGetXML' => '\\FeesGetXML',
      'FeesGetXMLResponse' => '\\FeesGetXMLResponse',
      'FeesGetXMLResult' => '\\FeesGetXMLResult',
      'FeesSetADO' => '\\FeesSetADO',
      'FeesSetADOResponse' => '\\FeesSetADOResponse',
      'FeesSetADOResult' => '\\FeesSetADOResult',
      'FeesSetXML' => '\\FeesSetXML',
      'FeesSetXMLResponse' => '\\FeesSetXMLResponse',
      'FeesSetXMLResult' => '\\FeesSetXMLResult',
      'FeesGetADO' => '\\FeesGetADO',
      'FeesGetADOResponse' => '\\FeesGetADOResponse',
      'FeesGetADOResult' => '\\FeesGetADOResult',
      'TransactionsGetADO' => '\\TransactionsGetADO',
      'TransactionsGetADOResponse' => '\\TransactionsGetADOResponse',
      'TransactionsGetADOResult' => '\\TransactionsGetADOResult',
      'TransactionsGetXML' => '\\TransactionsGetXML',
      'TransactionsGetXMLResponse' => '\\TransactionsGetXMLResponse',
      'TransactionsGetXMLResult' => '\\TransactionsGetXMLResult',
      'TransactionStatusSetADO' => '\\TransactionStatusSetADO',
      'transactionADO' => '\\transactionADO',
      'TransactionStatusSetADOResponse' => '\\TransactionStatusSetADOResponse',
      'TransactionStatusSetADOResult' => '\\TransactionStatusSetADOResult',
      'TransactionStatusSetXML' => '\\TransactionStatusSetXML',
      'transactionsNodeIn' => '\\transactionsNodeIn',
      'TransactionStatusSetXMLResponse' => '\\TransactionStatusSetXMLResponse',
      'TransactionStatusSetXMLResult' => '\\TransactionStatusSetXMLResult',
      'BanksGetADO' => '\\BanksGetADO',
      'BanksGetADOResponse' => '\\BanksGetADOResponse',
      'BanksGetADOResult' => '\\BanksGetADOResult',
      'BanksGetXML' => '\\BanksGetXML',
      'BanksGetXMLResponse' => '\\BanksGetXMLResponse',
      'BanksGetXMLResult' => '\\BanksGetXMLResult',
      'BankAccountTypesGetADO' => '\\BankAccountTypesGetADO',
      'BankAccountTypesGetADOResponse' => '\\BankAccountTypesGetADOResponse',
      'BankAccountTypesGetADOResult' => '\\BankAccountTypesGetADOResult',
      'BankAccountTypesGetXML' => '\\BankAccountTypesGetXML',
      'BankAccountTypesGetXMLResponse' => '\\BankAccountTypesGetXMLResponse',
      'BankAccountTypesGetXMLResult' => '\\BankAccountTypesGetXMLResult',
      'BankHolidaysGetADO' => '\\BankHolidaysGetADO',
      'BankHolidaysGetADOResponse' => '\\BankHolidaysGetADOResponse',
      'BankHolidaysGetADOResult' => '\\BankHolidaysGetADOResult',
      'BankHolidaysGetXML' => '\\BankHolidaysGetXML',
      'BankHolidaysGetXMLResponse' => '\\BankHolidaysGetXMLResponse',
      'BankHolidaysGetXMLResult' => '\\BankHolidaysGetXMLResult',
      'NotesGetXML' => '\\NotesGetXML',
      'NotesGetXMLResponse' => '\\NotesGetXMLResponse',
      'NotesGetXMLResult' => '\\NotesGetXMLResult',
      'NotesSetADO' => '\\NotesSetADO',
      'notesDataADO' => '\\notesDataADO',
      'NotesSetADOResponse' => '\\NotesSetADOResponse',
      'NotesSetADOResult' => '\\NotesSetADOResult',
      'NotesSetXML' => '\\NotesSetXML',
      'noteNodeIn' => '\\noteNodeIn',
      'NotesSetXMLResponse' => '\\NotesSetXMLResponse',
      'NotesSetXMLResult' => '\\NotesSetXMLResult',
      'NotesGetADO' => '\\NotesGetADO',
      'NotesGetADOResponse' => '\\NotesGetADOResponse',
      'NotesGetADOResult' => '\\NotesGetADOResult',
      'PaymentsGetADO' => '\\PaymentsGetADO',
      'PaymentsGetADOResponse' => '\\PaymentsGetADOResponse',
      'PaymentsGetADOResult' => '\\PaymentsGetADOResult',
      'PaymentsGet2ADO' => '\\PaymentsGet2ADO',
      'PaymentsGet2ADOResponse' => '\\PaymentsGet2ADOResponse',
      'PaymentsGet2ADOResult' => '\\PaymentsGet2ADOResult',
      'PaymentsGetXML' => '\\PaymentsGetXML',
      'PaymentsGetXMLResponse' => '\\PaymentsGetXMLResponse',
      'PaymentsGetXMLResult' => '\\PaymentsGetXMLResult',
      'PaymentsGet2XML' => '\\PaymentsGet2XML',
      'PaymentsGet2XMLResponse' => '\\PaymentsGet2XMLResponse',
      'PaymentsGet2XMLResult' => '\\PaymentsGet2XMLResult',
      'PaymentsDirectPayGetADO' => '\\PaymentsDirectPayGetADO',
      'PaymentsDirectPayGetADOResponse' => '\\PaymentsDirectPayGetADOResponse',
      'PaymentsDirectPayGetADOResult' => '\\PaymentsDirectPayGetADOResult',
      'PaymentsDirectPayGetXML' => '\\PaymentsDirectPayGetXML',
      'PaymentsDirectPayGetXMLResponse' => '\\PaymentsDirectPayGetXMLResponse',
      'PaymentsDirectPayGetXMLResult' => '\\PaymentsDirectPayGetXMLResult',
      'PaymentsSetADO' => '\\PaymentsSetADO',
      'paymentsDataADO' => '\\paymentsDataADO',
      'PaymentsSetADOResponse' => '\\PaymentsSetADOResponse',
      'PaymentsSetADOResult' => '\\PaymentsSetADOResult',
      'PaymentsSet2ADO' => '\\PaymentsSet2ADO',
      'PaymentsSet2ADOResponse' => '\\PaymentsSet2ADOResponse',
      'PaymentsSet2ADOResult' => '\\PaymentsSet2ADOResult',
      'PaymentsSetXML' => '\\PaymentsSetXML',
      'paymentsNodeIn' => '\\paymentsNodeIn',
      'PaymentsSetXMLResponse' => '\\PaymentsSetXMLResponse',
      'PaymentsSetXMLResult' => '\\PaymentsSetXMLResult',
      'PaymentsSet2XML' => '\\PaymentsSet2XML',
      'PaymentsSet2XMLResponse' => '\\PaymentsSet2XMLResponse',
      'PaymentsSet2XMLResult' => '\\PaymentsSet2XMLResult',
      'PaymentInfoGetADO' => '\\PaymentInfoGetADO',
      'PaymentInfoGetADOResponse' => '\\PaymentInfoGetADOResponse',
      'PaymentInfoGetADOResult' => '\\PaymentInfoGetADOResult',
      'PaymentInfoGetXML' => '\\PaymentInfoGetXML',
      'PaymentInfoGetXMLResponse' => '\\PaymentInfoGetXMLResponse',
      'PaymentInfoGetXMLResult' => '\\PaymentInfoGetXMLResult',
      'NsfStatusGetADO' => '\\NsfStatusGetADO',
      'NsfStatusGetADOResponse' => '\\NsfStatusGetADOResponse',
      'NsfStatusGetADOResult' => '\\NsfStatusGetADOResult',
      'NsfStatusGetXML' => '\\NsfStatusGetXML',
      'NsfStatusGetXMLResponse' => '\\NsfStatusGetXMLResponse',
      'NsfStatusGetXMLResult' => '\\NsfStatusGetXMLResult',
      'StatesGetADO' => '\\StatesGetADO',
      'StatesGetADOResponse' => '\\StatesGetADOResponse',
      'StatesGetADOResult' => '\\StatesGetADOResult',
      'StatesGetXML' => '\\StatesGetXML',
      'StatesGetXMLResponse' => '\\StatesGetXMLResponse',
      'StatesGetXMLResult' => '\\StatesGetXMLResult',
      'BalanceGetADO' => '\\BalanceGetADO',
      'accountsListWSDS' => '\\accountsListWSDS',
      'BalanceGetADOResponse' => '\\BalanceGetADOResponse',
      'BalanceGetADOResult' => '\\BalanceGetADOResult',
      'BalanceGetXML' => '\\BalanceGetXML',
      'accountsListNodeIn' => '\\accountsListNodeIn',
      'BalanceGetXMLResponse' => '\\BalanceGetXMLResponse',
      'BalanceGetXMLResult' => '\\BalanceGetXMLResult',
      'UpdatedBalancesGetADO' => '\\UpdatedBalancesGetADO',
      'UpdatedBalancesGetADOResponse' => '\\UpdatedBalancesGetADOResponse',
      'UpdatedBalancesGetADOResult' => '\\UpdatedBalancesGetADOResult',
      'UpdatedBalancesGet2ADO' => '\\UpdatedBalancesGet2ADO',
      'UpdatedBalancesGet2ADOResponse' => '\\UpdatedBalancesGet2ADOResponse',
      'UpdatedBalancesGet2ADOResult' => '\\UpdatedBalancesGet2ADOResult',
      'UpdatedBalancesGetXML' => '\\UpdatedBalancesGetXML',
      'UpdatedBalancesGetXMLResponse' => '\\UpdatedBalancesGetXMLResponse',
      'UpdatedBalancesGetXMLResult' => '\\UpdatedBalancesGetXMLResult',
      'UpdatedBalancesGet2XML' => '\\UpdatedBalancesGet2XML',
      'UpdatedBalancesGet2XMLResponse' => '\\UpdatedBalancesGet2XMLResponse',
      'UpdatedBalancesGet2XMLResult' => '\\UpdatedBalancesGet2XMLResult',
      'ClientsPreValidateADO' => '\\ClientsPreValidateADO',
      'preValidationsDataADO' => '\\preValidationsDataADO',
      'ClientsPreValidateADOResponse' => '\\ClientsPreValidateADOResponse',
      'ClientsPreValidateADOResult' => '\\ClientsPreValidateADOResult',
      'ClientsPreValidateXML' => '\\ClientsPreValidateXML',
      'ClientsPreValidateXMLResponse' => '\\ClientsPreValidateXMLResponse',
      'ClientsPreValidateXMLResult' => '\\ClientsPreValidateXMLResult',
      'ClientStatementGet' => '\\ClientStatementGet',
      'ClientStatementGetResponse' => '\\ClientStatementGetResponse',
      'ClientsFailedValidationGetADO' => '\\ClientsFailedValidationGetADO',
      'ClientsFailedValidationGetADOResponse' => '\\ClientsFailedValidationGetADOResponse',
      'ClientsFailedValidationGetADOResult' => '\\ClientsFailedValidationGetADOResult',
      'ClientsFailedValidationGetXML' => '\\ClientsFailedValidationGetXML',
      'ClientsFailedValidationGetXMLResponse' => '\\ClientsFailedValidationGetXMLResponse',
      'ClientsFailedValidationGetXMLResult' => '\\ClientsFailedValidationGetXMLResult',
      'GetBavRecordsForCompanyXML' => '\\GetBavRecordsForCompanyXML',
      'BAVCompanyInquiryParmeters' => '\\BAVCompanyInquiryParmeters',
      'GetBavRecordsForCompanyXMLResponse' => '\\GetBavRecordsForCompanyXMLResponse',
      'GetBavRecordsForCompanyXMLResult' => '\\GetBavRecordsForCompanyXMLResult',
      'GetBavRecordsForCompanyWithReturnCodesXML' => '\\GetBavRecordsForCompanyWithReturnCodesXML',
      'GetBavRecordsForCompanyWithReturnCodesXMLResponse' => '\\GetBavRecordsForCompanyWithReturnCodesXMLResponse',
      'GetBavRecordsForCompanyWithReturnCodesXMLResult' => '\\GetBavRecordsForCompanyWithReturnCodesXMLResult',
      'GetBavRecordsForCompanyADO' => '\\GetBavRecordsForCompanyADO',
      'GetBavRecordsForCompanyADOResponse' => '\\GetBavRecordsForCompanyADOResponse',
      'GetBavRecordsForCompanyADOResult' => '\\GetBavRecordsForCompanyADOResult',
      'GetBavRecordsForCompanyWithReturnCodesADO' => '\\GetBavRecordsForCompanyWithReturnCodesADO',
      'GetBavRecordsForCompanyWithReturnCodesADOResponse' => '\\GetBavRecordsForCompanyWithReturnCodesADOResponse',
      'GetBavRecordsForCompanyWithReturnCodesADOResult' => '\\GetBavRecordsForCompanyWithReturnCodesADOResult',
      'CheckImageGet' => '\\CheckImageGet',
      'CheckImageGetResponse' => '\\CheckImageGetResponse',
      'CheckImagesGet' => '\\CheckImagesGet',
      'CheckImagesGetResponse' => '\\CheckImagesGetResponse',
      'ArrayOfBase64Binary' => '\\ArrayOfBase64Binary',
      'DocumentListGetADO' => '\\DocumentListGetADO',
      'DocumentListGetADOResponse' => '\\DocumentListGetADOResponse',
      'DocumentListGetADOResult' => '\\DocumentListGetADOResult',
      'DocumentListGetXML' => '\\DocumentListGetXML',
      'DocumentListGetXMLResponse' => '\\DocumentListGetXMLResponse',
      'DocumentListGetXMLResult' => '\\DocumentListGetXMLResult',
      'DocumentSetADO' => '\\DocumentSetADO',
      'DocumentSetADOResponse' => '\\DocumentSetADOResponse',
      'DocumentSetADOResult' => '\\DocumentSetADOResult',
      'DocumentSetXML' => '\\DocumentSetXML',
      'DocumentSetXMLResponse' => '\\DocumentSetXMLResponse',
      'DocumentSetXMLResult' => '\\DocumentSetXMLResult',
      'DocumentTypesGetADO' => '\\DocumentTypesGetADO',
      'DocumentTypesGetADOResponse' => '\\DocumentTypesGetADOResponse',
      'DocumentTypesGetADOResult' => '\\DocumentTypesGetADOResult',
      'DocumentTypesGetXML' => '\\DocumentTypesGetXML',
      'DocumentTypesGetXMLResponse' => '\\DocumentTypesGetXMLResponse',
      'DocumentTypesGetXMLResult' => '\\DocumentTypesGetXMLResult',
      'ClientsGet2ADO' => '\\ClientsGet2ADO',
      'ClientsGet2ADOResponse' => '\\ClientsGet2ADOResponse',
      'ClientsGet2ADOResult' => '\\ClientsGet2ADOResult',
      'ClientsGet2XML' => '\\ClientsGet2XML',
      'ClientsGet2XMLResponse' => '\\ClientsGet2XMLResponse',
      'ClientsGet2XMLResult' => '\\ClientsGet2XMLResult',
      'VirtualAccountNumberGetADO' => '\\VirtualAccountNumberGetADO',
      'VirtualAccountNumberGetADOResponse' => '\\VirtualAccountNumberGetADOResponse',
      'VirtualAccountNumberGetADOResult' => '\\VirtualAccountNumberGetADOResult',
      'VirtualAccountNumberGetXML' => '\\VirtualAccountNumberGetXML',
      'VirtualAccountNumberGetXMLResponse' => '\\VirtualAccountNumberGetXMLResponse',
      'VirtualAccountNumberGetXMLResult' => '\\VirtualAccountNumberGetXMLResult',
      'IsValidPayeeForRpps' => '\\IsValidPayeeForRpps',
      'IsValidPayeeForRppsResponse' => '\\IsValidPayeeForRppsResponse',
      'IsValidPayeeForRppsResult' => '\\IsValidPayeeForRppsResult',
      'CheckImagesIndicatorGetADO' => '\\CheckImagesIndicatorGetADO',
      'CheckImagesIndicatorGetADOResponse' => '\\CheckImagesIndicatorGetADOResponse',
      'CheckImagesIndicatorGetADOResult' => '\\CheckImagesIndicatorGetADOResult',
      'CheckImagesIndicatorGetXML' => '\\CheckImagesIndicatorGetXML',
      'CheckImagesIndicatorGetXMLResponse' => '\\CheckImagesIndicatorGetXMLResponse',
      'CheckImagesIndicatorGetXMLResult' => '\\CheckImagesIndicatorGetXMLResult',
      'PhonePayNextActiveExceptionsADO' => '\\PhonePayNextActiveExceptionsADO',
      'PhonePayNextActiveExceptionsADOResponse' => '\\PhonePayNextActiveExceptionsADOResponse',
      'PhonePayNextActiveExceptionsADOResult' => '\\PhonePayNextActiveExceptionsADOResult',
      'PhonePayNextActiveExceptionsXML' => '\\PhonePayNextActiveExceptionsXML',
      'PhonePayNextActiveExceptionsXMLResponse' => '\\PhonePayNextActiveExceptionsXMLResponse',
      'PhonePayNextActiveExceptionsXMLResult' => '\\PhonePayNextActiveExceptionsXMLResult',
      'PhonePayAckActiveExceptionsADO' => '\\PhonePayAckActiveExceptionsADO',
      'PhonePayAckActiveExceptionsADOResponse' => '\\PhonePayAckActiveExceptionsADOResponse',
      'PhonePayAckActiveExceptionsADOResult' => '\\PhonePayAckActiveExceptionsADOResult',
      'PhonePayAckActiveExceptionsXML' => '\\PhonePayAckActiveExceptionsXML',
      'exceptionsNodeIn' => '\\exceptionsNodeIn',
      'PhonePayAckActiveExceptionsXMLResponse' => '\\PhonePayAckActiveExceptionsXMLResponse',
      'PhonePayAckActiveExceptionsXMLResult' => '\\PhonePayAckActiveExceptionsXMLResult',
      'PhonePayImageGetADO' => '\\PhonePayImageGetADO',
      'PhonePayImageGetADOResponse' => '\\PhonePayImageGetADOResponse',
      'PhonePayImageGetADOResult' => '\\PhonePayImageGetADOResult',
      'PhonePayImageGetXML' => '\\PhonePayImageGetXML',
      'PhonePayImageGetXMLResponse' => '\\PhonePayImageGetXMLResponse',
      'PhonePayImageGetXMLResult' => '\\PhonePayImageGetXMLResult',
      'PhonePayExceptionTypesGetADO' => '\\PhonePayExceptionTypesGetADO',
      'PhonePayExceptionTypesGetADOResponse' => '\\PhonePayExceptionTypesGetADOResponse',
      'PhonePayExceptionTypesGetADOResult' => '\\PhonePayExceptionTypesGetADOResult',
      'PhonePayExceptionTypesGetXML' => '\\PhonePayExceptionTypesGetXML',
      'PhonePayExceptionTypesGetXMLResponse' => '\\PhonePayExceptionTypesGetXMLResponse',
      'PhonePayExceptionTypesGetXMLResult' => '\\PhonePayExceptionTypesGetXMLResult',
      'PhonePayResponseTypesGetADO' => '\\PhonePayResponseTypesGetADO',
      'PhonePayResponseTypesGetADOResponse' => '\\PhonePayResponseTypesGetADOResponse',
      'PhonePayResponseTypesGetADOResult' => '\\PhonePayResponseTypesGetADOResult',
      'PhonePayResponseTypesGetXML' => '\\PhonePayResponseTypesGetXML',
      'PhonePayResponseTypesGetXMLResponse' => '\\PhonePayResponseTypesGetXMLResponse',
      'PhonePayResponseTypesGetXMLResult' => '\\PhonePayResponseTypesGetXMLResult',
      'PhonePayResetExceptionAcknowledgeADO' => '\\PhonePayResetExceptionAcknowledgeADO',
      'PhonePayResetExceptionAcknowledgeADOResponse' => '\\PhonePayResetExceptionAcknowledgeADOResponse',
      'PhonePayResetExceptionAcknowledgeADOResult' => '\\PhonePayResetExceptionAcknowledgeADOResult',
      'PhonePayResetExceptionAcknowledgeXML' => '\\PhonePayResetExceptionAcknowledgeXML',
      'PhonePayResetExceptionAcknowledgeXMLResponse' => '\\PhonePayResetExceptionAcknowledgeXMLResponse',
      'PhonePayResetExceptionAcknowledgeXMLResult' => '\\PhonePayResetExceptionAcknowledgeXMLResult',
      'PhonePayResponseSetADO' => '\\PhonePayResponseSetADO',
      'responses' => '\\responses',
      'PhonePayResponseSetADOResponse' => '\\PhonePayResponseSetADOResponse',
      'PhonePayResponseSetADOResult' => '\\PhonePayResponseSetADOResult',
      'PhonePayResponseSetXML' => '\\PhonePayResponseSetXML',
      'responsesNodeIn' => '\\responsesNodeIn',
      'PhonePayResponseSetXMLResponse' => '\\PhonePayResponseSetXMLResponse',
      'PhonePayResponseSetXMLResult' => '\\PhonePayResponseSetXMLResult',
      'PhonePayExceptionStatusGetADO' => '\\PhonePayExceptionStatusGetADO',
      'PhonePayExceptionStatusGetADOResponse' => '\\PhonePayExceptionStatusGetADOResponse',
      'PhonePayExceptionStatusGetADOResult' => '\\PhonePayExceptionStatusGetADOResult',
      'PhonePayExceptionStatusGetXML' => '\\PhonePayExceptionStatusGetXML',
      'PhonePayExceptionStatusGetXMLResponse' => '\\PhonePayExceptionStatusGetXMLResponse',
      'PhonePayExceptionStatusGetXMLResult' => '\\PhonePayExceptionStatusGetXMLResult',
      'PhonePayNextResolvedExceptionsADO' => '\\PhonePayNextResolvedExceptionsADO',
      'PhonePayNextResolvedExceptionsADOResponse' => '\\PhonePayNextResolvedExceptionsADOResponse',
      'PhonePayNextResolvedExceptionsADOResult' => '\\PhonePayNextResolvedExceptionsADOResult',
      'PhonePayNextResolvedExceptionsXML' => '\\PhonePayNextResolvedExceptionsXML',
      'PhonePayNextResolvedExceptionsXMLResponse' => '\\PhonePayNextResolvedExceptionsXMLResponse',
      'PhonePayNextResolvedExceptionsXMLResult' => '\\PhonePayNextResolvedExceptionsXMLResult',
      'StringArray' => '\\StringArray',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://websvc.globalclientsolutions.com/v3.0/webservices.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Acknowledges a set of resolved exceptions.
     *
     * @param PhonePayAckResolvedExceptionsADO $parameters
     * @return PhonePayAckResolvedExceptionsADOResponse
     */
    public function PhonePayAckResolvedExceptionsADO(PhonePayAckResolvedExceptionsADO $parameters)
    {
      return $this->__soapCall('PhonePayAckResolvedExceptionsADO', array($parameters));
    }

    /**
     * Acknowledges a set of resolved exceptions.
     *
     * @param PhonePayAckResolvedExceptionsXML $parameters
     * @return PhonePayAckResolvedExceptionsXMLResponse
     */
    public function PhonePayAckResolvedExceptionsXML(PhonePayAckResolvedExceptionsXML $parameters)
    {
      return $this->__soapCall('PhonePayAckResolvedExceptionsXML', array($parameters));
    }

    /**
     * Returns a set of exception statuses based on filtering parameters.
     *
     * @param PhonePayResponseStatusGetADO $parameters
     * @return PhonePayResponseStatusGetADOResponse
     */
    public function PhonePayResponseStatusGetADO(PhonePayResponseStatusGetADO $parameters)
    {
      return $this->__soapCall('PhonePayResponseStatusGetADO', array($parameters));
    }

    /**
     * Returns a set of exception statuses based on filtering parameters.
     *
     * @param PhonePayResponseStatusGetXML $parameters
     * @return PhonePayResponseStatusGetXMLResponse
     */
    public function PhonePayResponseStatusGetXML(PhonePayResponseStatusGetXML $parameters)
    {
      return $this->__soapCall('PhonePayResponseStatusGetXML', array($parameters));
    }

    /**
     * Returns the tracking information by payment id or tracking number. Company Id is required.
     *
     * @param TrackingInfoGetADO $parameters
     * @return TrackingInfoGetADOResponse
     */
    public function TrackingInfoGetADO(TrackingInfoGetADO $parameters)
    {
      return $this->__soapCall('TrackingInfoGetADO', array($parameters));
    }

    /**
     * Returns the tracking information by payment id or tracking number. Company Id is required.
     *
     * @param TrackingInfoGetXML $parameters
     * @return TrackingInfoGetXMLResponse
     */
    public function TrackingInfoGetXML(TrackingInfoGetXML $parameters)
    {
      return $this->__soapCall('TrackingInfoGetXML', array($parameters));
    }

    /**
     * Returns a set of Transaction Statuses and Descriptions
     *
     * @param TransactionStatusDescriptionGetADO $parameters
     * @return TransactionStatusDescriptionGetADOResponse
     */
    public function TransactionStatusDescriptionGetADO(TransactionStatusDescriptionGetADO $parameters)
    {
      return $this->__soapCall('TransactionStatusDescriptionGetADO', array($parameters));
    }

    /**
     * Returns a set of Transaction Statuses and Descriptions
     *
     * @param TransactionStatusDescriptionGetXML $parameters
     * @return TransactionStatusDescriptionGetXMLResponse
     */
    public function TransactionStatusDescriptionGetXML(TransactionStatusDescriptionGetXML $parameters)
    {
      return $this->__soapCall('TransactionStatusDescriptionGetXML', array($parameters));
    }

    /**
     * Returns a set of Payment Statuses and Descriptions
     *
     * @param PaymentStatusDescriptionGetADO $parameters
     * @return PaymentStatusDescriptionGetADOResponse
     */
    public function PaymentStatusDescriptionGetADO(PaymentStatusDescriptionGetADO $parameters)
    {
      return $this->__soapCall('PaymentStatusDescriptionGetADO', array($parameters));
    }

    /**
     * Returns a set of Payment Statuses and Descriptions
     *
     * @param PaymentStatusDescriptionGetXML $parameters
     * @return PaymentStatusDescriptionGetXMLResponse
     */
    public function PaymentStatusDescriptionGetXML(PaymentStatusDescriptionGetXML $parameters)
    {
      return $this->__soapCall('PaymentStatusDescriptionGetXML', array($parameters));
    }

    /**
     * Returns data about bank account status
     *
     * @param BankAccountStatusGetADO $parameters
     * @return BankAccountStatusGetADOResponse
     */
    public function BankAccountStatusGetADO(BankAccountStatusGetADO $parameters)
    {
      return $this->__soapCall('BankAccountStatusGetADO', array($parameters));
    }

    /**
     * Returns data about bank account status
     *
     * @param BankAccountStatusGetXML $parameters
     * @return BankAccountStatusGetXMLResponse
     */
    public function BankAccountStatusGetXML(BankAccountStatusGetXML $parameters)
    {
      return $this->__soapCall('BankAccountStatusGetXML', array($parameters));
    }

    /**
     * Returns data about bank account status from database by clientId
     *
     * @param BankAccountStatusByClientGetADO $parameters
     * @return BankAccountStatusByClientGetADOResponse
     */
    public function BankAccountStatusByClientGetADO(BankAccountStatusByClientGetADO $parameters)
    {
      return $this->__soapCall('BankAccountStatusByClientGetADO', array($parameters));
    }

    /**
     * Returns data about bank account status from database by client Id
     *
     * @param BankAccountStatusByClientGetXML $parameters
     * @return BankAccountStatusByClientGetXMLResponse
     */
    public function BankAccountStatusByClientGetXML(BankAccountStatusByClientGetXML $parameters)
    {
      return $this->__soapCall('BankAccountStatusByClientGetXML', array($parameters));
    }

    /**
     * Creates a transfer of funds between a client's accounts that are being maintained across multiple companies.
     *
     * @param ClientTransferSetADO $parameters
     * @return ClientTransferSetADOResponse
     */
    public function ClientTransferSetADO(ClientTransferSetADO $parameters)
    {
      return $this->__soapCall('ClientTransferSetADO', array($parameters));
    }

    /**
     * Creates a transfer of funds between a client's accounts that are being maintained across multiple companies.
     *
     * @param ClientTransferSetXML $parameters
     * @return ClientTransferSetXMLResponse
     */
    public function ClientTransferSetXML(ClientTransferSetXML $parameters)
    {
      return $this->__soapCall('ClientTransferSetXML', array($parameters));
    }

    /**
     * Retrieve debt information for one or more clients
     *
     * @param DebtsGetADO $parameters
     * @return DebtsGetADOResponse
     */
    public function DebtsGetADO(DebtsGetADO $parameters)
    {
      return $this->__soapCall('DebtsGetADO', array($parameters));
    }

    /**
     * Retrieve debt information for one or more clients
     *
     * @param DebtsGetXML $parameters
     * @return DebtsGetXMLResponse
     */
    public function DebtsGetXML(DebtsGetXML $parameters)
    {
      return $this->__soapCall('DebtsGetXML', array($parameters));
    }

    /**
     * Retrieve transfers information
     *
     * @param TransfersGetXML $parameters
     * @return TransfersGetXMLResponse
     */
    public function TransfersGetXML(TransfersGetXML $parameters)
    {
      return $this->__soapCall('TransfersGetXML', array($parameters));
    }

    /**
     * Retrieve transfers information
     *
     * @param TransfersGetADO $parameters
     * @return TransfersGetADOResponse
     */
    public function TransfersGetADO(TransfersGetADO $parameters)
    {
      return $this->__soapCall('TransfersGetADO', array($parameters));
    }

    /**
     * Insert or modify transfers information
     *
     * @param TransfersSetXML $parameters
     * @return TransfersSetXMLResponse
     */
    public function TransfersSetXML(TransfersSetXML $parameters)
    {
      return $this->__soapCall('TransfersSetXML', array($parameters));
    }

    /**
     * Insert or modify transfers information
     *
     * @param TransfersSetADO $parameters
     * @return TransfersSetADOResponse
     */
    public function TransfersSetADO(TransfersSetADO $parameters)
    {
      return $this->__soapCall('TransfersSetADO', array($parameters));
    }

    /**
     * Retrieve transfer returns information
     *
     * @param TransferReturnsGetXML $parameters
     * @return TransferReturnsGetXMLResponse
     */
    public function TransferReturnsGetXML(TransferReturnsGetXML $parameters)
    {
      return $this->__soapCall('TransferReturnsGetXML', array($parameters));
    }

    /**
     * Retrieve transfers information
     *
     * @param TransferReturnsGetADO $parameters
     * @return TransferReturnsGetADOResponse
     */
    public function TransferReturnsGetADO(TransferReturnsGetADO $parameters)
    {
      return $this->__soapCall('TransferReturnsGetADO', array($parameters));
    }

    /**
     * Insert or modify transfers information
     *
     * @param TransferReturnsSetXML $parameters
     * @return TransferReturnsSetXMLResponse
     */
    public function TransferReturnsSetXML(TransferReturnsSetXML $parameters)
    {
      return $this->__soapCall('TransferReturnsSetXML', array($parameters));
    }

    /**
     * Insert or modify transfers information
     *
     * @param TransferReturnsSetADO $parameters
     * @return TransferReturnsSetADOResponse
     */
    public function TransferReturnsSetADO(TransferReturnsSetADO $parameters)
    {
      return $this->__soapCall('TransferReturnsSetADO', array($parameters));
    }

    /**
     * Insert or modify debts information for one or more clients
     *
     * @param DebtsSetADO $parameters
     * @return DebtsSetADOResponse
     */
    public function DebtsSetADO(DebtsSetADO $parameters)
    {
      return $this->__soapCall('DebtsSetADO', array($parameters));
    }

    /**
     * Insert or modify debts information for one or more clients
     *
     * @param DebtsSetXML $parameters
     * @return DebtsSetXMLResponse
     */
    public function DebtsSetXML(DebtsSetXML $parameters)
    {
      return $this->__soapCall('DebtsSetXML', array($parameters));
    }

    /**
     * Retrieve Settlement Transaction Links
     *
     * @param SettlementTransactionLinksGetADO $parameters
     * @return SettlementTransactionLinksGetADOResponse
     */
    public function SettlementTransactionLinksGetADO(SettlementTransactionLinksGetADO $parameters)
    {
      return $this->__soapCall('SettlementTransactionLinksGetADO', array($parameters));
    }

    /**
     * Retrieve Settlement Transaction Links
     *
     * @param SettlementTransactionLinksGetXML $parameters
     * @return SettlementTransactionLinksGetXMLResponse
     */
    public function SettlementTransactionLinksGetXML(SettlementTransactionLinksGetXML $parameters)
    {
      return $this->__soapCall('SettlementTransactionLinksGetXML', array($parameters));
    }

    /**
     * Retrieve settlement information for one or more clients
     *
     * @param SettlementsGetADO $parameters
     * @return SettlementsGetADOResponse
     */
    public function SettlementsGetADO(SettlementsGetADO $parameters)
    {
      return $this->__soapCall('SettlementsGetADO', array($parameters));
    }

    /**
     * Retrieve settlement information for one or more clients
     *
     * @param SettlementsGetXML $parameters
     * @return SettlementsGetXMLResponse
     */
    public function SettlementsGetXML(SettlementsGetXML $parameters)
    {
      return $this->__soapCall('SettlementsGetXML', array($parameters));
    }

    /**
     * Insert or modify settlement information for one or more clients
     *
     * @param SettlementsSetADO $parameters
     * @return SettlementsSetADOResponse
     */
    public function SettlementsSetADO(SettlementsSetADO $parameters)
    {
      return $this->__soapCall('SettlementsSetADO', array($parameters));
    }

    /**
     * Insert or modify settlement information for one or more clients
     *
     * @param SettlementsSetXML $parameters
     * @return SettlementsSetXMLResponse
     */
    public function SettlementsSetXML(SettlementsSetXML $parameters)
    {
      return $this->__soapCall('SettlementsSetXML', array($parameters));
    }

    /**
     * Insert or modify transaction links for one or more client settlements
     *
     * @param SettlementTransactionLinksSetADO $parameters
     * @return SettlementTransactionLinksSetADOResponse
     */
    public function SettlementTransactionLinksSetADO(SettlementTransactionLinksSetADO $parameters)
    {
      return $this->__soapCall('SettlementTransactionLinksSetADO', array($parameters));
    }

    /**
     * Insert or modify transaction links for one or more client settlements
     *
     * @param SettlementTransactionLinksSetXML $parameters
     * @return SettlementTransactionLinksSetXMLResponse
     */
    public function SettlementTransactionLinksSetXML(SettlementTransactionLinksSetXML $parameters)
    {
      return $this->__soapCall('SettlementTransactionLinksSetXML', array($parameters));
    }

    /**
     * Retrieve charges for one or more clients
     *
     * @param ChargesGetADO $parameters
     * @return ChargesGetADOResponse
     */
    public function ChargesGetADO(ChargesGetADO $parameters)
    {
      return $this->__soapCall('ChargesGetADO', array($parameters));
    }

    /**
     * Retrieve charges for one or more clients
     *
     * @param ChargesGetXML $parameters
     * @return ChargesGetXMLResponse
     */
    public function ChargesGetXML(ChargesGetXML $parameters)
    {
      return $this->__soapCall('ChargesGetXML', array($parameters));
    }

    /**
     * Insert or modify charges for one or more clients
     *
     * @param ChargesSetADO $parameters
     * @return ChargesSetADOResponse
     */
    public function ChargesSetADO(ChargesSetADO $parameters)
    {
      return $this->__soapCall('ChargesSetADO', array($parameters));
    }

    /**
     * Insert or modify charges for one or more clients
     *
     * @param ChargesSetXML $parameters
     * @return ChargesSetXMLResponse
     */
    public function ChargesSetXML(ChargesSetXML $parameters)
    {
      return $this->__soapCall('ChargesSetXML', array($parameters));
    }

    /**
     * Insert or modify charge debit links for one or more clients
     *
     * @param ChargesDebitsLinkSetADO $parameters
     * @return ChargesDebitsLinkSetADOResponse
     */
    public function ChargesDebitsLinkSetADO(ChargesDebitsLinkSetADO $parameters)
    {
      return $this->__soapCall('ChargesDebitsLinkSetADO', array($parameters));
    }

    /**
     * Insert or modify charge debit links for one or more clients
     *
     * @param ChargesDebitsLinkSetXML $parameters
     * @return ChargesDebitsLinkSetXMLResponse
     */
    public function ChargesDebitsLinkSetXML(ChargesDebitsLinkSetXML $parameters)
    {
      return $this->__soapCall('ChargesDebitsLinkSetXML', array($parameters));
    }

    /**
     * Retrieve charges debit links for one or more clients
     *
     * @param ChargesDebitLinksGetADO $parameters
     * @return ChargesDebitLinksGetADOResponse
     */
    public function ChargesDebitLinksGetADO(ChargesDebitLinksGetADO $parameters)
    {
      return $this->__soapCall('ChargesDebitLinksGetADO', array($parameters));
    }

    /**
     * Retrieve charge debit links for one or more clients
     *
     * @param ChargesDebitLinksGetXML $parameters
     * @return ChargesDebitLinksGetXMLResponse
     */
    public function ChargesDebitLinksGetXML(ChargesDebitLinksGetXML $parameters)
    {
      return $this->__soapCall('ChargesDebitLinksGetXML', array($parameters));
    }

    /**
     * Retrieve split info fee information
     *
     * @param SplitFeeInfoGetXML $parameters
     * @return SplitFeeInfoGetXMLResponse
     */
    public function SplitFeeInfoGetXML(SplitFeeInfoGetXML $parameters)
    {
      return $this->__soapCall('SplitFeeInfoGetXML', array($parameters));
    }

    /**
     * Retrieve split info fee information
     *
     * @param SplitFeeInfoGetADO $parameters
     * @return SplitFeeInfoGetADOResponse
     */
    public function SplitFeeInfoGetADO(SplitFeeInfoGetADO $parameters)
    {
      return $this->__soapCall('SplitFeeInfoGetADO', array($parameters));
    }

    /**
     * Lists deposit information based on passed-in parameters, returning results as an ADO.NET DataSet.
     *
     * @param DepositsGetADO $parameters
     * @return DepositsGetADOResponse
     */
    public function DepositsGetADO(DepositsGetADO $parameters)
    {
      return $this->__soapCall('DepositsGetADO', array($parameters));
    }

    /**
     * Lists deposit information based on passed-in parameters, returning results as an XML document.
     *
     * @param DepositsGetXML $parameters
     * @return DepositsGetXMLResponse
     */
    public function DepositsGetXML(DepositsGetXML $parameters)
    {
      return $this->__soapCall('DepositsGetXML', array($parameters));
    }

    /**
     * Lists payee information based on passed-in Payee Id, Client ID DRC, Payee Name, Active Flag, Creation Date, Modified Date, Modified By and Page Size/Page Number. Return results as an ADO.NET DataSet.
     *
     * @param PayeesGetADO $parameters
     * @return PayeesGetADOResponse
     */
    public function PayeesGetADO(PayeesGetADO $parameters)
    {
      return $this->__soapCall('PayeesGetADO', array($parameters));
    }

    /**
     * Lists payee information based on passed-in parameters. Returns results as an XML document.
     *
     * @param PayeesGetXML $parameters
     * @return PayeesGetXMLResponse
     */
    public function PayeesGetXML(PayeesGetXML $parameters)
    {
      return $this->__soapCall('PayeesGetXML', array($parameters));
    }

    /**
     * Lists direct payee information based on passed-in parameters. Return results as an ADO.NET DataSet.
     *
     * @param PayeesDirectPayGetADO $parameters
     * @return PayeesDirectPayGetADOResponse
     */
    public function PayeesDirectPayGetADO(PayeesDirectPayGetADO $parameters)
    {
      return $this->__soapCall('PayeesDirectPayGetADO', array($parameters));
    }

    /**
     * Lists direct payee information based on passed-in parameters. Returns results as an XML document.
     *
     * @param PayeesDirectPayGetXML $parameters
     * @return PayeesDirectPayGetXMLResponse
     */
    public function PayeesDirectPayGetXML(PayeesDirectPayGetXML $parameters)
    {
      return $this->__soapCall('PayeesDirectPayGetXML', array($parameters));
    }

    /**
     * Lists summary payee information based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param PayeesListGetADO $parameters
     * @return PayeesListGetADOResponse
     */
    public function PayeesListGetADO(PayeesListGetADO $parameters)
    {
      return $this->__soapCall('PayeesListGetADO', array($parameters));
    }

    /**
     * Lists summary payee information based on passed-in parameters. Returns results as an XML Document.
     *
     * @param PayeesListGetXML $parameters
     * @return PayeesListGetXMLResponse
     */
    public function PayeesListGetXML(PayeesListGetXML $parameters)
    {
      return $this->__soapCall('PayeesListGetXML', array($parameters));
    }

    /**
     * Adds/Updates payee information based on passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param PayeesSetADO $parameters
     * @return PayeesSetADOResponse
     */
    public function PayeesSetADO(PayeesSetADO $parameters)
    {
      return $this->__soapCall('PayeesSetADO', array($parameters));
    }

    /**
     * Adds/Updates payee information based on passed-in XML document.  Returns results as an XML document.
     *
     * @param PayeesSetXML $parameters
     * @return PayeesSetXMLResponse
     */
    public function PayeesSetXML(PayeesSetXML $parameters)
    {
      return $this->__soapCall('PayeesSetXML', array($parameters));
    }

    /**
     * Generates a list of accounts assigned to a company. Returns results as an ADO.NET DataSet.
     *
     * @param AccountsGetADO $parameters
     * @return AccountsGetADOResponse
     */
    public function AccountsGetADO(AccountsGetADO $parameters)
    {
      return $this->__soapCall('AccountsGetADO', array($parameters));
    }

    /**
     * Generates a list of accounts assigned to a company. Returns results as an XML document.
     *
     * @param AccountsGetXML $parameters
     * @return AccountsGetXMLResponse
     */
    public function AccountsGetXML(AccountsGetXML $parameters)
    {
      return $this->__soapCall('AccountsGetXML', array($parameters));
    }

    /**
     * Generates a list of next accounts assigned to a company. Returns results as an ADO.NET DataSet.
     *
     * @param NextAccountGetADO $parameters
     * @return NextAccountGetADOResponse
     */
    public function NextAccountGetADO(NextAccountGetADO $parameters)
    {
      return $this->__soapCall('NextAccountGetADO', array($parameters));
    }

    /**
     * Generates a list of next accounts assigned to a company. Returns results as an XML document.
     *
     * @param NextAccountGetXML $parameters
     * @return NextAccountGetXMLResponse
     */
    public function NextAccountGetXML(NextAccountGetXML $parameters)
    {
      return $this->__soapCall('NextAccountGetXML', array($parameters));
    }

    /**
     * Lists client information based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param ClientsGetADO $parameters
     * @return ClientsGetADOResponse
     */
    public function ClientsGetADO(ClientsGetADO $parameters)
    {
      return $this->__soapCall('ClientsGetADO', array($parameters));
    }

    /**
     * Lists client information based on a passed-in parameters. Returns results as an XML document.
     *
     * @param ClientsGetXML $parameters
     * @return ClientsGetXMLResponse
     */
    public function ClientsGetXML(ClientsGetXML $parameters)
    {
      return $this->__soapCall('ClientsGetXML', array($parameters));
    }

    /**
     * Adds/Updates client information based on passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param ClientsSetADO $parameters
     * @return ClientsSetADOResponse
     */
    public function ClientsSetADO(ClientsSetADO $parameters)
    {
      return $this->__soapCall('ClientsSetADO', array($parameters));
    }

    /**
     * Adds/Updates client information based on passed-in XML document. Returns results as an XML document.
     *
     * @param ClientsSetXML $parameters
     * @return ClientsSetXMLResponse
     */
    public function ClientsSetXML(ClientsSetXML $parameters)
    {
      return $this->__soapCall('ClientsSetXML', array($parameters));
    }

    /**
     * Lists summary client information based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param ClientsListGetADO $parameters
     * @return ClientsListGetADOResponse
     */
    public function ClientsListGetADO(ClientsListGetADO $parameters)
    {
      return $this->__soapCall('ClientsListGetADO', array($parameters));
    }

    /**
     * Lists summary client information based on passed-in parameters. Returns results as an XML document.
     *
     * @param ClientsListGetXML $parameters
     * @return ClientsListGetXMLResponse
     */
    public function ClientsListGetXML(ClientsListGetXML $parameters)
    {
      return $this->__soapCall('ClientsListGetXML', array($parameters));
    }

    /**
     * Generates a list of policy groups that exist for a company. Returns results as an ADO.NET DataSet.
     *
     * @param PolicyGroupsGetADO $parameters
     * @return PolicyGroupsGetADOResponse
     */
    public function PolicyGroupsGetADO(PolicyGroupsGetADO $parameters)
    {
      return $this->__soapCall('PolicyGroupsGetADO', array($parameters));
    }

    /**
     * Generates a list of policy groups that exist for a company. Returns results as an XML document.
     *
     * @param PolicyGroupsGetXML $parameters
     * @return PolicyGroupsGetXMLResponse
     */
    public function PolicyGroupsGetXML(PolicyGroupsGetXML $parameters)
    {
      return $this->__soapCall('PolicyGroupsGetXML', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param DebitsSetADO $parameters
     * @return DebitsSetADOResponse
     */
    public function DebitsSetADO(DebitsSetADO $parameters)
    {
      return $this->__soapCall('DebitsSetADO', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet. Includes check for duplicate DRC_TRANSACTION_ID
     *
     * @param DebitsSet2ADO $parameters
     * @return DebitsSet2ADOResponse
     */
    public function DebitsSet2ADO(DebitsSet2ADO $parameters)
    {
      return $this->__soapCall('DebitsSet2ADO', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet. Includes check for duplicate DRC_TRANSACTION_ID and storing Custom fields
     *
     * @param DebitsSet3ADO $parameters
     * @return DebitsSet3ADOResponse
     */
    public function DebitsSet3ADO(DebitsSet3ADO $parameters)
    {
      return $this->__soapCall('DebitsSet3ADO', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in XML document.  Returns results as an XML document.
     *
     * @param DebitsSetXML $parameters
     * @return DebitsSetXMLResponse
     */
    public function DebitsSetXML(DebitsSetXML $parameters)
    {
      return $this->__soapCall('DebitsSetXML', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in XML document.  Returns results as an XML document.  Includes check for duplicate DRC_TRANSACTION_ID
     *
     * @param DebitsSet2XML $parameters
     * @return DebitsSet2XMLResponse
     */
    public function DebitsSet2XML(DebitsSet2XML $parameters)
    {
      return $this->__soapCall('DebitsSet2XML', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in XML document.  Returns results as an XML document.  Includes check for duplicate DRC_TRANSACTION_ID and storing Custom fields
     *
     * @param DebitsSet3XML $parameters
     * @return DebitsSet3XMLResponse
     */
    public function DebitsSet3XML(DebitsSet3XML $parameters)
    {
      return $this->__soapCall('DebitsSet3XML', array($parameters));
    }

    /**
     * Lists debit types and type descriptions available for a company based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param DebitInfoGetADO $parameters
     * @return DebitInfoGetADOResponse
     */
    public function DebitInfoGetADO(DebitInfoGetADO $parameters)
    {
      return $this->__soapCall('DebitInfoGetADO', array($parameters));
    }

    /**
     * Lists debit types and type descriptions available for a company based on passed-in parameters. Returns results as an XML Document.
     *
     * @param DebitsInfoGetXML $parameters
     * @return DebitsInfoGetXMLResponse
     */
    public function DebitsInfoGetXML(DebitsInfoGetXML $parameters)
    {
      return $this->__soapCall('DebitsInfoGetXML', array($parameters));
    }

    /**
     * Lists debit information based on the passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param DebitsGetADO $parameters
     * @return DebitsGetADOResponse
     */
    public function DebitsGetADO(DebitsGetADO $parameters)
    {
      return $this->__soapCall('DebitsGetADO', array($parameters));
    }

    /**
     * Lists debit information and custom fields based on the passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param DebitsGet2ADO $parameters
     * @return DebitsGet2ADOResponse
     */
    public function DebitsGet2ADO(DebitsGet2ADO $parameters)
    {
      return $this->__soapCall('DebitsGet2ADO', array($parameters));
    }

    /**
     * Lists debit information based on passed-in parameters. Returns results as an XML Document.
     *
     * @param DebitsGetXML $parameters
     * @return DebitsGetXMLResponse
     */
    public function DebitsGetXML(DebitsGetXML $parameters)
    {
      return $this->__soapCall('DebitsGetXML', array($parameters));
    }

    /**
     * Lists debit information based on passed-in parameters. Returns results as an XML Document.
     *
     * @param DebitsGet2XML $parameters
     * @return DebitsGet2XMLResponse
     */
    public function DebitsGet2XML(DebitsGet2XML $parameters)
    {
      return $this->__soapCall('DebitsGet2XML', array($parameters));
    }

    /**
     * Lists draft types and type descriptions available for a company based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param DraftInfoGetADO $parameters
     * @return DraftInfoGetADOResponse
     */
    public function DraftInfoGetADO(DraftInfoGetADO $parameters)
    {
      return $this->__soapCall('DraftInfoGetADO', array($parameters));
    }

    /**
     * Lists debit types and type descriptions available for a company based on passed-in parameters. Returns results as an XML document.
     *
     * @param DraftInfoGetXML $parameters
     * @return DraftInfoGetXMLResponse
     */
    public function DraftInfoGetXML(DraftInfoGetXML $parameters)
    {
      return $this->__soapCall('DraftInfoGetXML', array($parameters));
    }

    /**
     * Lists draft information based on passed-in parameters. Returns results as an XML Document.
     *
     * @param DraftsGetXML $parameters
     * @return DraftsGetXMLResponse
     */
    public function DraftsGetXML(DraftsGetXML $parameters)
    {
      return $this->__soapCall('DraftsGetXML', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param DraftsSetADO $parameters
     * @return DraftsSetADOResponse
     */
    public function DraftsSetADO(DraftsSetADO $parameters)
    {
      return $this->__soapCall('DraftsSetADO', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet. Includes check for duplicate DRC_TRANSACTION_ID
     *
     * @param DraftsSet2ADO $parameters
     * @return DraftsSet2ADOResponse
     */
    public function DraftsSet2ADO(DraftsSet2ADO $parameters)
    {
      return $this->__soapCall('DraftsSet2ADO', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in XML document. Returns results as an XML document.
     *
     * @param DraftsSetXML $parameters
     * @return DraftsSetXMLResponse
     */
    public function DraftsSetXML(DraftsSetXML $parameters)
    {
      return $this->__soapCall('DraftsSetXML', array($parameters));
    }

    /**
     * Adds/Updates debit information based on a passed-in XML document. Returns results as an XML document. Includes check for duplicate DRC_TRANSACTION_ID
     *
     * @param DraftsSet2XML $parameters
     * @return DraftsSet2XMLResponse
     */
    public function DraftsSet2XML(DraftsSet2XML $parameters)
    {
      return $this->__soapCall('DraftsSet2XML', array($parameters));
    }

    /**
     * Lists draft information based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param DraftsGetADO $parameters
     * @return DraftsGetADOResponse
     */
    public function DraftsGetADO(DraftsGetADO $parameters)
    {
      return $this->__soapCall('DraftsGetADO', array($parameters));
    }

    /**
     * Lists fee types and type descriptions available for a company based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param FeeInfoGetADO $parameters
     * @return FeeInfoGetADOResponse
     */
    public function FeeInfoGetADO(FeeInfoGetADO $parameters)
    {
      return $this->__soapCall('FeeInfoGetADO', array($parameters));
    }

    /**
     * Lists fee types and type descriptions available for a company based on passed-in parameters. Returns results as an XML document.
     *
     * @param FeeInfoGetXML $parameters
     * @return FeeInfoGetXMLResponse
     */
    public function FeeInfoGetXML(FeeInfoGetXML $parameters)
    {
      return $this->__soapCall('FeeInfoGetXML', array($parameters));
    }

    /**
     * Lists fee information based on a passed-in parameters. Returns results as an XML Document.
     *
     * @param FeesGetXML $parameters
     * @return FeesGetXMLResponse
     */
    public function FeesGetXML(FeesGetXML $parameters)
    {
      return $this->__soapCall('FeesGetXML', array($parameters));
    }

    /**
     * Adds/Updates fee information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param FeesSetADO $parameters
     * @return FeesSetADOResponse
     */
    public function FeesSetADO(FeesSetADO $parameters)
    {
      return $this->__soapCall('FeesSetADO', array($parameters));
    }

    /**
     * Adds/Updates fee information based on a passed-in XML document.  Returns results as an XML document.
     *
     * @param FeesSetXML $parameters
     * @return FeesSetXMLResponse
     */
    public function FeesSetXML(FeesSetXML $parameters)
    {
      return $this->__soapCall('FeesSetXML', array($parameters));
    }

    /**
     * Lists fee information based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param FeesGetADO $parameters
     * @return FeesGetADOResponse
     */
    public function FeesGetADO(FeesGetADO $parameters)
    {
      return $this->__soapCall('FeesGetADO', array($parameters));
    }

    /**
     * Lists transaction information one page at a time based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param TransactionsGetADO $parameters
     * @return TransactionsGetADOResponse
     */
    public function TransactionsGetADO(TransactionsGetADO $parameters)
    {
      return $this->__soapCall('TransactionsGetADO', array($parameters));
    }

    /**
     * Lists transaction information one page at a time based on passed-in parameters. Returns results as an XML document.
     *
     * @param TransactionsGetXML $parameters
     * @return TransactionsGetXMLResponse
     */
    public function TransactionsGetXML(TransactionsGetXML $parameters)
    {
      return $this->__soapCall('TransactionsGetXML', array($parameters));
    }

    /**
     * Set transaction status information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param TransactionStatusSetADO $parameters
     * @return TransactionStatusSetADOResponse
     */
    public function TransactionStatusSetADO(TransactionStatusSetADO $parameters)
    {
      return $this->__soapCall('TransactionStatusSetADO', array($parameters));
    }

    /**
     * Set transaction status information based on passed-in XML document. Returns results as an XML document.
     *
     * @param TransactionStatusSetXML $parameters
     * @return TransactionStatusSetXMLResponse
     */
    public function TransactionStatusSetXML(TransactionStatusSetXML $parameters)
    {
      return $this->__soapCall('TransactionStatusSetXML', array($parameters));
    }

    /**
     * Lists bank information based on passed-in Federal Reserve Routing Number. Returns results as an ADO.NET DataSet.
     *
     * @param BanksGetADO $parameters
     * @return BanksGetADOResponse
     */
    public function BanksGetADO(BanksGetADO $parameters)
    {
      return $this->__soapCall('BanksGetADO', array($parameters));
    }

    /**
     * Lists bank information based on passed-in Federal Reserve Routing Number. Returns results as an XML document.
     *
     * @param BanksGetXML $parameters
     * @return BanksGetXMLResponse
     */
    public function BanksGetXML(BanksGetXML $parameters)
    {
      return $this->__soapCall('BanksGetXML', array($parameters));
    }

    /**
     * Lists bank account types currently supported on the GCS system. Returns results as an ADO.NET DataSet.
     *
     * @param BankAccountTypesGetADO $parameters
     * @return BankAccountTypesGetADOResponse
     */
    public function BankAccountTypesGetADO(BankAccountTypesGetADO $parameters)
    {
      return $this->__soapCall('BankAccountTypesGetADO', array($parameters));
    }

    /**
     * Lists bank account types currently supported on the GCS system. Returns results as an XML document.
     *
     * @param BankAccountTypesGetXML $parameters
     * @return BankAccountTypesGetXMLResponse
     */
    public function BankAccountTypesGetXML(BankAccountTypesGetXML $parameters)
    {
      return $this->__soapCall('BankAccountTypesGetXML', array($parameters));
    }

    /**
     * Lists prior and upcoming bank holidays for the given year. Returns results as an ADO.NET DataSet.
     *
     * @param BankHolidaysGetADO $parameters
     * @return BankHolidaysGetADOResponse
     */
    public function BankHolidaysGetADO(BankHolidaysGetADO $parameters)
    {
      return $this->__soapCall('BankHolidaysGetADO', array($parameters));
    }

    /**
     * Lists prior and upcoming bank holidays for the given year. Returns results as an XML document.
     *
     * @param BankHolidaysGetXML $parameters
     * @return BankHolidaysGetXMLResponse
     */
    public function BankHolidaysGetXML(BankHolidaysGetXML $parameters)
    {
      return $this->__soapCall('BankHolidaysGetXML', array($parameters));
    }

    /**
     * Lists note information based on passed-in parameters. Returns results as an XML Document.
     *
     * @param NotesGetXML $parameters
     * @return NotesGetXMLResponse
     */
    public function NotesGetXML(NotesGetXML $parameters)
    {
      return $this->__soapCall('NotesGetXML', array($parameters));
    }

    /**
     * Adds client note based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param NotesSetADO $parameters
     * @return NotesSetADOResponse
     */
    public function NotesSetADO(NotesSetADO $parameters)
    {
      return $this->__soapCall('NotesSetADO', array($parameters));
    }

    /**
     * Adds client note based on a passed-in XML node. Returns results as an XML document.
     *
     * @param NotesSetXML $parameters
     * @return NotesSetXMLResponse
     */
    public function NotesSetXML(NotesSetXML $parameters)
    {
      return $this->__soapCall('NotesSetXML', array($parameters));
    }

    /**
     * Lists note information based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param NotesGetADO $parameters
     * @return NotesGetADOResponse
     */
    public function NotesGetADO(NotesGetADO $parameters)
    {
      return $this->__soapCall('NotesGetADO', array($parameters));
    }

    /**
     * Lists payment information based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentsGetADO $parameters
     * @return PaymentsGetADOResponse
     */
    public function PaymentsGetADO(PaymentsGetADO $parameters)
    {
      return $this->__soapCall('PaymentsGetADO', array($parameters));
    }

    /**
     * Lists payment information and custom fields based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentsGet2ADO $parameters
     * @return PaymentsGet2ADOResponse
     */
    public function PaymentsGet2ADO(PaymentsGet2ADO $parameters)
    {
      return $this->__soapCall('PaymentsGet2ADO', array($parameters));
    }

    /**
     * Lists payment information based on a passed-in parameters. Returns results as an XML Document.
     *
     * @param PaymentsGetXML $parameters
     * @return PaymentsGetXMLResponse
     */
    public function PaymentsGetXML(PaymentsGetXML $parameters)
    {
      return $this->__soapCall('PaymentsGetXML', array($parameters));
    }

    /**
     * Lists payment and custom fields information based on a passed-in parameters. Returns results as an XML Document.
     *
     * @param PaymentsGet2XML $parameters
     * @return PaymentsGet2XMLResponse
     */
    public function PaymentsGet2XML(PaymentsGet2XML $parameters)
    {
      return $this->__soapCall('PaymentsGet2XML', array($parameters));
    }

    /**
     * Lists payment information based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentsDirectPayGetADO $parameters
     * @return PaymentsDirectPayGetADOResponse
     */
    public function PaymentsDirectPayGetADO(PaymentsDirectPayGetADO $parameters)
    {
      return $this->__soapCall('PaymentsDirectPayGetADO', array($parameters));
    }

    /**
     * Lists payment information based on a passed-in parameters. Returns results as an XML Document.
     *
     * @param PaymentsDirectPayGetXML $parameters
     * @return PaymentsDirectPayGetXMLResponse
     */
    public function PaymentsDirectPayGetXML(PaymentsDirectPayGetXML $parameters)
    {
      return $this->__soapCall('PaymentsDirectPayGetXML', array($parameters));
    }

    /**
     * Adds/Updates payment information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentsSetADO $parameters
     * @return PaymentsSetADOResponse
     */
    public function PaymentsSetADO(PaymentsSetADO $parameters)
    {
      return $this->__soapCall('PaymentsSetADO', array($parameters));
    }

    /**
     * Adds/Updates payment information and custom fields based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentsSet2ADO $parameters
     * @return PaymentsSet2ADOResponse
     */
    public function PaymentsSet2ADO(PaymentsSet2ADO $parameters)
    {
      return $this->__soapCall('PaymentsSet2ADO', array($parameters));
    }

    /**
     * Adds/Updates payment information based on a passed-in XML document.  Returns results as an XML document.
     *
     * @param PaymentsSetXML $parameters
     * @return PaymentsSetXMLResponse
     */
    public function PaymentsSetXML(PaymentsSetXML $parameters)
    {
      return $this->__soapCall('PaymentsSetXML', array($parameters));
    }

    /**
     * Adds/Updates payment information and custom fields based on a passed-in XML document.  Returns results as an XML document.
     *
     * @param PaymentsSet2XML $parameters
     * @return PaymentsSet2XMLResponse
     */
    public function PaymentsSet2XML(PaymentsSet2XML $parameters)
    {
      return $this->__soapCall('PaymentsSet2XML', array($parameters));
    }

    /**
     * Lists payment code descriptions based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param PaymentInfoGetADO $parameters
     * @return PaymentInfoGetADOResponse
     */
    public function PaymentInfoGetADO(PaymentInfoGetADO $parameters)
    {
      return $this->__soapCall('PaymentInfoGetADO', array($parameters));
    }

    /**
     * Lists payment code descriptions based on passed-in parameters. Returns results as an XML document.
     *
     * @param PaymentInfoGetXML $parameters
     * @return PaymentInfoGetXMLResponse
     */
    public function PaymentInfoGetXML(PaymentInfoGetXML $parameters)
    {
      return $this->__soapCall('PaymentInfoGetXML', array($parameters));
    }

    /**
     * Lists NSF return codes and descriptions. Returns results as an ADO.NET DataSet.
     *
     * @param NsfStatusGetADO $parameters
     * @return NsfStatusGetADOResponse
     */
    public function NsfStatusGetADO(NsfStatusGetADO $parameters)
    {
      return $this->__soapCall('NsfStatusGetADO', array($parameters));
    }

    /**
     * Lists NSF return codes and descriptions. Returns results as an XML document.
     *
     * @param NsfStatusGetXML $parameters
     * @return NsfStatusGetXMLResponse
     */
    public function NsfStatusGetXML(NsfStatusGetXML $parameters)
    {
      return $this->__soapCall('NsfStatusGetXML', array($parameters));
    }

    /**
     * Lists state and country information. Returns results as an ADO.NET DataSet.
     *
     * @param StatesGetADO $parameters
     * @return StatesGetADOResponse
     */
    public function StatesGetADO(StatesGetADO $parameters)
    {
      return $this->__soapCall('StatesGetADO', array($parameters));
    }

    /**
     * Lists state and country information. Returns results as an XML document.
     *
     * @param StatesGetXML $parameters
     * @return StatesGetXMLResponse
     */
    public function StatesGetXML(StatesGetXML $parameters)
    {
      return $this->__soapCall('StatesGetXML', array($parameters));
    }

    /**
     * Generates a list of accounts assigned to a company. Returns results as an ADO.NET DataSet.
     *
     * @param BalanceGetADO $parameters
     * @return BalanceGetADOResponse
     */
    public function BalanceGetADO(BalanceGetADO $parameters)
    {
      return $this->__soapCall('BalanceGetADO', array($parameters));
    }

    /**
     * Generates a list of accounts assigned to a company. Returns results as an XML document.
     *
     * @param BalanceGetXML $parameters
     * @return BalanceGetXMLResponse
     */
    public function BalanceGetXML(BalanceGetXML $parameters)
    {
      return $this->__soapCall('BalanceGetXML', array($parameters));
    }

    /**
     * Generates a list of account balances for all active clients for a company that have changed since date submitted. Returns results as an ADO.NET DataSet.
     *
     * @param UpdatedBalancesGetADO $parameters
     * @return UpdatedBalancesGetADOResponse
     */
    public function UpdatedBalancesGetADO(UpdatedBalancesGetADO $parameters)
    {
      return $this->__soapCall('UpdatedBalancesGetADO', array($parameters));
    }

    /**
     * Generates a list of account balances for all active clients for a company that have changed since date submitted. Returns results as an ADO.NET DataSet.
     *
     * @param UpdatedBalancesGet2ADO $parameters
     * @return UpdatedBalancesGet2ADOResponse
     */
    public function UpdatedBalancesGet2ADO(UpdatedBalancesGet2ADO $parameters)
    {
      return $this->__soapCall('UpdatedBalancesGet2ADO', array($parameters));
    }

    /**
     * Generates a list of account balances for all active clients for a company that have changed since date submitted. Returns results as an XML document.
     *
     * @param UpdatedBalancesGetXML $parameters
     * @return UpdatedBalancesGetXMLResponse
     */
    public function UpdatedBalancesGetXML(UpdatedBalancesGetXML $parameters)
    {
      return $this->__soapCall('UpdatedBalancesGetXML', array($parameters));
    }

    /**
     * Generates a list of account balances for all active clients for a company that have changed since date submitted. Returns results as an XML document.
     *
     * @param UpdatedBalancesGet2XML $parameters
     * @return UpdatedBalancesGet2XMLResponse
     */
    public function UpdatedBalancesGet2XML(UpdatedBalancesGet2XML $parameters)
    {
      return $this->__soapCall('UpdatedBalancesGet2XML', array($parameters));
    }

    /**
     * Validates client information based on a passed-in ADO.NET DataSet. Returns results as an ADO.NET DataSet.
     *
     * @param ClientsPreValidateADO $parameters
     * @return ClientsPreValidateADOResponse
     */
    public function ClientsPreValidateADO(ClientsPreValidateADO $parameters)
    {
      return $this->__soapCall('ClientsPreValidateADO', array($parameters));
    }

    /**
     * Validates client information based on a passed-in XML document.  Returns results as an XML document.
     *
     * @param ClientsPreValidateXML $parameters
     * @return ClientsPreValidateXMLResponse
     */
    public function ClientsPreValidateXML(ClientsPreValidateXML $parameters)
    {
      return $this->__soapCall('ClientsPreValidateXML', array($parameters));
    }

    /**
     * Generates a client statement. Returns as a base64 encoded byte[].
     *
     * @param ClientStatementGet $parameters
     * @return ClientStatementGetResponse
     */
    public function ClientStatementGet(ClientStatementGet $parameters)
    {
      return $this->__soapCall('ClientStatementGet', array($parameters));
    }

    /**
     * Generates a list of clients who have failed validation, along with any requested documentation for use in manually verifying them, as an ADO.NET DataSet.
     *
     * @param ClientsFailedValidationGetADO $parameters
     * @return ClientsFailedValidationGetADOResponse
     */
    public function ClientsFailedValidationGetADO(ClientsFailedValidationGetADO $parameters)
    {
      return $this->__soapCall('ClientsFailedValidationGetADO', array($parameters));
    }

    /**
     * Generates a list of clients who have failed validation, along with any requested documentation for use in manually verifying them, as an XML document
     *
     * @param ClientsFailedValidationGetXML $parameters
     * @return ClientsFailedValidationGetXMLResponse
     */
    public function ClientsFailedValidationGetXML(ClientsFailedValidationGetXML $parameters)
    {
      return $this->__soapCall('ClientsFailedValidationGetXML', array($parameters));
    }

    /**
     * Generates a list of BAV clients requested by companies, as an XML document
     *
     * @param GetBavRecordsForCompanyXML $parameters
     * @return GetBavRecordsForCompanyXMLResponse
     */
    public function GetBavRecordsForCompanyXML(GetBavRecordsForCompanyXML $parameters)
    {
      return $this->__soapCall('GetBavRecordsForCompanyXML', array($parameters));
    }

    /**
     * Generates a list of BAV clients requested by companies, as an XML document
     *
     * @param GetBavRecordsForCompanyWithReturnCodesXML $parameters
     * @return GetBavRecordsForCompanyWithReturnCodesXMLResponse
     */
    public function GetBavRecordsForCompanyWithReturnCodesXML(GetBavRecordsForCompanyWithReturnCodesXML $parameters)
    {
      return $this->__soapCall('GetBavRecordsForCompanyWithReturnCodesXML', array($parameters));
    }

    /**
     * Generates a list of BAV clients requested by companies, as an ADO.NET DataSet.
     *
     * @param GetBavRecordsForCompanyADO $parameters
     * @return GetBavRecordsForCompanyADOResponse
     */
    public function GetBavRecordsForCompanyADO(GetBavRecordsForCompanyADO $parameters)
    {
      return $this->__soapCall('GetBavRecordsForCompanyADO', array($parameters));
    }

    /**
     * Generates a list of BAV clients with return codes requested by companies, as an ADO.NET DataSet.
     *
     * @param GetBavRecordsForCompanyWithReturnCodesADO $parameters
     * @return GetBavRecordsForCompanyWithReturnCodesADOResponse
     */
    public function GetBavRecordsForCompanyWithReturnCodesADO(GetBavRecordsForCompanyWithReturnCodesADO $parameters)
    {
      return $this->__soapCall('GetBavRecordsForCompanyWithReturnCodesADO', array($parameters));
    }

    /**
     * Returns a Check Image PDF for a given Payment ID.
     *
     * @param CheckImageGet $parameters
     * @return CheckImageGetResponse
     */
    public function CheckImageGet(CheckImageGet $parameters)
    {
      return $this->__soapCall('CheckImageGet', array($parameters));
    }

    /**
     * Returns an array of Check Image PDFs for a given Account.
     *
     * @param CheckImagesGet $parameters
     * @return CheckImagesGetResponse
     */
    public function CheckImagesGet(CheckImagesGet $parameters)
    {
      return $this->__soapCall('CheckImagesGet', array($parameters));
    }

    /**
     * Generates a list of client documents requested by filter criteria, as an ADO.NET DataSet.
     *
     * @param DocumentListGetADO $parameters
     * @return DocumentListGetADOResponse
     */
    public function DocumentListGetADO(DocumentListGetADO $parameters)
    {
      return $this->__soapCall('DocumentListGetADO', array($parameters));
    }

    /**
     * Generates a list of client documents requested by filter criteria, as an XML document.
     *
     * @param DocumentListGetXML $parameters
     * @return DocumentListGetXMLResponse
     */
    public function DocumentListGetXML(DocumentListGetXML $parameters)
    {
      return $this->__soapCall('DocumentListGetXML', array($parameters));
    }

    /**
     * Uploads a client document
     *
     * @param DocumentSetADO $parameters
     * @return DocumentSetADOResponse
     */
    public function DocumentSetADO(DocumentSetADO $parameters)
    {
      return $this->__soapCall('DocumentSetADO', array($parameters));
    }

    /**
     * Uploads a client document
     *
     * @param DocumentSetXML $parameters
     * @return DocumentSetXMLResponse
     */
    public function DocumentSetXML(DocumentSetXML $parameters)
    {
      return $this->__soapCall('DocumentSetXML', array($parameters));
    }

    /**
     * Generates a list of client document types as an ADO.NET DataSet.
     *
     * @param DocumentTypesGetADO $parameters
     * @return DocumentTypesGetADOResponse
     */
    public function DocumentTypesGetADO(DocumentTypesGetADO $parameters)
    {
      return $this->__soapCall('DocumentTypesGetADO', array($parameters));
    }

    /**
     * Generates a list of client document types as an XML Document.
     *
     * @param DocumentTypesGetXML $parameters
     * @return DocumentTypesGetXMLResponse
     */
    public function DocumentTypesGetXML(DocumentTypesGetXML $parameters)
    {
      return $this->__soapCall('DocumentTypesGetXML', array($parameters));
    }

    /**
     * Lists client information with VAN info based on a passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param ClientsGet2ADO $parameters
     * @return ClientsGet2ADOResponse
     */
    public function ClientsGet2ADO(ClientsGet2ADO $parameters)
    {
      return $this->__soapCall('ClientsGet2ADO', array($parameters));
    }

    /**
     * Lists client information with VAN info based on a passed-in parameters. Returns results as an XML document.
     *
     * @param ClientsGet2XML $parameters
     * @return ClientsGet2XMLResponse
     */
    public function ClientsGet2XML(ClientsGet2XML $parameters)
    {
      return $this->__soapCall('ClientsGet2XML', array($parameters));
    }

    /**
     * Returns Virtual Account Number info based on passed-in parameters. Returns results as an ADO.NET DataSet.
     *
     * @param VirtualAccountNumberGetADO $parameters
     * @return VirtualAccountNumberGetADOResponse
     */
    public function VirtualAccountNumberGetADO(VirtualAccountNumberGetADO $parameters)
    {
      return $this->__soapCall('VirtualAccountNumberGetADO', array($parameters));
    }

    /**
     * Returns Virtual Account Number info based on passed-in parameters. Returns results as an XML Document.
     *
     * @param VirtualAccountNumberGetXML $parameters
     * @return VirtualAccountNumberGetXMLResponse
     */
    public function VirtualAccountNumberGetXML(VirtualAccountNumberGetXML $parameters)
    {
      return $this->__soapCall('VirtualAccountNumberGetXML', array($parameters));
    }

    /**
     * Returns a boolean signifying if provided Payee info can be sent via RPPS or not.
     *
     * @param IsValidPayeeForRpps $parameters
     * @return IsValidPayeeForRppsResponse
     */
    public function IsValidPayeeForRpps(IsValidPayeeForRpps $parameters)
    {
      return $this->__soapCall('IsValidPayeeForRpps', array($parameters));
    }

    /**
     * Returns payment IDs and whether a check image is available for each payment.
     *
     * @param CheckImagesIndicatorGetADO $parameters
     * @return CheckImagesIndicatorGetADOResponse
     */
    public function CheckImagesIndicatorGetADO(CheckImagesIndicatorGetADO $parameters)
    {
      return $this->__soapCall('CheckImagesIndicatorGetADO', array($parameters));
    }

    /**
     * Returns payment IDs and whether a check image is available for each payment.
     *
     * @param CheckImagesIndicatorGetXML $parameters
     * @return CheckImagesIndicatorGetXMLResponse
     */
    public function CheckImagesIndicatorGetXML(CheckImagesIndicatorGetXML $parameters)
    {
      return $this->__soapCall('CheckImagesIndicatorGetXML', array($parameters));
    }

    /**
     * Returns next active phone pay exceptions which have not been acknowledged.
     *
     * @param PhonePayNextActiveExceptionsADO $parameters
     * @return PhonePayNextActiveExceptionsADOResponse
     */
    public function PhonePayNextActiveExceptionsADO(PhonePayNextActiveExceptionsADO $parameters)
    {
      return $this->__soapCall('PhonePayNextActiveExceptionsADO', array($parameters));
    }

    /**
     * Returns next active phone pay exceptions which have not been acknowledged.
     *
     * @param PhonePayNextActiveExceptionsXML $parameters
     * @return PhonePayNextActiveExceptionsXMLResponse
     */
    public function PhonePayNextActiveExceptionsXML(PhonePayNextActiveExceptionsXML $parameters)
    {
      return $this->__soapCall('PhonePayNextActiveExceptionsXML', array($parameters));
    }

    /**
     * Acknowledges a set of phone pay exceptions.
     *
     * @param PhonePayAckActiveExceptionsADO $parameters
     * @return PhonePayAckActiveExceptionsADOResponse
     */
    public function PhonePayAckActiveExceptionsADO(PhonePayAckActiveExceptionsADO $parameters)
    {
      return $this->__soapCall('PhonePayAckActiveExceptionsADO', array($parameters));
    }

    /**
     * Acknowledges a set of phone pay exceptions.
     *
     * @param PhonePayAckActiveExceptionsXML $parameters
     * @return PhonePayAckActiveExceptionsXMLResponse
     */
    public function PhonePayAckActiveExceptionsXML(PhonePayAckActiveExceptionsXML $parameters)
    {
      return $this->__soapCall('PhonePayAckActiveExceptionsXML', array($parameters));
    }

    /**
     * Returns either a check or ACH image for the passed in exception_id.
     *
     * @param PhonePayImageGetADO $parameters
     * @return PhonePayImageGetADOResponse
     */
    public function PhonePayImageGetADO(PhonePayImageGetADO $parameters)
    {
      return $this->__soapCall('PhonePayImageGetADO', array($parameters));
    }

    /**
     * Returns either a check or ACH image for the passed in exception_id.
     *
     * @param PhonePayImageGetXML $parameters
     * @return PhonePayImageGetXMLResponse
     */
    public function PhonePayImageGetXML(PhonePayImageGetXML $parameters)
    {
      return $this->__soapCall('PhonePayImageGetXML', array($parameters));
    }

    /**
     * Returns a set of active phone pay exception types.
     *
     * @param PhonePayExceptionTypesGetADO $parameters
     * @return PhonePayExceptionTypesGetADOResponse
     */
    public function PhonePayExceptionTypesGetADO(PhonePayExceptionTypesGetADO $parameters)
    {
      return $this->__soapCall('PhonePayExceptionTypesGetADO', array($parameters));
    }

    /**
     * Returns a set of active phone pay exception types.
     *
     * @param PhonePayExceptionTypesGetXML $parameters
     * @return PhonePayExceptionTypesGetXMLResponse
     */
    public function PhonePayExceptionTypesGetXML(PhonePayExceptionTypesGetXML $parameters)
    {
      return $this->__soapCall('PhonePayExceptionTypesGetXML', array($parameters));
    }

    /**
     * Returns a set of active phone pay response types.
     *
     * @param PhonePayResponseTypesGetADO $parameters
     * @return PhonePayResponseTypesGetADOResponse
     */
    public function PhonePayResponseTypesGetADO(PhonePayResponseTypesGetADO $parameters)
    {
      return $this->__soapCall('PhonePayResponseTypesGetADO', array($parameters));
    }

    /**
     * Returns a set of active phone pay response types.
     *
     * @param PhonePayResponseTypesGetXML $parameters
     * @return PhonePayResponseTypesGetXMLResponse
     */
    public function PhonePayResponseTypesGetXML(PhonePayResponseTypesGetXML $parameters)
    {
      return $this->__soapCall('PhonePayResponseTypesGetXML', array($parameters));
    }

    /**
     * Resets any acknowledged exceptions which do not have a response_type associated with them.
     *
     * @param PhonePayResetExceptionAcknowledgeADO $parameters
     * @return PhonePayResetExceptionAcknowledgeADOResponse
     */
    public function PhonePayResetExceptionAcknowledgeADO(PhonePayResetExceptionAcknowledgeADO $parameters)
    {
      return $this->__soapCall('PhonePayResetExceptionAcknowledgeADO', array($parameters));
    }

    /**
     * Resets any acknowledged exceptions which do not have a response_type associated with them.
     *
     * @param PhonePayResetExceptionAcknowledgeXML $parameters
     * @return PhonePayResetExceptionAcknowledgeXMLResponse
     */
    public function PhonePayResetExceptionAcknowledgeXML(PhonePayResetExceptionAcknowledgeXML $parameters)
    {
      return $this->__soapCall('PhonePayResetExceptionAcknowledgeXML', array($parameters));
    }

    /**
     * Saves responses for a set of exceptions.
     *
     * @param PhonePayResponseSetADO $parameters
     * @return PhonePayResponseSetADOResponse
     */
    public function PhonePayResponseSetADO(PhonePayResponseSetADO $parameters)
    {
      return $this->__soapCall('PhonePayResponseSetADO', array($parameters));
    }

    /**
     * Saves responses for a set of exceptions.
     *
     * @param PhonePayResponseSetXML $parameters
     * @return PhonePayResponseSetXMLResponse
     */
    public function PhonePayResponseSetXML(PhonePayResponseSetXML $parameters)
    {
      return $this->__soapCall('PhonePayResponseSetXML', array($parameters));
    }

    /**
     * Returns the status of a given exception_id.
     *
     * @param PhonePayExceptionStatusGetADO $parameters
     * @return PhonePayExceptionStatusGetADOResponse
     */
    public function PhonePayExceptionStatusGetADO(PhonePayExceptionStatusGetADO $parameters)
    {
      return $this->__soapCall('PhonePayExceptionStatusGetADO', array($parameters));
    }

    /**
     * Returns the status of a given exception_id.
     *
     * @param PhonePayExceptionStatusGetXML $parameters
     * @return PhonePayExceptionStatusGetXMLResponse
     */
    public function PhonePayExceptionStatusGetXML(PhonePayExceptionStatusGetXML $parameters)
    {
      return $this->__soapCall('PhonePayExceptionStatusGetXML', array($parameters));
    }

    /**
     * Returns the next set of unacknowledged resolved exceptions.
     *
     * @param PhonePayNextResolvedExceptionsADO $parameters
     * @return PhonePayNextResolvedExceptionsADOResponse
     */
    public function PhonePayNextResolvedExceptionsADO(PhonePayNextResolvedExceptionsADO $parameters)
    {
      return $this->__soapCall('PhonePayNextResolvedExceptionsADO', array($parameters));
    }

    /**
     * Returns the next set of unacknowledged resolved exceptions.
     *
     * @param PhonePayNextResolvedExceptionsXML $parameters
     * @return PhonePayNextResolvedExceptionsXMLResponse
     */
    public function PhonePayNextResolvedExceptionsXML(PhonePayNextResolvedExceptionsXML $parameters)
    {
      return $this->__soapCall('PhonePayNextResolvedExceptionsXML', array($parameters));
    }

}
