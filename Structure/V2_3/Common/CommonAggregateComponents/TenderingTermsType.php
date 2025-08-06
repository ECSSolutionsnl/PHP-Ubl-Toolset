<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderingTermsType
 *
 * ABIE
 *  Tendering Terms. Details
 *  A class to describe tendering terms for a tendering process.
 *  Tendering Terms
 * XSD Type: TenderingTermsType
 */
class TenderingTermsType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode
     */
    private $awardingMethodTypeCode = null;

    /**
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceEvaluationCode $priceEvaluationCode
     */
    private $priceEvaluationCode = null;

    /**
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumVariantQuantity $maximumVariantQuantity
     */
    private $maximumVariantQuantity = null;

    /**
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $variantConstraintIndicator
     */
    private $variantConstraintIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AcceptedVariantsDescription[] $acceptedVariantsDescription
     */
    private $acceptedVariantsDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Variant Constraint. Code
     *  A code signifying the modalities for a tenderer to submit variants of tenders.
     *  0..1
     *  Tendering Terms
     *  Variant Constraint
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantConstraintCode $variantConstraintCode
     */
    private $variantConstraintCode = null;

    /**
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     */
    private $priceRevisionFormulaDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgramCode $fundingProgramCode
     */
    private $fundingProgramCode = null;

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgram[] $fundingProgram
     */
    private $fundingProgram = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount
     */
    private $maximumAdvertisementAmount = null;

    /**
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentFrequencyCode $paymentFrequencyCode
     */
    private $paymentFrequencyCode = null;

    /**
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     */
    private $economicOperatorRegistryURI = null;

    /**
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $requiredCurriculaIndicator
     */
    private $requiredCurriculaIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Required Curricula. Code
     *  A code signifying the conditions applying for tenderers to provide a curriculum vitae.
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredCurriculaCode $requiredCurriculaCode
     */
    private $requiredCurriculaCode = null;

    /**
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $otherConditionsIndicator
     */
    private $otherConditionsIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Recurring_ Procurement. Indicator
     *  Indicates whether the procurement is recurring (true) or not (false).
     *  0..1
     *  Tendering Terms
     *  Recurring
     *  Procurement
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $recurringProcurementIndicator
     */
    private $recurringProcurementIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RecurringProcurementDescription[] $recurringProcurementDescription
     */
    private $recurringProcurementDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedTimingFurtherPublication[] $estimatedTimingFurtherPublication
     */
    private $estimatedTimingFurtherPublication = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalConditions[] $additionalConditions
     */
    private $additionalConditions = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestSecurityClearanceDate
     */
    private $latestSecurityClearanceDate = null;

    /**
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentationFeeAmount $documentationFeeAmount
     */
    private $documentationFeeAmount = null;

    /**
     * BBIE
     *  Tendering Terms. Multiple Tenders. Code
     *  A code signifying whether a tenderer is allowed to submit multiple tenders.
     *  0..1
     *  Tendering Terms
     *  Multiple Tenders
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MultipleTendersCode $multipleTendersCode
     */
    private $multipleTendersCode = null;

    /**
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PenaltyClause[] $penaltyClause
     */
    private $penaltyClause = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     */
    private $requiredFinancialGuarantee = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementLegislationDocumentReference[] $procurementLegislationDocumentReference
     */
    private $procurementLegislationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FiscalLegislationDocumentReference[] $fiscalLegislationDocumentReference
     */
    private $fiscalLegislationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EnvironmentalLegislationDocumentReference[] $environmentalLegislationDocumentReference
     */
    private $environmentalLegislationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmploymentLegislationDocumentReference[] $employmentLegislationDocumentReference
     */
    private $employmentLegislationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     */
    private $contractualDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTendersDocumentReference[] $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     */
    private $tendererQualificationRequest = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     */
    private $allowedSubcontractTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderPreparation[] $tenderPreparation
     */
    private $tenderPreparation = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     */
    private $contractExecutionRequirement = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingTerms $awardingTerms
     */
    private $awardingTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty
     */
    private $additionalInformationParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentProviderParty $documentProviderParty
     */
    private $documentProviderParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty
     */
    private $tenderRecipientParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty
     */
    private $contractResponsibleParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     */
    private $tenderEvaluationParty = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Qualification Request Recipient_ Party. Party
     *  A party in the contracting authority responsible for receiving qualification requests.
     *  0..1
     *  Tendering Terms
     *  Qualification Request Recipient
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualificationRequestRecipientParty $qualificationRequestRecipientParty
     */
    private $qualificationRequestRecipientParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     */
    private $tenderValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     */
    private $contractAcceptancePeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppealTerms $appealTerms
     */
    private $appealTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BudgetAccountLine[] $budgetAccountLine
     */
    private $budgetAccountLine = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     */
    private $replacedNoticeDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Lot Distribution
     *  List of specific ways to tender to the lots of the procurement project.
     *  0..1
     *  Tendering Terms
     *  Lot Distribution
     *  Lot Distribution
     *  Lot Distribution
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotDistribution $lotDistribution
     */
    private $lotDistribution = null;

    /**
     * ASBIE
     *  Tendering Terms. Post Award Process
     *  Information about the post-award process.
     *  0..1
     *  Tendering Terms
     *  Post Award Process
     *  Post Award Process
     *  Post Award Process
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostAwardProcess $postAwardProcess
     */
    private $postAwardProcess = null;

    /**
     * ASBIE
     *  Tendering Terms. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorShortList $economicOperatorShortList
     */
    private $economicOperatorShortList = null;

    /**
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityClearanceTerm[] $securityClearanceTerm
     */
    private $securityClearanceTerm = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for extensions foreign to the document.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(?array $uBLExtensions = null)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AwardingMethodTypeCode
     */
    public function getAwardingMethodTypeCode()
    {
        return $this->awardingMethodTypeCode;
    }

    /**
     * Sets a new awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode
     * @return self
     */
    public function setAwardingMethodTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode = null)
    {
        $this->awardingMethodTypeCode = $awardingMethodTypeCode;
        return $this;
    }

    /**
     * Gets as priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceEvaluationCode
     */
    public function getPriceEvaluationCode()
    {
        return $this->priceEvaluationCode;
    }

    /**
     * Sets a new priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceEvaluationCode $priceEvaluationCode
     * @return self
     */
    public function setPriceEvaluationCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceEvaluationCode $priceEvaluationCode = null)
    {
        $this->priceEvaluationCode = $priceEvaluationCode;
        return $this;
    }

    /**
     * Gets as maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumVariantQuantity
     */
    public function getMaximumVariantQuantity()
    {
        return $this->maximumVariantQuantity;
    }

    /**
     * Sets a new maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumVariantQuantity $maximumVariantQuantity
     * @return self
     */
    public function setMaximumVariantQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumVariantQuantity $maximumVariantQuantity = null)
    {
        $this->maximumVariantQuantity = $maximumVariantQuantity;
        return $this;
    }

    /**
     * Gets as variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getVariantConstraintIndicator()
    {
        return $this->variantConstraintIndicator;
    }

    /**
     * Sets a new variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $variantConstraintIndicator
     * @return self
     */
    public function setVariantConstraintIndicator($variantConstraintIndicator)
    {
        $this->variantConstraintIndicator = $variantConstraintIndicator;
        return $this;
    }

    /**
     * Adds as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AcceptedVariantsDescription $acceptedVariantsDescription
     */
    public function addToAcceptedVariantsDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AcceptedVariantsDescription $acceptedVariantsDescription)
    {
        $this->acceptedVariantsDescription[] = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * isset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedVariantsDescription($index)
    {
        return isset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * unset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedVariantsDescription($index)
    {
        unset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * Gets as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AcceptedVariantsDescription[]
     */
    public function getAcceptedVariantsDescription()
    {
        return $this->acceptedVariantsDescription;
    }

    /**
     * Sets a new acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AcceptedVariantsDescription[] $acceptedVariantsDescription
     * @return self
     */
    public function setAcceptedVariantsDescription(?array $acceptedVariantsDescription = null)
    {
        $this->acceptedVariantsDescription = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * Gets as variantConstraintCode
     *
     * BBIE
     *  Tendering Terms. Variant Constraint. Code
     *  A code signifying the modalities for a tenderer to submit variants of tenders.
     *  0..1
     *  Tendering Terms
     *  Variant Constraint
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantConstraintCode
     */
    public function getVariantConstraintCode()
    {
        return $this->variantConstraintCode;
    }

    /**
     * Sets a new variantConstraintCode
     *
     * BBIE
     *  Tendering Terms. Variant Constraint. Code
     *  A code signifying the modalities for a tenderer to submit variants of tenders.
     *  0..1
     *  Tendering Terms
     *  Variant Constraint
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantConstraintCode $variantConstraintCode
     * @return self
     */
    public function setVariantConstraintCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantConstraintCode $variantConstraintCode = null)
    {
        $this->variantConstraintCode = $variantConstraintCode;
        return $this;
    }

    /**
     * Adds as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceRevisionFormulaDescription $priceRevisionFormulaDescription
     */
    public function addToPriceRevisionFormulaDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceRevisionFormulaDescription $priceRevisionFormulaDescription)
    {
        $this->priceRevisionFormulaDescription[] = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * isset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceRevisionFormulaDescription($index)
    {
        return isset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * unset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceRevisionFormulaDescription($index)
    {
        unset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * Gets as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceRevisionFormulaDescription[]
     */
    public function getPriceRevisionFormulaDescription()
    {
        return $this->priceRevisionFormulaDescription;
    }

    /**
     * Sets a new priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     * @return self
     */
    public function setPriceRevisionFormulaDescription(?array $priceRevisionFormulaDescription = null)
    {
        $this->priceRevisionFormulaDescription = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * Gets as fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgramCode
     */
    public function getFundingProgramCode()
    {
        return $this->fundingProgramCode;
    }

    /**
     * Sets a new fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgramCode $fundingProgramCode
     * @return self
     */
    public function setFundingProgramCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgramCode $fundingProgramCode = null)
    {
        $this->fundingProgramCode = $fundingProgramCode;
        return $this;
    }

    /**
     * Adds as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgram $fundingProgram
     */
    public function addToFundingProgram(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgram $fundingProgram)
    {
        $this->fundingProgram[] = $fundingProgram;
        return $this;
    }

    /**
     * isset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFundingProgram($index)
    {
        return isset($this->fundingProgram[$index]);
    }

    /**
     * unset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFundingProgram($index)
    {
        unset($this->fundingProgram[$index]);
    }

    /**
     * Gets as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgram[]
     */
    public function getFundingProgram()
    {
        return $this->fundingProgram;
    }

    /**
     * Sets a new fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FundingProgram[] $fundingProgram
     * @return self
     */
    public function setFundingProgram(?array $fundingProgram = null)
    {
        $this->fundingProgram = $fundingProgram;
        return $this;
    }

    /**
     * Gets as maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAdvertisementAmount
     */
    public function getMaximumAdvertisementAmount()
    {
        return $this->maximumAdvertisementAmount;
    }

    /**
     * Sets a new maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount
     * @return self
     */
    public function setMaximumAdvertisementAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount = null)
    {
        $this->maximumAdvertisementAmount = $maximumAdvertisementAmount;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentFrequencyCode
     */
    public function getPaymentFrequencyCode()
    {
        return $this->paymentFrequencyCode;
    }

    /**
     * Sets a new paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentFrequencyCode $paymentFrequencyCode
     * @return self
     */
    public function setPaymentFrequencyCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentFrequencyCode $paymentFrequencyCode = null)
    {
        $this->paymentFrequencyCode = $paymentFrequencyCode;
        return $this;
    }

    /**
     * Gets as economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EconomicOperatorRegistryURI
     */
    public function getEconomicOperatorRegistryURI()
    {
        return $this->economicOperatorRegistryURI;
    }

    /**
     * Sets a new economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     * @return self
     */
    public function setEconomicOperatorRegistryURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI = null)
    {
        $this->economicOperatorRegistryURI = $economicOperatorRegistryURI;
        return $this;
    }

    /**
     * Gets as requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRequiredCurriculaIndicator()
    {
        return $this->requiredCurriculaIndicator;
    }

    /**
     * Sets a new requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $requiredCurriculaIndicator
     * @return self
     */
    public function setRequiredCurriculaIndicator($requiredCurriculaIndicator)
    {
        $this->requiredCurriculaIndicator = $requiredCurriculaIndicator;
        return $this;
    }

    /**
     * Gets as requiredCurriculaCode
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Code
     *  A code signifying the conditions applying for tenderers to provide a curriculum vitae.
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredCurriculaCode
     */
    public function getRequiredCurriculaCode()
    {
        return $this->requiredCurriculaCode;
    }

    /**
     * Sets a new requiredCurriculaCode
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Code
     *  A code signifying the conditions applying for tenderers to provide a curriculum vitae.
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredCurriculaCode $requiredCurriculaCode
     * @return self
     */
    public function setRequiredCurriculaCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredCurriculaCode $requiredCurriculaCode = null)
    {
        $this->requiredCurriculaCode = $requiredCurriculaCode;
        return $this;
    }

    /**
     * Gets as otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getOtherConditionsIndicator()
    {
        return $this->otherConditionsIndicator;
    }

    /**
     * Sets a new otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $otherConditionsIndicator
     * @return self
     */
    public function setOtherConditionsIndicator($otherConditionsIndicator)
    {
        $this->otherConditionsIndicator = $otherConditionsIndicator;
        return $this;
    }

    /**
     * Gets as recurringProcurementIndicator
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement. Indicator
     *  Indicates whether the procurement is recurring (true) or not (false).
     *  0..1
     *  Tendering Terms
     *  Recurring
     *  Procurement
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRecurringProcurementIndicator()
    {
        return $this->recurringProcurementIndicator;
    }

    /**
     * Sets a new recurringProcurementIndicator
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement. Indicator
     *  Indicates whether the procurement is recurring (true) or not (false).
     *  0..1
     *  Tendering Terms
     *  Recurring
     *  Procurement
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $recurringProcurementIndicator
     * @return self
     */
    public function setRecurringProcurementIndicator($recurringProcurementIndicator)
    {
        $this->recurringProcurementIndicator = $recurringProcurementIndicator;
        return $this;
    }

    /**
     * Adds as recurringProcurementDescription
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RecurringProcurementDescription $recurringProcurementDescription
     */
    public function addToRecurringProcurementDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RecurringProcurementDescription $recurringProcurementDescription)
    {
        $this->recurringProcurementDescription[] = $recurringProcurementDescription;
        return $this;
    }

    /**
     * isset recurringProcurementDescription
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecurringProcurementDescription($index)
    {
        return isset($this->recurringProcurementDescription[$index]);
    }

    /**
     * unset recurringProcurementDescription
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecurringProcurementDescription($index)
    {
        unset($this->recurringProcurementDescription[$index]);
    }

    /**
     * Gets as recurringProcurementDescription
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RecurringProcurementDescription[]
     */
    public function getRecurringProcurementDescription()
    {
        return $this->recurringProcurementDescription;
    }

    /**
     * Sets a new recurringProcurementDescription
     *
     * BBIE
     *  Tendering Terms. Recurring_ Procurement Description. Text
     *  Any additional information about recurrence (e.g. estimated timing).
     *  0..n
     *  Tendering Terms
     *  Recurring
     *  Procurement Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RecurringProcurementDescription[] $recurringProcurementDescription
     * @return self
     */
    public function setRecurringProcurementDescription(?array $recurringProcurementDescription = null)
    {
        $this->recurringProcurementDescription = $recurringProcurementDescription;
        return $this;
    }

    /**
     * Adds as estimatedTimingFurtherPublication
     *
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedTimingFurtherPublication $estimatedTimingFurtherPublication
     */
    public function addToEstimatedTimingFurtherPublication(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedTimingFurtherPublication $estimatedTimingFurtherPublication)
    {
        $this->estimatedTimingFurtherPublication[] = $estimatedTimingFurtherPublication;
        return $this;
    }

    /**
     * isset estimatedTimingFurtherPublication
     *
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstimatedTimingFurtherPublication($index)
    {
        return isset($this->estimatedTimingFurtherPublication[$index]);
    }

    /**
     * unset estimatedTimingFurtherPublication
     *
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstimatedTimingFurtherPublication($index)
    {
        unset($this->estimatedTimingFurtherPublication[$index]);
    }

    /**
     * Gets as estimatedTimingFurtherPublication
     *
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedTimingFurtherPublication[]
     */
    public function getEstimatedTimingFurtherPublication()
    {
        return $this->estimatedTimingFurtherPublication;
    }

    /**
     * Sets a new estimatedTimingFurtherPublication
     *
     * BBIE
     *  Tendering Terms. Estimated Timing_ Further Publication. Text
     *  The description of the estimated timing for further notices to be published.
     *  0..n
     *  Tendering Terms
     *  Estimated Timing
     *  Further Publication
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedTimingFurtherPublication[] $estimatedTimingFurtherPublication
     * @return self
     */
    public function setEstimatedTimingFurtherPublication(?array $estimatedTimingFurtherPublication = null)
    {
        $this->estimatedTimingFurtherPublication = $estimatedTimingFurtherPublication;
        return $this;
    }

    /**
     * Adds as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalConditions $additionalConditions
     */
    public function addToAdditionalConditions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalConditions $additionalConditions)
    {
        $this->additionalConditions[] = $additionalConditions;
        return $this;
    }

    /**
     * isset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalConditions($index)
    {
        return isset($this->additionalConditions[$index]);
    }

    /**
     * unset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalConditions($index)
    {
        unset($this->additionalConditions[$index]);
    }

    /**
     * Gets as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalConditions[]
     */
    public function getAdditionalConditions()
    {
        return $this->additionalConditions;
    }

    /**
     * Sets a new additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalConditions[] $additionalConditions
     * @return self
     */
    public function setAdditionalConditions(?array $additionalConditions = null)
    {
        $this->additionalConditions = $additionalConditions;
        return $this;
    }

    /**
     * Gets as latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestSecurityClearanceDate()
    {
        return $this->latestSecurityClearanceDate;
    }

    /**
     * Sets a new latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestSecurityClearanceDate
     * @return self
     */
    public function setLatestSecurityClearanceDate(?\DateTime $latestSecurityClearanceDate = null)
    {
        $this->latestSecurityClearanceDate = $latestSecurityClearanceDate;
        return $this;
    }

    /**
     * Gets as documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentationFeeAmount
     */
    public function getDocumentationFeeAmount()
    {
        return $this->documentationFeeAmount;
    }

    /**
     * Sets a new documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentationFeeAmount $documentationFeeAmount
     * @return self
     */
    public function setDocumentationFeeAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentationFeeAmount $documentationFeeAmount = null)
    {
        $this->documentationFeeAmount = $documentationFeeAmount;
        return $this;
    }

    /**
     * Gets as multipleTendersCode
     *
     * BBIE
     *  Tendering Terms. Multiple Tenders. Code
     *  A code signifying whether a tenderer is allowed to submit multiple tenders.
     *  0..1
     *  Tendering Terms
     *  Multiple Tenders
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MultipleTendersCode
     */
    public function getMultipleTendersCode()
    {
        return $this->multipleTendersCode;
    }

    /**
     * Sets a new multipleTendersCode
     *
     * BBIE
     *  Tendering Terms. Multiple Tenders. Code
     *  A code signifying whether a tenderer is allowed to submit multiple tenders.
     *  0..1
     *  Tendering Terms
     *  Multiple Tenders
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MultipleTendersCode $multipleTendersCode
     * @return self
     */
    public function setMultipleTendersCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MultipleTendersCode $multipleTendersCode = null)
    {
        $this->multipleTendersCode = $multipleTendersCode;
        return $this;
    }

    /**
     * Adds as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PenaltyClause $penaltyClause
     */
    public function addToPenaltyClause(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PenaltyClause $penaltyClause)
    {
        $this->penaltyClause[] = $penaltyClause;
        return $this;
    }

    /**
     * isset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPenaltyClause($index)
    {
        return isset($this->penaltyClause[$index]);
    }

    /**
     * unset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPenaltyClause($index)
    {
        unset($this->penaltyClause[$index]);
    }

    /**
     * Gets as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PenaltyClause[]
     */
    public function getPenaltyClause()
    {
        return $this->penaltyClause;
    }

    /**
     * Sets a new penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PenaltyClause[] $penaltyClause
     * @return self
     */
    public function setPenaltyClause(?array $penaltyClause = null)
    {
        $this->penaltyClause = $penaltyClause;
        return $this;
    }

    /**
     * Adds as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee
     */
    public function addToRequiredFinancialGuarantee(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee)
    {
        $this->requiredFinancialGuarantee[] = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * isset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredFinancialGuarantee($index)
    {
        return isset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * unset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredFinancialGuarantee($index)
    {
        unset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * Gets as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredFinancialGuarantee[]
     */
    public function getRequiredFinancialGuarantee()
    {
        return $this->requiredFinancialGuarantee;
    }

    /**
     * Sets a new requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     * @return self
     */
    public function setRequiredFinancialGuarantee(?array $requiredFinancialGuarantee = null)
    {
        $this->requiredFinancialGuarantee = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * Adds as procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     */
    public function addToProcurementLegislationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference)
    {
        $this->procurementLegislationDocumentReference[] = $procurementLegislationDocumentReference;
        return $this;
    }

    /**
     * isset procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementLegislationDocumentReference($index)
    {
        return isset($this->procurementLegislationDocumentReference[$index]);
    }

    /**
     * unset procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementLegislationDocumentReference($index)
    {
        unset($this->procurementLegislationDocumentReference[$index]);
    }

    /**
     * Gets as procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementLegislationDocumentReference[]
     */
    public function getProcurementLegislationDocumentReference()
    {
        return $this->procurementLegislationDocumentReference;
    }

    /**
     * Sets a new procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementLegislationDocumentReference[] $procurementLegislationDocumentReference
     * @return self
     */
    public function setProcurementLegislationDocumentReference(?array $procurementLegislationDocumentReference = null)
    {
        $this->procurementLegislationDocumentReference = $procurementLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     */
    public function addToFiscalLegislationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference)
    {
        $this->fiscalLegislationDocumentReference[] = $fiscalLegislationDocumentReference;
        return $this;
    }

    /**
     * isset fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFiscalLegislationDocumentReference($index)
    {
        return isset($this->fiscalLegislationDocumentReference[$index]);
    }

    /**
     * unset fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFiscalLegislationDocumentReference($index)
    {
        unset($this->fiscalLegislationDocumentReference[$index]);
    }

    /**
     * Gets as fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FiscalLegislationDocumentReference[]
     */
    public function getFiscalLegislationDocumentReference()
    {
        return $this->fiscalLegislationDocumentReference;
    }

    /**
     * Sets a new fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FiscalLegislationDocumentReference[] $fiscalLegislationDocumentReference
     * @return self
     */
    public function setFiscalLegislationDocumentReference(?array $fiscalLegislationDocumentReference = null)
    {
        $this->fiscalLegislationDocumentReference = $fiscalLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     */
    public function addToEnvironmentalLegislationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference)
    {
        $this->environmentalLegislationDocumentReference[] = $environmentalLegislationDocumentReference;
        return $this;
    }

    /**
     * isset environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalLegislationDocumentReference($index)
    {
        return isset($this->environmentalLegislationDocumentReference[$index]);
    }

    /**
     * unset environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalLegislationDocumentReference($index)
    {
        unset($this->environmentalLegislationDocumentReference[$index]);
    }

    /**
     * Gets as environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EnvironmentalLegislationDocumentReference[]
     */
    public function getEnvironmentalLegislationDocumentReference()
    {
        return $this->environmentalLegislationDocumentReference;
    }

    /**
     * Sets a new environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EnvironmentalLegislationDocumentReference[] $environmentalLegislationDocumentReference
     * @return self
     */
    public function setEnvironmentalLegislationDocumentReference(?array $environmentalLegislationDocumentReference = null)
    {
        $this->environmentalLegislationDocumentReference = $environmentalLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     */
    public function addToEmploymentLegislationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference)
    {
        $this->employmentLegislationDocumentReference[] = $employmentLegislationDocumentReference;
        return $this;
    }

    /**
     * isset employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmploymentLegislationDocumentReference($index)
    {
        return isset($this->employmentLegislationDocumentReference[$index]);
    }

    /**
     * unset employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmploymentLegislationDocumentReference($index)
    {
        unset($this->employmentLegislationDocumentReference[$index]);
    }

    /**
     * Gets as employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmploymentLegislationDocumentReference[]
     */
    public function getEmploymentLegislationDocumentReference()
    {
        return $this->employmentLegislationDocumentReference;
    }

    /**
     * Sets a new employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..n
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmploymentLegislationDocumentReference[] $employmentLegislationDocumentReference
     * @return self
     */
    public function setEmploymentLegislationDocumentReference(?array $employmentLegislationDocumentReference = null)
    {
        $this->employmentLegislationDocumentReference = $employmentLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractualDocumentReference $contractualDocumentReference
     */
    public function addToContractualDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractualDocumentReference $contractualDocumentReference)
    {
        $this->contractualDocumentReference[] = $contractualDocumentReference;
        return $this;
    }

    /**
     * isset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractualDocumentReference($index)
    {
        return isset($this->contractualDocumentReference[$index]);
    }

    /**
     * unset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractualDocumentReference($index)
    {
        unset($this->contractualDocumentReference[$index]);
    }

    /**
     * Gets as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractualDocumentReference[]
     */
    public function getContractualDocumentReference()
    {
        return $this->contractualDocumentReference;
    }

    /**
     * Sets a new contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     * @return self
     */
    public function setContractualDocumentReference(?array $contractualDocumentReference = null)
    {
        $this->contractualDocumentReference = $contractualDocumentReference;
        return $this;
    }

    /**
     * Adds as callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    public function addToCallForTendersDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference)
    {
        $this->callForTendersDocumentReference[] = $callForTendersDocumentReference;
        return $this;
    }

    /**
     * isset callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCallForTendersDocumentReference($index)
    {
        return isset($this->callForTendersDocumentReference[$index]);
    }

    /**
     * unset callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCallForTendersDocumentReference($index)
    {
        unset($this->callForTendersDocumentReference[$index]);
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTendersDocumentReference[]
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to a Call for Tender associated with these tendering terms.
     *  0..n
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTendersDocumentReference[] $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?array $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationRequest $tendererQualificationRequest
     */
    public function addToTendererQualificationRequest(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationRequest $tendererQualificationRequest)
    {
        $this->tendererQualificationRequest[] = $tendererQualificationRequest;
        return $this;
    }

    /**
     * isset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTendererQualificationRequest($index)
    {
        return isset($this->tendererQualificationRequest[$index]);
    }

    /**
     * unset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTendererQualificationRequest($index)
    {
        unset($this->tendererQualificationRequest[$index]);
    }

    /**
     * Gets as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationRequest[]
     */
    public function getTendererQualificationRequest()
    {
        return $this->tendererQualificationRequest;
    }

    /**
     * Sets a new tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     * @return self
     */
    public function setTendererQualificationRequest(?array $tendererQualificationRequest = null)
    {
        $this->tendererQualificationRequest = $tendererQualificationRequest;
        return $this;
    }

    /**
     * Adds as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms
     */
    public function addToAllowedSubcontractTerms(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms)
    {
        $this->allowedSubcontractTerms[] = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * isset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedSubcontractTerms($index)
    {
        return isset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * unset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedSubcontractTerms($index)
    {
        unset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * Gets as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowedSubcontractTerms[]
     */
    public function getAllowedSubcontractTerms()
    {
        return $this->allowedSubcontractTerms;
    }

    /**
     * Sets a new allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     * @return self
     */
    public function setAllowedSubcontractTerms(?array $allowedSubcontractTerms = null)
    {
        $this->allowedSubcontractTerms = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * Adds as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderPreparation $tenderPreparation
     */
    public function addToTenderPreparation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderPreparation $tenderPreparation)
    {
        $this->tenderPreparation[] = $tenderPreparation;
        return $this;
    }

    /**
     * isset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderPreparation($index)
    {
        return isset($this->tenderPreparation[$index]);
    }

    /**
     * unset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderPreparation($index)
    {
        unset($this->tenderPreparation[$index]);
    }

    /**
     * Gets as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderPreparation[]
     */
    public function getTenderPreparation()
    {
        return $this->tenderPreparation;
    }

    /**
     * Sets a new tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderPreparation[] $tenderPreparation
     * @return self
     */
    public function setTenderPreparation(?array $tenderPreparation = null)
    {
        $this->tenderPreparation = $tenderPreparation;
        return $this;
    }

    /**
     * Adds as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExecutionRequirement $contractExecutionRequirement
     */
    public function addToContractExecutionRequirement(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExecutionRequirement $contractExecutionRequirement)
    {
        $this->contractExecutionRequirement[] = $contractExecutionRequirement;
        return $this;
    }

    /**
     * isset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractExecutionRequirement($index)
    {
        return isset($this->contractExecutionRequirement[$index]);
    }

    /**
     * unset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractExecutionRequirement($index)
    {
        unset($this->contractExecutionRequirement[$index]);
    }

    /**
     * Gets as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExecutionRequirement[]
     */
    public function getContractExecutionRequirement()
    {
        return $this->contractExecutionRequirement;
    }

    /**
     * Sets a new contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     * @return self
     */
    public function setContractExecutionRequirement(?array $contractExecutionRequirement = null)
    {
        $this->contractExecutionRequirement = $contractExecutionRequirement;
        return $this;
    }

    /**
     * Gets as awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingTerms
     */
    public function getAwardingTerms()
    {
        return $this->awardingTerms;
    }

    /**
     * Sets a new awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingTerms $awardingTerms
     * @return self
     */
    public function setAwardingTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingTerms $awardingTerms = null)
    {
        $this->awardingTerms = $awardingTerms;
        return $this;
    }

    /**
     * Gets as additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalInformationParty
     */
    public function getAdditionalInformationParty()
    {
        return $this->additionalInformationParty;
    }

    /**
     * Sets a new additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty
     * @return self
     */
    public function setAdditionalInformationParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty = null)
    {
        $this->additionalInformationParty = $additionalInformationParty;
        return $this;
    }

    /**
     * Gets as documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentProviderParty
     */
    public function getDocumentProviderParty()
    {
        return $this->documentProviderParty;
    }

    /**
     * Sets a new documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentProviderParty $documentProviderParty
     * @return self
     */
    public function setDocumentProviderParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentProviderParty $documentProviderParty = null)
    {
        $this->documentProviderParty = $documentProviderParty;
        return $this;
    }

    /**
     * Gets as tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderRecipientParty
     */
    public function getTenderRecipientParty()
    {
        return $this->tenderRecipientParty;
    }

    /**
     * Sets a new tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty
     * @return self
     */
    public function setTenderRecipientParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty = null)
    {
        $this->tenderRecipientParty = $tenderRecipientParty;
        return $this;
    }

    /**
     * Gets as contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractResponsibleParty
     */
    public function getContractResponsibleParty()
    {
        return $this->contractResponsibleParty;
    }

    /**
     * Sets a new contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty
     * @return self
     */
    public function setContractResponsibleParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty = null)
    {
        $this->contractResponsibleParty = $contractResponsibleParty;
        return $this;
    }

    /**
     * Adds as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderEvaluationParty $tenderEvaluationParty
     */
    public function addToTenderEvaluationParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderEvaluationParty $tenderEvaluationParty)
    {
        $this->tenderEvaluationParty[] = $tenderEvaluationParty;
        return $this;
    }

    /**
     * isset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderEvaluationParty($index)
    {
        return isset($this->tenderEvaluationParty[$index]);
    }

    /**
     * unset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderEvaluationParty($index)
    {
        unset($this->tenderEvaluationParty[$index]);
    }

    /**
     * Gets as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderEvaluationParty[]
     */
    public function getTenderEvaluationParty()
    {
        return $this->tenderEvaluationParty;
    }

    /**
     * Sets a new tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     * @return self
     */
    public function setTenderEvaluationParty(?array $tenderEvaluationParty = null)
    {
        $this->tenderEvaluationParty = $tenderEvaluationParty;
        return $this;
    }

    /**
     * Gets as qualificationRequestRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Qualification Request Recipient_ Party. Party
     *  A party in the contracting authority responsible for receiving qualification requests.
     *  0..1
     *  Tendering Terms
     *  Qualification Request Recipient
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualificationRequestRecipientParty
     */
    public function getQualificationRequestRecipientParty()
    {
        return $this->qualificationRequestRecipientParty;
    }

    /**
     * Sets a new qualificationRequestRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Qualification Request Recipient_ Party. Party
     *  A party in the contracting authority responsible for receiving qualification requests.
     *  0..1
     *  Tendering Terms
     *  Qualification Request Recipient
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualificationRequestRecipientParty $qualificationRequestRecipientParty
     * @return self
     */
    public function setQualificationRequestRecipientParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualificationRequestRecipientParty $qualificationRequestRecipientParty = null)
    {
        $this->qualificationRequestRecipientParty = $qualificationRequestRecipientParty;
        return $this;
    }

    /**
     * Gets as tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderValidityPeriod
     */
    public function getTenderValidityPeriod()
    {
        return $this->tenderValidityPeriod;
    }

    /**
     * Sets a new tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     * @return self
     */
    public function setTenderValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod = null)
    {
        $this->tenderValidityPeriod = $tenderValidityPeriod;
        return $this;
    }

    /**
     * Gets as contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractAcceptancePeriod
     */
    public function getContractAcceptancePeriod()
    {
        return $this->contractAcceptancePeriod;
    }

    /**
     * Sets a new contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     * @return self
     */
    public function setContractAcceptancePeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod = null)
    {
        $this->contractAcceptancePeriod = $contractAcceptancePeriod;
        return $this;
    }

    /**
     * Gets as appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppealTerms
     */
    public function getAppealTerms()
    {
        return $this->appealTerms;
    }

    /**
     * Sets a new appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppealTerms $appealTerms
     * @return self
     */
    public function setAppealTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppealTerms $appealTerms = null)
    {
        $this->appealTerms = $appealTerms;
        return $this;
    }

    /**
     * Adds as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     */
    public function addToLanguage(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[] $language
     * @return self
     */
    public function setLanguage(?array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BudgetAccountLine $budgetAccountLine
     */
    public function addToBudgetAccountLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BudgetAccountLine $budgetAccountLine)
    {
        $this->budgetAccountLine[] = $budgetAccountLine;
        return $this;
    }

    /**
     * isset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccountLine($index)
    {
        return isset($this->budgetAccountLine[$index]);
    }

    /**
     * unset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccountLine($index)
    {
        unset($this->budgetAccountLine[$index]);
    }

    /**
     * Gets as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BudgetAccountLine[]
     */
    public function getBudgetAccountLine()
    {
        return $this->budgetAccountLine;
    }

    /**
     * Sets a new budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BudgetAccountLine[] $budgetAccountLine
     * @return self
     */
    public function setBudgetAccountLine(?array $budgetAccountLine = null)
    {
        $this->budgetAccountLine = $budgetAccountLine;
        return $this;
    }

    /**
     * Gets as replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReplacedNoticeDocumentReference
     */
    public function getReplacedNoticeDocumentReference()
    {
        return $this->replacedNoticeDocumentReference;
    }

    /**
     * Sets a new replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     * @return self
     */
    public function setReplacedNoticeDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference = null)
    {
        $this->replacedNoticeDocumentReference = $replacedNoticeDocumentReference;
        return $this;
    }

    /**
     * Gets as lotDistribution
     *
     * ASBIE
     *  Tendering Terms. Lot Distribution
     *  List of specific ways to tender to the lots of the procurement project.
     *  0..1
     *  Tendering Terms
     *  Lot Distribution
     *  Lot Distribution
     *  Lot Distribution
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotDistribution
     */
    public function getLotDistribution()
    {
        return $this->lotDistribution;
    }

    /**
     * Sets a new lotDistribution
     *
     * ASBIE
     *  Tendering Terms. Lot Distribution
     *  List of specific ways to tender to the lots of the procurement project.
     *  0..1
     *  Tendering Terms
     *  Lot Distribution
     *  Lot Distribution
     *  Lot Distribution
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotDistribution $lotDistribution
     * @return self
     */
    public function setLotDistribution(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotDistribution $lotDistribution = null)
    {
        $this->lotDistribution = $lotDistribution;
        return $this;
    }

    /**
     * Gets as postAwardProcess
     *
     * ASBIE
     *  Tendering Terms. Post Award Process
     *  Information about the post-award process.
     *  0..1
     *  Tendering Terms
     *  Post Award Process
     *  Post Award Process
     *  Post Award Process
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostAwardProcess
     */
    public function getPostAwardProcess()
    {
        return $this->postAwardProcess;
    }

    /**
     * Sets a new postAwardProcess
     *
     * ASBIE
     *  Tendering Terms. Post Award Process
     *  Information about the post-award process.
     *  0..1
     *  Tendering Terms
     *  Post Award Process
     *  Post Award Process
     *  Post Award Process
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostAwardProcess $postAwardProcess
     * @return self
     */
    public function setPostAwardProcess(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostAwardProcess $postAwardProcess = null)
    {
        $this->postAwardProcess = $postAwardProcess;
        return $this;
    }

    /**
     * Gets as economicOperatorShortList
     *
     * ASBIE
     *  Tendering Terms. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorShortList
     */
    public function getEconomicOperatorShortList()
    {
        return $this->economicOperatorShortList;
    }

    /**
     * Sets a new economicOperatorShortList
     *
     * ASBIE
     *  Tendering Terms. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorShortList $economicOperatorShortList
     * @return self
     */
    public function setEconomicOperatorShortList(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorShortList $economicOperatorShortList = null)
    {
        $this->economicOperatorShortList = $economicOperatorShortList;
        return $this;
    }

    /**
     * Adds as securityClearanceTerm
     *
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityClearanceTerm $securityClearanceTerm
     */
    public function addToSecurityClearanceTerm(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityClearanceTerm $securityClearanceTerm)
    {
        $this->securityClearanceTerm[] = $securityClearanceTerm;
        return $this;
    }

    /**
     * isset securityClearanceTerm
     *
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityClearanceTerm($index)
    {
        return isset($this->securityClearanceTerm[$index]);
    }

    /**
     * unset securityClearanceTerm
     *
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityClearanceTerm($index)
    {
        unset($this->securityClearanceTerm[$index]);
    }

    /**
     * Gets as securityClearanceTerm
     *
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityClearanceTerm[]
     */
    public function getSecurityClearanceTerm()
    {
        return $this->securityClearanceTerm;
    }

    /**
     * Sets a new securityClearanceTerm
     *
     * ASBIE
     *  Tendering Terms. Security Clearance Term
     *  Information about the terms to present for a security clearance.
     *  0..n
     *  Tendering Terms
     *  Security Clearance Term
     *  Security Clearance Term
     *  Security Clearance Term
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityClearanceTerm[] $securityClearanceTerm
     * @return self
     */
    public function setSecurityClearanceTerm(?array $securityClearanceTerm = null)
    {
        $this->securityClearanceTerm = $securityClearanceTerm;
        return $this;
    }
}

