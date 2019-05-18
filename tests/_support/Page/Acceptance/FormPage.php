<?php
namespace Page\Acceptance;

/**
 * Class FormPage
 * @package Page\Acceptance
 */
class FormPage
{
	/**
	 * @var string
	 */
	public static $URL = '/reservationform';

	/**
	 * @var string of inputs in the Form
	 */
	public static $tableIdInput     =   '//input[@id="tableID"]';

	/**
	 * @var string
	 */
	public static $numOfPerInput    =   '//input[@id="numberofperson"]';

	/**
	 * @var string
	 */
	public static $dateInput        =   '//input[@id="date"]';

	/**
	 * @var string
	 */
	public static $decripInput      =   '//textarea[@id="description"]';

	/**
	 * @var string
	 */
	public static $startTimeInput   =   '//input[@id="startTime"]';

	/**
	 * @var string of Icon when enter incorrect value
	 */
	public static $errorTableIdIcon   =   '(//img[@class="t-error-icon"])[1]';

	/**
	 * @var string
	 */
	public static $errorNumOfPerIcon  =   '(//img[@class="t-error-icon"])[2]';

	/**
	 * @var string
	 */
	public static $errorStartTimeIcon =   '(//img[@class="t-error-icon"])[3]';

	/**
	 * @var string of label when enter incorrect value
	 */
	public static $idErrorLabel       =   '//label[@id="tableID:label"]';

	/**
	 * @var string
	 */
	public static $numOfPerErrorLabel =   '//label[@id="numberofperson:label"]';

	/**
	 * @var string
	 */
	public static $stTimeErrorLabel   =   '//label[@id="startTime:label"]';

	/**
	 * @var string of [add/edit] button
	 */
	public static $btnAddEdit   =   '//input[@class="t-beaneditor-submit"]';

	/**
	 * @var string of clear tag
	 */
	public static $clear        =   "//a[text()=\"clear\"]";

	/**
	 * @param $param
	 * @return string
	 */
	public static $textForm     =   '//h1[text()=" Table Booking Form"]';

	/**
	 * @param $param
	 * @return string
	 */
	public static function route($param)
	{
		return static::$URL.$param;
	}

	/**
	 * @var \AcceptanceTester;
	 */
	protected $acceptanceTester;

	/**
	 * FormPage constructor.
	 * @param \AcceptanceTester $I
	 */
	public function __construct(\AcceptanceTester $I)
	{
		$this->acceptanceTester = $I;
	}

}
