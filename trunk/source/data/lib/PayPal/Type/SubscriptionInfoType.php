<?php
/**
 * @package PayPal
 */

/**
 * Make sure our parent class is defined.
 */
require_once 'PayPal/Type/XSDSimpleType.php';

/**
 * SubscriptionInfoType
 * 
 * SubscriptionInfoType Information about a PayPal Subscription.
 *
 * @package PayPal
 */
class SubscriptionInfoType extends XSDSimpleType
{
    /**
     * ID generated by PayPal for the subscriber. Character length and limitations: no
     * limit
     */
    var $SubscriptionID;

    /**
     * Subscription start date
     */
    var $SubscriptionDate;

    /**
     * Date when the subscription modification will be effective
     */
    var $EffectiveDate;

    /**
     * Date PayPal will retry a failed subscription payment
     */
    var $RetryTime;

    /**
     * Username generated by PayPal and given to subscriber to access the subscription.
     * Character length and limitations: 64 alphanumeric single-byte characters
     */
    var $Username;

    /**
     * Password generated by PayPal and given to subscriber to access the subscription.
     * For security, the value of the password is hashed. Character length and
     * limitations: 128 alphanumeric single-byte characters
     */
    var $Password;

    /**
     * The number of payment installments that will occur at the regular rate.
     * Character length and limitations: no limit
     */
    var $Recurrences;

    /**
     * Subscription duration and charges
     */
    var $Terms;

    function SubscriptionInfoType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_elements = array_merge($this->_elements,
            array (
              'SubscriptionID' => 
              array (
                'required' => true,
                'type' => NULL,
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'SubscriptionDate' => 
              array (
                'required' => false,
                'type' => 'dateTime',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'EffectiveDate' => 
              array (
                'required' => false,
                'type' => 'dateTime',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'RetryTime' => 
              array (
                'required' => false,
                'type' => 'dateTime',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'Username' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'Password' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'Recurrences' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'Terms' => 
              array (
                'required' => false,
                'type' => 'SubscriptionTermsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
        $this->_attributes = array_merge($this->_attributes,
            array (
              'reattempt' => 
              array (
                'name' => 'reattempt',
                'type' => 'xs:string',
                'use' => 'required',
              ),
              'recurring' => 
              array (
                'name' => 'recurring',
                'type' => 'xs:string',
                'use' => 'required',
              ),
            ));
    }

    function getSubscriptionID()
    {
        return $this->SubscriptionID;
    }
    function setSubscriptionID($SubscriptionID, $charset = 'iso-8859-1')
    {
        $this->SubscriptionID = $SubscriptionID;
        $this->_elements['SubscriptionID']['charset'] = $charset;
    }
    function getSubscriptionDate()
    {
        return $this->SubscriptionDate;
    }
    function setSubscriptionDate($SubscriptionDate, $charset = 'iso-8859-1')
    {
        $this->SubscriptionDate = $SubscriptionDate;
        $this->_elements['SubscriptionDate']['charset'] = $charset;
    }
    function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    function setEffectiveDate($EffectiveDate, $charset = 'iso-8859-1')
    {
        $this->EffectiveDate = $EffectiveDate;
        $this->_elements['EffectiveDate']['charset'] = $charset;
    }
    function getRetryTime()
    {
        return $this->RetryTime;
    }
    function setRetryTime($RetryTime, $charset = 'iso-8859-1')
    {
        $this->RetryTime = $RetryTime;
        $this->_elements['RetryTime']['charset'] = $charset;
    }
    function getUsername()
    {
        return $this->Username;
    }
    function setUsername($Username, $charset = 'iso-8859-1')
    {
        $this->Username = $Username;
        $this->_elements['Username']['charset'] = $charset;
    }
    function getPassword()
    {
        return $this->Password;
    }
    function setPassword($Password, $charset = 'iso-8859-1')
    {
        $this->Password = $Password;
        $this->_elements['Password']['charset'] = $charset;
    }
    function getRecurrences()
    {
        return $this->Recurrences;
    }
    function setRecurrences($Recurrences, $charset = 'iso-8859-1')
    {
        $this->Recurrences = $Recurrences;
        $this->_elements['Recurrences']['charset'] = $charset;
    }
    function getTerms()
    {
        return $this->Terms;
    }
    function setTerms($Terms, $charset = 'iso-8859-1')
    {
        $this->Terms = $Terms;
        $this->_elements['Terms']['charset'] = $charset;
    }
}