<?php

# Class implementing the Campop online atlas
require_once ('online-atlas/onlineAtlas.php');
class populationspast extends onlineAtlas
{
	# Function to assign defaults additional to the general application defaults
	public function defaults ()
	{
		# Add implementation defaults
		$defaults = array (
			
			// Application name
			'applicationName' => 'Populations Past',
			'pageHeader' => 'Populations Past &ndash; Atlas of Victorian and Edwardian Population',
			
			// Database
			'database' => 'populationspast',
			'username' => 'populationspast',
			'password' => NULL,
			
			// Style
			'bodyClass' => 'campl-theme-1',
			
			// Geocoder
			'geocoderApiKey' => NULL,		// Obtain at https://www.cyclestreets.net/api/apply/
			
			// First run message
			'firstRunMessageHtml' =>
				  '<p><strong>Welcome to Populations Past, from CAMPOP</strong></p>'
				. '<p>Populationspast.org, the Atlas of Victorian and Edwardian Population, enables you to explore demographic changes from 1851-1911.</p>'
				. '<p>Please note that various improvements are still being made to the site.</p>',
			
			// Download filename base
			'downloadFilenameBase' => 'populationspast',
			
			// Datasets
			'datasets' => array (1851, 1861, 1881, 1891, 1901, 1911),
			
			// More detailed datasets when close in
			'closeDatasets' => array (1851, 1861, 1881, 1891, 1901, 1911),
			'closeName' => 'parish',
			'closeZoom' => 10,
			'closeModeSimplifyFar' => 500,
			
			// Disable zoomed out mode
			'zoomedOut' => false,
			
			// Fields
			'defaultField' => 'TMFR',
			'fields' => array (
				
				// General fields
				'year' => array (
					'label' => 'Year',
					'description' => 'Year',
					'intervals' => '',
					'general' => true,
				),
				'REGDIST' => array (
					'label' => 'Registration district',
					'description' => 'Registration district',
					'intervals' => '',
					'general' => true,
				),
				'SUBDIST' => array (
					'label' => 'Sub-district',
					'description' => 'Sub-district',
					'intervals' => '',
					'general' => true,
				),
				
				// Data fields
				'TMFR' => array (
					'label' => 'Total Marital Fertility Rate',
					'description' => 'The average number of children per married woman aged 20-49.',
					'intervals' => '0-4, 4-5, 5-6, 6-7, 7-8, 8-9, 9+',
				),
				'TFR' => array (
					'label' => 'Total Fertility Rate',
					'description' => 'The average number of children per woman aged 20-49, irrespective of marital status.',
					'intervals' => '0-2, 2-3, 3-4, 4-5, 5-6, 6-7, 7+',
				),
				'LEGIT_RATE' => array (
					'label' => 'Legitimate birth rate',
					'description' => 'The number of legitimate live births per 1,000 married women aged 15-49',
					'intervals' => '0-150, 150-175, 175-200, 200-225, 225-250, 250-275, 275+',
				),
				'ILEG_RATE' => array (
					'label' => 'Illegitimate birth rate',
					'description' => 'The number of illegitimate live births per 1,000 single, widowed and divorced women aged 15-49',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'ILEG_RATIO' => array (
					'label' => 'Illegitimacy Ratio',
					'description' => 'The number of illegitimate live births per 100 total live births',
					'intervals' => '0-3, 3-6, 6-9, 9-12, 12-15, 15-18, 18+',
				),
				'IMR' => array (
					'label' => 'Infant Mortality Rate',
					'description' => 'The number of children who died during the first year of life out of 1,000 live births',
					'intervals' => '0-80, 80-100, 100-120, 120-140, 140-160, 160-180, 180+',
				),
				'ECMR' => array (
					'label' => 'Early Childhood Mortality Rate',
					'description' => 'The probability of dying in early childhood between the exact ages of 1 and 5 (also known in life table notation as 4q1)',
					'intervals' => '0-20, 20-40, 40-60, 60-80, 80-100, 100-120, 120+',
				),
				'SC1' => array (
					'label' => 'Social Class 1: upper and middle class',
					'description' => 'The percentage of employed men aged 15-64 in social class 1: upper and middle class',
					'intervals' => '0-1.5, 1.5-3, 3-4.5, 4.5-6, 6-7.5, 7.5-9, 9+',
				),
				'SC2' => array (
					'label' => 'Social Class 2: intermediate class',
					'description' => 'The percentage of employed men aged 15-64 in social class 2: intermediate class',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC3' => array (
					'label' => 'Social Class 3: skilled workmen',
					'description' => 'The percentage of employed men aged 15-64 in social class 3: skilled workmen',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC4' => array (
					'label' => 'Social Class 4: intermediate class',
					'description' => 'The percentage of employed men aged 15-64 in social class 4: intermediate class',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC5' => array (
					'label' => 'Social Class 5: unskilled workmen',
					'description' => 'The percentage of employed men aged 15-64 in social class 5: unskilled workmen',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC6' => array (
					'label' => 'Social Class 6: textile workers',
					'description' => 'The percentage of employed men aged 15-64 in social class 6: textile workers',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC7' => array (
					'label' => 'Social Class 7: miners',
					'description' => 'The percentage of employed men aged 15-64 in social class 7: miners',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SC8' => array (
					'label' => 'Social Class 8: agricultural labourers',
					'description' => 'The percentage of employed men aged 15-64 in social class 8: agricultural labourers',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'FMAR_PRATE' => array (
					'label' => 'Married women working',
					'description' => 'The percentage of married women aged 15 or older working',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'FNM_PRATE' => array (
					'label' => 'Single women working',
					'description' => 'The percentage of single women aged 15 or older working',
					'intervals' => '0-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90+',
				),
				'FWID_PRATE' => array (
					'label' => 'Widowed women working',
					'description' => 'The percentage of widowed women aged 15 or older working',
					'intervals' => '0-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90+',
				),
				'IRISH_BORN' => array (
					'label' => 'Irish born',
					'description' => 'The percentage of population born in Ireland',
					'intervals' => '0-1, 1-3, 3-5, 5-7, 7-9, 9-11, 11+',
				),
				'SCOT_BORN' => array (
					'label' => 'Scottish born',
					'description' => 'The percentage of population born in Scotland',
					'intervals' => '0-1, 1-3, 3-5, 5-7, 7-9, 9-11, 11+',
				),
				'POP_DENS' => array (
					'label' => 'Population Density',
					'description' => 'The number of people per acre (one acre is 4047m²)',
					'intervals' => '0-1, 1-5, 5-50, 50-100, 100-200, 200-300, 300+',
				),
				'HOUSE_SERV' => array (
					'label' => 'Houses with a live-in servant',
					'description' => 'The percentage of households with live-in servants',
					'intervals' => '0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'M_SMAM' => array (
					'label' => 'Singulate Mean Age at Marriage (male)',
					'description' => 'Measure of marriage timing, the average number of person-years lived in the single (never married) state among those who marry before age 50. It is calculated from the proportions single by age.',
					'intervals' => '0-25, 25-26, 26-27, 27-28, 28-29, 29-30, 30+',
				),
				'F_SMAM' => array (
					'label' => 'Singulate Mean Age at Marriage (female)',
					'description' => 'Measure of marriage timing, the average number of person-years lived in the single (never married) state among those who marry before age 50. It is calculated from the proportions single by age.',
					'intervals' => '0-25, 25-26, 26-27, 27-28, 28-29, 29-30, 30+',
				),
				'M_CEL_4554' => array (
					'label' => 'Celibate (men)',
					'description' => 'Percentage of never married men between ages 45 to 54',
					'intervals' => '0-5, 5-7, 7-9, 9-11, 11-13, 13-15, 15+',
				),
				'F_CEL_4554' => array (
					'label' => 'Celibate (women)',
					'description' => 'Percentage of never married women between ages 45 to 54',
					'intervals' => '0-5, 5-7, 7-9, 9-11, 11-13, 13-15, 15+',
				),
				'TYPE' => array (
					'label' => 'Type of place',
					'description' => 'Types of places are defined by the occupational structure of registration sub-district (RSD).',
					'intervals' => array (
						'agriculture'		=> '#74b273',
						'semi-rural'		=> '#d2ffbe',
						'professional'		=> '#0071fe',
						'semi-professional'	=> '#bee8ff',
						'mining'			=> '#cd6667',
						'textile'			=> '#aa66cd',
						'transport'			=> '#ffaa01',
						'otherUrban'		=> '#b2b2b2',
					),
				),
			),
		);
		
		# Merge in the default defaults
		$defaults += parent::defaults ();
		
		# Return the defaults
		return $defaults;
	}
	
	
	# Database structure
	public function databaseStructureSpecificFields ()
	{
		# Return the SQL
		return $sql = "
			  /* Domain-specific fields */
			  
			  `CEN` INT(11) NOT NULL COMMENT 'CEN (e.g. from CEN_1851)',
			  `COUNTRY` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Country',
			  `DIVISION` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Division',
			  `REGCNTY` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'County',
			  `REGDIST` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Registration district',
			  `SUBDIST` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sub-district',
			  `TMFR` DECIMAL(14,7) NOT NULL COMMENT 'Total Marital Fertility Rate',
			  `TFR` DECIMAL(14,7) NOT NULL COMMENT 'Total Fertility Rate',
			  `IMR` DECIMAL(14,7) NOT NULL COMMENT 'Infant Mortality Rate',
			  `LEGIT_RATE` DECIMAL(14,7) NOT NULL COMMENT 'Legitimate birth rate',
			  `ILEG_RATE` DECIMAL(14,7) NOT NULL COMMENT 'Illegitimate birth rate',
			  `ILEG_RATIO` DECIMAL(14,7) NOT NULL COMMENT 'Illegitimacy Ratio',
			  `ECMR` DECIMAL(14,7) NOT NULL COMMENT 'Early Childhood Mortality Rate',
			  `SC1` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 1',
			  `SC2` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 2',
			  `SC3` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 3',
			  `SC4` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 4',
			  `SC5` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 5',
			  `SC6` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 6',
			  `SC7` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 7',
			  `SC8` DECIMAL(14,7) NOT NULL COMMENT 'Social Class 8',
			  `FMAR_PRATE` DECIMAL(14,7) NOT NULL COMMENT 'Married women working',
			  `FNM_PRATE` DECIMAL(14,7) NOT NULL COMMENT 'Single women working',
			  `FWID_PRATE` DECIMAL(14,7) NOT NULL COMMENT 'Widowed women working',
			  `SCOT_BORN` DECIMAL(14,7) NOT NULL COMMENT 'Scottish born',
			  `IRISH_BORN` DECIMAL(14,7) NOT NULL COMMENT 'Irish born',
			  `POP_DENS` DECIMAL(14,7) NOT NULL COMMENT 'Population Density',
			  `HOUSE_SERV` DECIMAL(14,7) NOT NULL COMMENT 'Houses with a live-in servant',
			  `M_SMAM` DECIMAL(14,7) NOT NULL COMMENT 'Singulate Mean Age at Marriage (Male)',
			  `F_SMAM` DECIMAL(14,7) NOT NULL COMMENT 'Singulate Mean Age at Marriage (Female)',
			  `M_CEL_4554` DECIMAL(14,7) NOT NULL COMMENT 'Celibate (Male)',
			  `F_CEL_4554` DECIMAL(14,7) NOT NULL COMMENT 'Celibate (Female)',
			  `TYPE` VARCHAR(255) NOT NULL COMMENT 'Type of place',
		";
	}
	
	
	# Additional initialisation
	public function main ()
	{
		# Determine the extended application (repository) directory
		$this->extendedApplicationRoot = dirname (__FILE__);
		
		# Set the exports directory
		$this->settings['exportsDirectory'] = "{$this->extendedApplicationRoot}/exports/";
		
		# Run base main
		parent::main ();
		
	}
	
	
	# Home page
	public function home ($aboutPath = false)
	{
		return parent::home ($this->extendedApplicationRoot);
	}
	
	
	# About page
	public function about ($path = false)
	{
		return parent::about ($this->extendedApplicationRoot);
	}
	
	
	# Acknowledgements page
	public function acknowledgements ($path = false)
	{
		return parent::acknowledgements ($this->extendedApplicationRoot);
	}
}

?>
