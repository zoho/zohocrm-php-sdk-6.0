# Zoho CRM PHP SDK 6.0

The PHP SDK for Zoho CRM allows developers to easily create client PHP applications that can be integrated with Zoho CRM. This SDK serves as a wrapper for the REST APIs, making it easier to access and utilize the services of Zoho CRM. 
Authentication to access the CRM APIs is done through OAuth2.0, and the authentication process is streamlined through the use of the PHP SDK. The grant and access/refresh tokens are generated and managed within the SDK code, eliminating the need for manual handling during data synchronization between Zoho CRM and the client application.

This repository includes the PHP SDK for API v6 of Zoho CRM. Check [Versions](https://github.com/zoho/zohocrm-php-sdk-6.0/releases) for more details on the versions of SDK released for this API version.

License
=======

    Copyright (c) 2021, ZOHO CORPORATION PRIVATE LIMITED 
    All rights reserved. 

    Licensed under the Apache License, Version 2.0 (the "License"); 
    you may not use this file except in compliance with the License. 
    You may obtain a copy of the License at 
    
        http://www.apache.org/licenses/LICENSE-2.0 
    
    Unless required by applicable law or agreed to in writing, software 
    distributed under the License is distributed on an "AS IS" BASIS, 
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
    See the License for the specific language governing permissions and 
    limitations under the License.


## Latest Version

- [8.1.0](/versions/8.1.0/README.md)
  - FileStore class issue fixed.

- [8.0.0](/versions/8.0.0/README.md)
  - Handled FileStore save and update token method issue.
  - Update CADataCenter Accounts URL.

- [7.0.0](/versions/7.0.0/README.md)
  - Handled SDKException error message.

- [6.0.0](/versions/6.0.0/README.md)
  - Handled API operation timeout error.

- [5.0.0](/versions/5.0.0/README.md)
  - Handled Record `rollup_summary` datatype.

- [4.0.0](/versions/4.0.0/README.md)
    - Supported multiple field update operations in the FieldsOperations class.

- [3.0.0](/versions/3.0.0/README.md)
    - Blueprint Transition ***percentPartialSave*** field datatype changed(Integer to float).
    - Blueprint Field ***convertMapping*** field datatype changed(ConvertMapping to array).
    - Added new ***id*** and ***name*** param in GetDownloadAttachmentsDetailsParam class.
    - Added new ***type*** and ***ownerId*** param in EmailRelatedRecordsOperations class constructor.
    - Handled Record Field API Name and datatype.
    - Added new fields (createdTimeS, modifiedTimeS, createdByS, ownerS, and modifiedByS) in Record FileDetails class.
    - Record ***multi_user_lookup*** type fields datatype changed(array of MinifiedUser to array of Record).
    

- [2.0.0](/versions/2.0.0/README.md)
    - Added new ***moveAttachmentsTo*** field in LeadConverter class.
    - Added new ***subCategory*** field in EmailRelatedRecords Status class.
    - Added new ***availableCount*** field in Features Detail class.
    - Changed ***tabTraversal*** field datatype in Layouts Sections.
    - CustomViews ***favorite*** field datatype changed (bool to int).
    - Support for the following new APIs.
        - ***CustomViews***
            - [Change Sort Order of Custom Views](https://www.zoho.com/crm/developer/docs/api/v6/sort-order-cv.html)
        - ***Users***
            - [Users Count](https://www.zoho.com/crm/developer/docs/api/v6/users-count.html)
        - ***Features***
            - [User Licences Count](https://www.zoho.com/crm/developer/docs/api/v6/get-user-licences.html)

- [1.0.0](/versions/1.0.0/README.md)

    - PHP SDK upgraded to support v6 APIs.

    - PHP SDK improved to support the following new APIs

      - [Unsubscribe Links](https://www.zoho.com/crm/developer/docs/api/v6/get-unsubscribe-links.html)
      - [Find and Merge API](https://www.zoho.com/crm/developer/docs/api/v6/merge-records.html)
      - [Get Related Records of Deleted Record API](https://www.zoho.com/crm/developer/docs/api/v6/get-related-records-of-deleted-record.html)
      - [Features API](https://www.zoho.com/crm/developer/docs/api/v6/get-features.html)
      - [Global Picklist API](https://www.zoho.com/crm/developer/docs/api/v6/get-global-picklist.html)
      - [Unblock Email API](https://www.zoho.com/crm/developer/docs/api/v6/unblock-emails.html)
  
For older versions, please [refer](https://github.com/zoho/zohocrm-php-sdk-6.0/releases).

## Including the SDK in your project
You can include the SDK to your project using Composer.
For installing the latest [version](https://github.com/zoho/zohocrm-php-sdk-6.0/releases/tag/8.1.0) of PHP SDK, navigate to the workspace of your client app and run the following command.

```sh
composer require zohocrm/php-sdk-6.0:8.1.0
```
With this, the PHP SDK will be installed and a package named vendor will be created in the workspace of your client app.

---

**NOTE** 

> - The **access and refresh tokens are environment-specific and domain-specific**. When you handle various environments and domains such as **Production**, **Sandbox**, or **Developer** and **IN**, **CN**, **US**, **EU**, **JP**, **CA**, or **AU**, respectively, you must use the access token and refresh token generated only in those respective environments and domains. The SDK throws an error, otherwise.
For example, if you generate the tokens for your Sandbox environment in the CN domain, you must use only those tokens for that domain and environment. You cannot use the tokens generated for a different environment or a domain.

> - For **Deal Contact Roles API and Records API**, you will need to provide the **ZohoCRM.settings.fields.ALL** scope along with the **ZohoCRM.modules.ALL** scope while generating the OAuthtoken. Otherwise, the system returns the **OAUTH-SCOPE-MISMATCH** error.

> - For **Related Records API**, the scopes required for generating OAuthtoken are **ZohoCRM.modules.ALL**, **ZohoCRM.settings.fields.ALL** and **ZohoCRM.settings.related_lists.ALL**. Otherwise, the system returns the **OAUTH-SCOPE-MISMATCH** error.

> - For **Mass Convert API**, you will need to provide the **ZohoCRM.settings.fields.ALL** scope along with the **ZohoCRM.mass_convert.leads.CREATE** and **ZohoCRM.mass_convert.leads.READ** scope while generating the OAuthtoken. Otherwise, the system returns the **OAUTH-SCOPE-MISMATCH** error.

---

For more details, kindly refer here. [here](/versions/8.1.0/README.md).
