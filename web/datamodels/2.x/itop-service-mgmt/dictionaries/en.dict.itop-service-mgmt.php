<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

// Menu, fieldsets, UI, messages translations

Dict::Add('EN US', 'English', 'English', array(
	'Menu:ServiceManagement' => 'Service management',
	'Menu:ServiceManagement+' => 'Service management overview',
	'Menu:Service:Overview' => 'Overview',
	'Menu:Service:Overview+' => '',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contracts by service level',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contracts by status',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contracts ending in less then 30 days',
	'Menu:ProviderContract' => 'Provider contracts',
	'Menu:ProviderContract+' => 'Provider contracts',
	'Menu:CustomerContract' => 'Customer contracts',
	'Menu:CustomerContract+' => 'Customer contracts',
	'Menu:ServiceSubcategory' => 'Service subcategories',
	'Menu:ServiceSubcategory+' => 'Service subcategories',
	'Menu:Service' => 'Services',
	'Menu:Service+' => 'Services',
	'Menu:ServiceElement' => 'Sevice elements',
	'Menu:ServiceElement+' => 'Sevice elements',
	'Menu:SLA' => 'SLAs',
	'Menu:SLA+' => 'Service Level Agreements',
	'Menu:SLT' => 'SLTs',
	'Menu:SLT+' => 'Service Level Targets',
	'Menu:DeliveryModel' => 'Delivery models',
	'Menu:DeliveryModel+' => 'Delivery models',
	'Menu:ServiceFamily' => 'Service families',
	'Menu:ServiceFamily+' => 'Service families',
	'Menu:Procedure' => 'Procedures catalog',
	'Menu:Procedure+' => 'All procedures catalog',

	'Contract:baseinfo' => 'General information',
	'Contract:moreinfo' => 'Contractual information',
	'Contract:cost'     => 'Cost information',
));

//
// Class: Organization
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Organization/Attribute:deliverymodel_id' => 'Delivery model',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name',
));


//
// Class: ContractType
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ContractType' => 'Contract Type',
	'Class:ContractType+' => '',
));

//
// Class: Contract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Contract' => 'Contract',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Name',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => 'Customer',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => 'Customer Name',
	'Class:Contract/Attribute:organization_name+' => 'Common name',
	'Class:Contract/Attribute:contacts_list' => 'Contacts',
	'Class:Contract/Attribute:contacts_list+' => 'All the contacts for this customer contract',
	'Class:Contract/Attribute:documents_list' => 'Documents',
	'Class:Contract/Attribute:documents_list+' => 'All the documents for this customer contract',
	'Class:Contract/Attribute:description' => 'Description',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Start date',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'End date',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Cost',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Cost Currency',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dollars',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euros',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => 'Contract type',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => 'Contract type Name',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Billing frequency',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Cost unit',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => 'Provider',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => 'Provider Name',
	'Class:Contract/Attribute:provider_name+' => 'Common name',
	'Class:Contract/Attribute:status' => 'Status',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => 'implementation',
	'Class:Contract/Attribute:status/Value:implementation+' => 'implementation',
	'Class:Contract/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:Contract/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:Contract/Attribute:status/Value:production' => 'production',
	'Class:Contract/Attribute:status/Value:production+' => 'production',
	'Class:Contract/Attribute:finalclass' => 'Contract sub-class',
	'Class:Contract/Attribute:finalclass+' => 'Name of the final class',
));
//
// Class: CustomerContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:CustomerContract' => 'Customer Contract',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => 'Services',
	'Class:CustomerContract/Attribute:services_list+' => 'All the services purchased for this contract',
));

//
// Class: ProviderContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ProviderContract' => 'Provider Contract',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => 'CIs',
	'Class:ProviderContract/Attribute:functionalcis_list+' => 'All the configuration items covered by this provider contract',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Service Level Agreement',
	'Class:ProviderContract/Attribute:coverage' => 'Service hours',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:ProviderContract/Attribute:contracttype_id' => 'Contract type',
	'Class:ProviderContract/Attribute:contracttype_id+' => '',
	'Class:ProviderContract/Attribute:contracttype_name' => 'Contract type name',
	'Class:ProviderContract/Attribute:contracttype_name+' => '',
	'Class:ProviderContract/Attribute:services_list' => 'Services',
	'Class:ProviderContract/Attribute:services_list+' => 'All the services purchased with this contract',
));

//
// Class: lnkContactToContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToContract' => 'Link Contact / Contract',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Name' => '%1$s / %2$s',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Contract',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Contract Name',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Contact Name',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));

//
// Class: lnkContractToDocument
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToDocument' => 'Link Contract / Document',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Name' => '%1$s / %2$s',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Contract Name',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Document',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Document Name',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));

//
// Class: ServiceFamily
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceFamily' => 'Service Family',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => 'Name',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:icon' => 'Icon',
	'Class:ServiceFamily/Attribute:icon+' => '',
	'Class:ServiceFamily/Attribute:services_list' => 'Services',
	'Class:ServiceFamily/Attribute:services_list+' => 'All the services in this category',
));

//
// Class: Service
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Service' => 'Service',
	'Class:Service+' => '',
	'Class:Service/ComplementaryName' => '%1$s - %2$s',
	'Class:Service/Attribute:name' => 'Name',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => 'Provider',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => 'Provider Name',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:servicefamily_id' => 'Service Family',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:servicefamily_name' => 'Service Family Name',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:Service/Attribute:description' => 'Description',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => 'Documents',
	'Class:Service/Attribute:documents_list+' => 'All the documents linked to the service',
	'Class:Service/Attribute:contacts_list' => 'Contacts',
	'Class:Service/Attribute:contacts_list+' => 'All the contacts for this service',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => 'implementation',
	'Class:Service/Attribute:status/Value:implementation+' => 'implementation',
	'Class:Service/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'production',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:icon' => 'Icon',
	'Class:Service/Attribute:icon+' => '',
	'Class:Service/Attribute:customercontracts_list' => 'Customer contracts',
	'Class:Service/Attribute:customercontracts_list+' => 'All the customer contracts that have purchased this service',
	'Class:Service/Attribute:providercontracts_list' => 'Provider contracts',
	'Class:Service/Attribute:providercontracts_list+' => 'All the provider contracts to support this service',
	'Class:Service/Attribute:functionalcis_list' => 'Depends on CIs',
	'Class:Service/Attribute:functionalcis_list+' => 'All the configuration items that are used to provide this service',
	'Class:Service/Attribute:servicesubcategories_list' => 'Service sub categories',
	'Class:Service/Attribute:servicesubcategories_list+' => 'All the sub categories for this service',
));

//
// Class: lnkDocumentToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToService' => 'Link Document / Service',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Name' => '%1$s / %2$s',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Service',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Service Name',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Document Name',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));

//
// Class: lnkContactToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToService' => 'Link Contact / Service',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Name' => '%1$s / %2$s',
	'Class:lnkContactToService/Attribute:service_id' => 'Service',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => 'Service Name',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => 'Contact Name',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceSubcategory' => 'Service Subcategory',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/ComplementaryName' => '%1$s - %2$s',
	'Class:ServiceSubcategory/Attribute:name' => 'Name',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Description',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Service',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Service name',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Request type',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'incident',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => 'incident',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'service request',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => 'service request',
	'Class:ServiceSubcategory/Attribute:status' => 'Status',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'implementation',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => 'implementation',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'production',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => 'production',
));

//
// Class: SLA
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Name',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => 'description',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => 'Provider',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => 'Provider Name',
	'Class:SLA/Attribute:organization_name+' => 'Common name',
	'Class:SLA/Attribute:slts_list' => 'SLTs',
	'Class:SLA/Attribute:slts_list+' => 'All the service level targets for this SLA',
	'Class:SLA/Attribute:customercontracts_list' => 'Customer contracts',
	'Class:SLA/Attribute:customercontracts_list+' => 'All the customer contracted services using this SLA',
	'Class:SLA/Error:UniqueLnkCustomerContractToService' => 'Could not save link with Customer contract %1$s and service %2$s : SLA already exists',
));

//
// Class: SLT
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Name',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => 'Priority',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => 'critical',
	'Class:SLT/Attribute:priority/Value:1+' => 'critical',
	'Class:SLT/Attribute:priority/Value:2' => 'high',
	'Class:SLT/Attribute:priority/Value:2+' => 'high',
	'Class:SLT/Attribute:priority/Value:3' => 'medium',
	'Class:SLT/Attribute:priority/Value:3+' => 'medium',
	'Class:SLT/Attribute:priority/Value:4' => 'low',
	'Class:SLT/Attribute:priority/Value:4+' => 'low',
	'Class:SLT/Attribute:request_type' => 'Request type',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => 'incident',
	'Class:SLT/Attribute:request_type/Value:incident+' => 'incident',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'service request',
	'Class:SLT/Attribute:request_type/Value:service_request+' => 'service request',
	'Class:SLT/Attribute:metric' => 'Metric',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO',
	'Class:SLT/Attribute:metric/Value:tto+' => 'TTO',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'TTR',
	'Class:SLT/Attribute:value' => 'Value',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => 'Unit',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => 'hours',
	'Class:SLT/Attribute:unit/Value:hours+' => 'hours',
	'Class:SLT/Attribute:unit/Value:minutes' => 'minutes',
	'Class:SLT/Attribute:unit/Value:minutes+' => 'minutes',
	'Class:SLT/Attribute:slas_list' => 'SLAs',
	'Class:SLT/Attribute:slas_list+' => 'All the service level agreements using this SLT',
));

//
// Class: lnkSLAToSLT
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSLAToSLT' => 'Link SLA / SLT',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Name' => '%1$s / %2$s',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'SLA',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'SLA Name',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'SLT',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'SLT Name',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_metric' => 'Slt metric',
	'Class:lnkSLAToSLT/Attribute:slt_metric+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_request_type' => 'Slt request type',
	'Class:lnkSLAToSLT/Attribute:slt_request_type+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority' => 'Slt ticket priority',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value' => 'Slt value',
	'Class:lnkSLAToSLT/Attribute:slt_value+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit' => 'Slt value unit',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit+' => '',
));

//
// Class: lnkCustomerContractToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkCustomerContractToService' => 'Link Customer Contract / Service',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Name' => '%1$s / %2$s',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Customer contract',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Customer contract Name',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Service',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Service Name',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'SLA Name',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));

//
// Class: lnkProviderContractToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkProviderContractToService' => 'Link Provider Contract / Service',
	'Class:lnkProviderContractToService+' => '',
	'Class:lnkProviderContractToService/Name' => '%1$s / %2$s',
	'Class:lnkProviderContractToService/Attribute:service_id' => 'Service',
	'Class:lnkProviderContractToService/Attribute:service_id+' => '',
	'Class:lnkProviderContractToService/Attribute:service_name' => 'Service Name',
	'Class:lnkProviderContractToService/Attribute:service_name+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => 'Provider contract',
	'Class:lnkProviderContractToService/Attribute:providercontract_id+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => 'Provider contract Name',
	'Class:lnkProviderContractToService/Attribute:providercontract_name+' => '',
));

//
// Class: DeliveryModel
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DeliveryModel' => 'Delivery Model',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => 'Name',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => 'Organization',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => 'Organization Name',
	'Class:DeliveryModel/Attribute:organization_name+' => 'Common name',
	'Class:DeliveryModel/Attribute:description' => 'Description',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Contacts',
	'Class:DeliveryModel/Attribute:contacts_list+' => 'All the contacts (Teams and Person) for this delivery model',
	'Class:DeliveryModel/Attribute:customers_list' => 'Customers',
	'Class:DeliveryModel/Attribute:customers_list+' => 'All the customers having this delivering model',
));

//
// Class: lnkDeliveryModelToContact
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDeliveryModelToContact' => 'Link Delivery Model / Contact',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Name' => '%1$s / %2$s',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Delivery model',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Delivery model name',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Contact name',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Role',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Role name',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));
