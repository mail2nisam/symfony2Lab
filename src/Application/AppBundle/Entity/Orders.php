<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Orders
 */
class Orders
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $ordernumber
     */
    private $ordernumber;

    /**
     * @var string $orderstatus
     */
    private $orderstatus;

    /**
     * @var string $ordertype
     */
    private $ordertype;

    /**
     * @var string $dealtype
     */
    private $dealtype;

    /**
     * @var \DateTime $ordercreateddate
     */
    private $ordercreateddate;

    /**
     * @var \DateTime $orderstatusdate
     */
    private $orderstatusdate;

    /**
     * @var integer $cityid
     */
    private $cityid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var float $ordersubtotal
     */
    private $ordersubtotal;

    /**
     * @var string $orderpromocode
     */
    private $orderpromocode;

    /**
     * @var float $orderpromodiscountamount
     */
    private $orderpromodiscountamount;

    /**
     * @var float $orderusercreditamount
     */
    private $orderusercreditamount;

    /**
     * @var integer $paymentsettingsgroupid
     */
    private $paymentsettingsgroupid;

    /**
     * @var string $orderpaymentmethodname
     */
    private $orderpaymentmethodname;

    /**
     * @var string $paymenttype
     */
    private $paymenttype;

    /**
     * @var string $paymentstatus
     */
    private $paymentstatus;

    /**
     * @var string $transactionid
     */
    private $transactionid;

    /**
     * @var integer $orderqty
     */
    private $orderqty;

    /**
     * @var float $ordertaxamount
     */
    private $ordertaxamount;

    /**
     * @var integer $ordercharityid
     */
    private $ordercharityid;

    /**
     * @var float $ordercharityamount
     */
    private $ordercharityamount;

    /**
     * @var float $ordercommissionamount
     */
    private $ordercommissionamount;

    /**
     * @var float $orderpaymentgatewaycharge
     */
    private $orderpaymentgatewaycharge;

    /**
     * @var float $orderotherservicecharge
     */
    private $orderotherservicecharge;

    /**
     * @var float $ordertotalamount
     */
    private $ordertotalamount;

    /**
     * @var string $billingfirstname
     */
    private $billingfirstname;

    /**
     * @var string $billinglastname
     */
    private $billinglastname;

    /**
     * @var string $billingaddress1
     */
    private $billingaddress1;

    /**
     * @var string $billingaddress2
     */
    private $billingaddress2;

    /**
     * @var string $billingcity
     */
    private $billingcity;

    /**
     * @var integer $billingstate
     */
    private $billingstate;

    /**
     * @var string $billingprovince
     */
    private $billingprovince;

    /**
     * @var integer $billingcountry
     */
    private $billingcountry;

    /**
     * @var string $billingzip
     */
    private $billingzip;

    /**
     * @var string $billingphone
     */
    private $billingphone;

    /**
     * @var string $billingemail
     */
    private $billingemail;

    /**
     * @var string $carddata
     */
    private $carddata;

    /**
     * @var string $orderremoved
     */
    private $orderremoved;

    /**
     * @var string $purchasedcurrency
     */
    private $purchasedcurrency;

    /**
     * @var float $shippingamount
     */
    private $shippingamount;

    /**
     * @var string $shipmentstatus
     */
    private $shipmentstatus;

    /**
     * @var \DateTime $shipmentdate
     */
    private $shipmentdate;

    /**
     * @var string $carrierdetails
     */
    private $carrierdetails;

    /**
     * @var string $paymentnotes
     */
    private $paymentnotes;

    /**
     * @var string $netpayorderid
     */
    private $netpayorderid;

    /**
     * @var string $netpaypaymenttype
     */
    private $netpaypaymenttype;

    /**
     * @var string $orderhold
     */
    private $orderhold;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ordernumber
     *
     * @param integer $ordernumber
     * @return Orders
     */
    public function setOrdernumber($ordernumber)
    {
        $this->ordernumber = $ordernumber;
    
        return $this;
    }

    /**
     * Get ordernumber
     *
     * @return integer 
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }

    /**
     * Set orderstatus
     *
     * @param string $orderstatus
     * @return Orders
     */
    public function setOrderstatus($orderstatus)
    {
        $this->orderstatus = $orderstatus;
    
        return $this;
    }

    /**
     * Get orderstatus
     *
     * @return string 
     */
    public function getOrderstatus()
    {
        return $this->orderstatus;
    }

    /**
     * Set ordertype
     *
     * @param string $ordertype
     * @return Orders
     */
    public function setOrdertype($ordertype)
    {
        $this->ordertype = $ordertype;
    
        return $this;
    }

    /**
     * Get ordertype
     *
     * @return string 
     */
    public function getOrdertype()
    {
        return $this->ordertype;
    }

    /**
     * Set dealtype
     *
     * @param string $dealtype
     * @return Orders
     */
    public function setDealtype($dealtype)
    {
        $this->dealtype = $dealtype;
    
        return $this;
    }

    /**
     * Get dealtype
     *
     * @return string 
     */
    public function getDealtype()
    {
        return $this->dealtype;
    }

    /**
     * Set ordercreateddate
     *
     * @param \DateTime $ordercreateddate
     * @return Orders
     */
    public function setOrdercreateddate($ordercreateddate)
    {
        $this->ordercreateddate = $ordercreateddate;
    
        return $this;
    }

    /**
     * Get ordercreateddate
     *
     * @return \DateTime 
     */
    public function getOrdercreateddate()
    {
        return $this->ordercreateddate;
    }

    /**
     * Set orderstatusdate
     *
     * @param \DateTime $orderstatusdate
     * @return Orders
     */
    public function setOrderstatusdate($orderstatusdate)
    {
        $this->orderstatusdate = $orderstatusdate;
    
        return $this;
    }

    /**
     * Get orderstatusdate
     *
     * @return \DateTime 
     */
    public function getOrderstatusdate()
    {
        return $this->orderstatusdate;
    }

    /**
     * Set cityid
     *
     * @param integer $cityid
     * @return Orders
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;
    
        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer 
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Orders
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return Orders
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;
    
        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set ordersubtotal
     *
     * @param float $ordersubtotal
     * @return Orders
     */
    public function setOrdersubtotal($ordersubtotal)
    {
        $this->ordersubtotal = $ordersubtotal;
    
        return $this;
    }

    /**
     * Get ordersubtotal
     *
     * @return float 
     */
    public function getOrdersubtotal()
    {
        return $this->ordersubtotal;
    }

    /**
     * Set orderpromocode
     *
     * @param string $orderpromocode
     * @return Orders
     */
    public function setOrderpromocode($orderpromocode)
    {
        $this->orderpromocode = $orderpromocode;
    
        return $this;
    }

    /**
     * Get orderpromocode
     *
     * @return string 
     */
    public function getOrderpromocode()
    {
        return $this->orderpromocode;
    }

    /**
     * Set orderpromodiscountamount
     *
     * @param float $orderpromodiscountamount
     * @return Orders
     */
    public function setOrderpromodiscountamount($orderpromodiscountamount)
    {
        $this->orderpromodiscountamount = $orderpromodiscountamount;
    
        return $this;
    }

    /**
     * Get orderpromodiscountamount
     *
     * @return float 
     */
    public function getOrderpromodiscountamount()
    {
        return $this->orderpromodiscountamount;
    }

    /**
     * Set orderusercreditamount
     *
     * @param float $orderusercreditamount
     * @return Orders
     */
    public function setOrderusercreditamount($orderusercreditamount)
    {
        $this->orderusercreditamount = $orderusercreditamount;
    
        return $this;
    }

    /**
     * Get orderusercreditamount
     *
     * @return float 
     */
    public function getOrderusercreditamount()
    {
        return $this->orderusercreditamount;
    }

    /**
     * Set paymentsettingsgroupid
     *
     * @param integer $paymentsettingsgroupid
     * @return Orders
     */
    public function setPaymentsettingsgroupid($paymentsettingsgroupid)
    {
        $this->paymentsettingsgroupid = $paymentsettingsgroupid;
    
        return $this;
    }

    /**
     * Get paymentsettingsgroupid
     *
     * @return integer 
     */
    public function getPaymentsettingsgroupid()
    {
        return $this->paymentsettingsgroupid;
    }

    /**
     * Set orderpaymentmethodname
     *
     * @param string $orderpaymentmethodname
     * @return Orders
     */
    public function setOrderpaymentmethodname($orderpaymentmethodname)
    {
        $this->orderpaymentmethodname = $orderpaymentmethodname;
    
        return $this;
    }

    /**
     * Get orderpaymentmethodname
     *
     * @return string 
     */
    public function getOrderpaymentmethodname()
    {
        return $this->orderpaymentmethodname;
    }

    /**
     * Set paymenttype
     *
     * @param string $paymenttype
     * @return Orders
     */
    public function setPaymenttype($paymenttype)
    {
        $this->paymenttype = $paymenttype;
    
        return $this;
    }

    /**
     * Get paymenttype
     *
     * @return string 
     */
    public function getPaymenttype()
    {
        return $this->paymenttype;
    }

    /**
     * Set paymentstatus
     *
     * @param string $paymentstatus
     * @return Orders
     */
    public function setPaymentstatus($paymentstatus)
    {
        $this->paymentstatus = $paymentstatus;
    
        return $this;
    }

    /**
     * Get paymentstatus
     *
     * @return string 
     */
    public function getPaymentstatus()
    {
        return $this->paymentstatus;
    }

    /**
     * Set transactionid
     *
     * @param string $transactionid
     * @return Orders
     */
    public function setTransactionid($transactionid)
    {
        $this->transactionid = $transactionid;
    
        return $this;
    }

    /**
     * Get transactionid
     *
     * @return string 
     */
    public function getTransactionid()
    {
        return $this->transactionid;
    }

    /**
     * Set orderqty
     *
     * @param integer $orderqty
     * @return Orders
     */
    public function setOrderqty($orderqty)
    {
        $this->orderqty = $orderqty;
    
        return $this;
    }

    /**
     * Get orderqty
     *
     * @return integer 
     */
    public function getOrderqty()
    {
        return $this->orderqty;
    }

    /**
     * Set ordertaxamount
     *
     * @param float $ordertaxamount
     * @return Orders
     */
    public function setOrdertaxamount($ordertaxamount)
    {
        $this->ordertaxamount = $ordertaxamount;
    
        return $this;
    }

    /**
     * Get ordertaxamount
     *
     * @return float 
     */
    public function getOrdertaxamount()
    {
        return $this->ordertaxamount;
    }

    /**
     * Set ordercharityid
     *
     * @param integer $ordercharityid
     * @return Orders
     */
    public function setOrdercharityid($ordercharityid)
    {
        $this->ordercharityid = $ordercharityid;
    
        return $this;
    }

    /**
     * Get ordercharityid
     *
     * @return integer 
     */
    public function getOrdercharityid()
    {
        return $this->ordercharityid;
    }

    /**
     * Set ordercharityamount
     *
     * @param float $ordercharityamount
     * @return Orders
     */
    public function setOrdercharityamount($ordercharityamount)
    {
        $this->ordercharityamount = $ordercharityamount;
    
        return $this;
    }

    /**
     * Get ordercharityamount
     *
     * @return float 
     */
    public function getOrdercharityamount()
    {
        return $this->ordercharityamount;
    }

    /**
     * Set ordercommissionamount
     *
     * @param float $ordercommissionamount
     * @return Orders
     */
    public function setOrdercommissionamount($ordercommissionamount)
    {
        $this->ordercommissionamount = $ordercommissionamount;
    
        return $this;
    }

    /**
     * Get ordercommissionamount
     *
     * @return float 
     */
    public function getOrdercommissionamount()
    {
        return $this->ordercommissionamount;
    }

    /**
     * Set orderpaymentgatewaycharge
     *
     * @param float $orderpaymentgatewaycharge
     * @return Orders
     */
    public function setOrderpaymentgatewaycharge($orderpaymentgatewaycharge)
    {
        $this->orderpaymentgatewaycharge = $orderpaymentgatewaycharge;
    
        return $this;
    }

    /**
     * Get orderpaymentgatewaycharge
     *
     * @return float 
     */
    public function getOrderpaymentgatewaycharge()
    {
        return $this->orderpaymentgatewaycharge;
    }

    /**
     * Set orderotherservicecharge
     *
     * @param float $orderotherservicecharge
     * @return Orders
     */
    public function setOrderotherservicecharge($orderotherservicecharge)
    {
        $this->orderotherservicecharge = $orderotherservicecharge;
    
        return $this;
    }

    /**
     * Get orderotherservicecharge
     *
     * @return float 
     */
    public function getOrderotherservicecharge()
    {
        return $this->orderotherservicecharge;
    }

    /**
     * Set ordertotalamount
     *
     * @param float $ordertotalamount
     * @return Orders
     */
    public function setOrdertotalamount($ordertotalamount)
    {
        $this->ordertotalamount = $ordertotalamount;
    
        return $this;
    }

    /**
     * Get ordertotalamount
     *
     * @return float 
     */
    public function getOrdertotalamount()
    {
        return $this->ordertotalamount;
    }

    /**
     * Set billingfirstname
     *
     * @param string $billingfirstname
     * @return Orders
     */
    public function setBillingfirstname($billingfirstname)
    {
        $this->billingfirstname = $billingfirstname;
    
        return $this;
    }

    /**
     * Get billingfirstname
     *
     * @return string 
     */
    public function getBillingfirstname()
    {
        return $this->billingfirstname;
    }

    /**
     * Set billinglastname
     *
     * @param string $billinglastname
     * @return Orders
     */
    public function setBillinglastname($billinglastname)
    {
        $this->billinglastname = $billinglastname;
    
        return $this;
    }

    /**
     * Get billinglastname
     *
     * @return string 
     */
    public function getBillinglastname()
    {
        return $this->billinglastname;
    }

    /**
     * Set billingaddress1
     *
     * @param string $billingaddress1
     * @return Orders
     */
    public function setBillingaddress1($billingaddress1)
    {
        $this->billingaddress1 = $billingaddress1;
    
        return $this;
    }

    /**
     * Get billingaddress1
     *
     * @return string 
     */
    public function getBillingaddress1()
    {
        return $this->billingaddress1;
    }

    /**
     * Set billingaddress2
     *
     * @param string $billingaddress2
     * @return Orders
     */
    public function setBillingaddress2($billingaddress2)
    {
        $this->billingaddress2 = $billingaddress2;
    
        return $this;
    }

    /**
     * Get billingaddress2
     *
     * @return string 
     */
    public function getBillingaddress2()
    {
        return $this->billingaddress2;
    }

    /**
     * Set billingcity
     *
     * @param string $billingcity
     * @return Orders
     */
    public function setBillingcity($billingcity)
    {
        $this->billingcity = $billingcity;
    
        return $this;
    }

    /**
     * Get billingcity
     *
     * @return string 
     */
    public function getBillingcity()
    {
        return $this->billingcity;
    }

    /**
     * Set billingstate
     *
     * @param integer $billingstate
     * @return Orders
     */
    public function setBillingstate($billingstate)
    {
        $this->billingstate = $billingstate;
    
        return $this;
    }

    /**
     * Get billingstate
     *
     * @return integer 
     */
    public function getBillingstate()
    {
        return $this->billingstate;
    }

    /**
     * Set billingprovince
     *
     * @param string $billingprovince
     * @return Orders
     */
    public function setBillingprovince($billingprovince)
    {
        $this->billingprovince = $billingprovince;
    
        return $this;
    }

    /**
     * Get billingprovince
     *
     * @return string 
     */
    public function getBillingprovince()
    {
        return $this->billingprovince;
    }

    /**
     * Set billingcountry
     *
     * @param integer $billingcountry
     * @return Orders
     */
    public function setBillingcountry($billingcountry)
    {
        $this->billingcountry = $billingcountry;
    
        return $this;
    }

    /**
     * Get billingcountry
     *
     * @return integer 
     */
    public function getBillingcountry()
    {
        return $this->billingcountry;
    }

    /**
     * Set billingzip
     *
     * @param string $billingzip
     * @return Orders
     */
    public function setBillingzip($billingzip)
    {
        $this->billingzip = $billingzip;
    
        return $this;
    }

    /**
     * Get billingzip
     *
     * @return string 
     */
    public function getBillingzip()
    {
        return $this->billingzip;
    }

    /**
     * Set billingphone
     *
     * @param string $billingphone
     * @return Orders
     */
    public function setBillingphone($billingphone)
    {
        $this->billingphone = $billingphone;
    
        return $this;
    }

    /**
     * Get billingphone
     *
     * @return string 
     */
    public function getBillingphone()
    {
        return $this->billingphone;
    }

    /**
     * Set billingemail
     *
     * @param string $billingemail
     * @return Orders
     */
    public function setBillingemail($billingemail)
    {
        $this->billingemail = $billingemail;
    
        return $this;
    }

    /**
     * Get billingemail
     *
     * @return string 
     */
    public function getBillingemail()
    {
        return $this->billingemail;
    }

    /**
     * Set carddata
     *
     * @param string $carddata
     * @return Orders
     */
    public function setCarddata($carddata)
    {
        $this->carddata = $carddata;
    
        return $this;
    }

    /**
     * Get carddata
     *
     * @return string 
     */
    public function getCarddata()
    {
        return $this->carddata;
    }

    /**
     * Set orderremoved
     *
     * @param string $orderremoved
     * @return Orders
     */
    public function setOrderremoved($orderremoved)
    {
        $this->orderremoved = $orderremoved;
    
        return $this;
    }

    /**
     * Get orderremoved
     *
     * @return string 
     */
    public function getOrderremoved()
    {
        return $this->orderremoved;
    }

    /**
     * Set purchasedcurrency
     *
     * @param string $purchasedcurrency
     * @return Orders
     */
    public function setPurchasedcurrency($purchasedcurrency)
    {
        $this->purchasedcurrency = $purchasedcurrency;
    
        return $this;
    }

    /**
     * Get purchasedcurrency
     *
     * @return string 
     */
    public function getPurchasedcurrency()
    {
        return $this->purchasedcurrency;
    }

    /**
     * Set shippingamount
     *
     * @param float $shippingamount
     * @return Orders
     */
    public function setShippingamount($shippingamount)
    {
        $this->shippingamount = $shippingamount;
    
        return $this;
    }

    /**
     * Get shippingamount
     *
     * @return float 
     */
    public function getShippingamount()
    {
        return $this->shippingamount;
    }

    /**
     * Set shipmentstatus
     *
     * @param string $shipmentstatus
     * @return Orders
     */
    public function setShipmentstatus($shipmentstatus)
    {
        $this->shipmentstatus = $shipmentstatus;
    
        return $this;
    }

    /**
     * Get shipmentstatus
     *
     * @return string 
     */
    public function getShipmentstatus()
    {
        return $this->shipmentstatus;
    }

    /**
     * Set shipmentdate
     *
     * @param \DateTime $shipmentdate
     * @return Orders
     */
    public function setShipmentdate($shipmentdate)
    {
        $this->shipmentdate = $shipmentdate;
    
        return $this;
    }

    /**
     * Get shipmentdate
     *
     * @return \DateTime 
     */
    public function getShipmentdate()
    {
        return $this->shipmentdate;
    }

    /**
     * Set carrierdetails
     *
     * @param string $carrierdetails
     * @return Orders
     */
    public function setCarrierdetails($carrierdetails)
    {
        $this->carrierdetails = $carrierdetails;
    
        return $this;
    }

    /**
     * Get carrierdetails
     *
     * @return string 
     */
    public function getCarrierdetails()
    {
        return $this->carrierdetails;
    }

    /**
     * Set paymentnotes
     *
     * @param string $paymentnotes
     * @return Orders
     */
    public function setPaymentnotes($paymentnotes)
    {
        $this->paymentnotes = $paymentnotes;
    
        return $this;
    }

    /**
     * Get paymentnotes
     *
     * @return string 
     */
    public function getPaymentnotes()
    {
        return $this->paymentnotes;
    }

    /**
     * Set netpayorderid
     *
     * @param string $netpayorderid
     * @return Orders
     */
    public function setNetpayorderid($netpayorderid)
    {
        $this->netpayorderid = $netpayorderid;
    
        return $this;
    }

    /**
     * Get netpayorderid
     *
     * @return string 
     */
    public function getNetpayorderid()
    {
        return $this->netpayorderid;
    }

    /**
     * Set netpaypaymenttype
     *
     * @param string $netpaypaymenttype
     * @return Orders
     */
    public function setNetpaypaymenttype($netpaypaymenttype)
    {
        $this->netpaypaymenttype = $netpaypaymenttype;
    
        return $this;
    }

    /**
     * Get netpaypaymenttype
     *
     * @return string 
     */
    public function getNetpaypaymenttype()
    {
        return $this->netpaypaymenttype;
    }

    /**
     * Set orderhold
     *
     * @param string $orderhold
     * @return Orders
     */
    public function setOrderhold($orderhold)
    {
        $this->orderhold = $orderhold;
    
        return $this;
    }

    /**
     * Get orderhold
     *
     * @return string 
     */
    public function getOrderhold()
    {
        return $this->orderhold;
    }
}