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
			'pageHeader' => '<img id="logo" src="' . $this->baseUrl . '/images/logos/populationspast.png" alt="Populations Past &ndash; Atlas of Victorian and Edwardian Population" border="0" align="right" width="150" height="112" /> Populations Past &ndash;<br />Atlas of Victorian and Edwardian Population',
			
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
			
			// CSV downloads
			'downloadFilenameBase' => 'populationspast',
			'downloadInitialNotice' => "This data has been produced by the 'Atlas of Victorian Fertility Decline' project (PI: A.M. Reid) with funding from the ESRC (ES/L015463/1), using an enhanced version of data from Schürer, K. and Higgs, E. (2014). Integrated Census Microdata (I-CeM), 1851-1911. [data collection]. Colchester, Essex: UK Data Archive [distributor]. SN: 7481, http://dx.doi.org/10.5255/UKDA-SN-7481-1.",
			
			// Default map location
			'defaultLocation' => array (
				'latitude' => 54.457,
				'longitude' => -4.076,
				'zoom' => 6,
			),
			
			// Datasets
			'datasets' => array (1851, 1861, 1871, 1881, 1891, 1901, 1911),
			
			// More detailed datasets when close in
			'closeDatasets' => array (1851, 1861, 1871, 1881, 1891, 1901, 1911),
			'closeName' => 'subdist',
			'closeZoom' => 10,
			'closeField' => 'SUBDIST',
			'farField' => 'REGDIST',
			'closeModeSimplifyFar' => 500,
			
			// Disable zoomed out mode
			'zoomedOut' => false,
			
			// Unknown values
			'colourUnknown' => false,
			
			// Fields
			'expandableHeadings' => true,
			'defaultField' => 'IMR',
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
				'POP' => array (
					'label' => 'Population',
					'description' => 'Population',
					'intervals' => '',
					'general' => true,
				),
				'ACRES' => array (
					'label' => 'Acreage',
					'description' => 'Acreage',
					'intervals' => '',
					'general' => true,
				),
				
				'_' => array (
					'label' => '[Show background map only]',
					'description' => 'Removes data from the map, showing only the background',
					'intervals' => '',
				),
				'POP_DENS' => array (
					'label' => 'Population density',
					'description' => 'The number of people per acre',
					'intervals' => '<1, 1 - <5, 5 - <50, 50 - <100, 100 - <200, 200 - <300, ≥300',
				),
				'TYPE' => array (
					'label' => 'Type of place',
					'description' => 'Type of place',
					'intervals' => array (
						'agriculture'		=> '#74b273',
						'semi-rural'		=> '#d2ffbe',
						'professional'		=> '#0071fe',
						'semi-professional'	=> '#bee8ff',
						'mining'			=> '#cd6667',
						'textile'			=> '#aa66cd',
						'transport'			=> '#ffaa01',
						'other urban'		=> '#b2b2b2',
					),
				),
				// Population (POP) for download only
				// Acres (ACRES) for download only
				
				'TFR' => array (
					'label' => 'Total Fertility Rate',
					'description' => 'The average number of children per woman',
					'intervals' => '<2, 2 - <3, 3 - <4, 4 - <5, 5 - <6, 6 - <7, ≥7',
					'grouping' => 'Fertility',
				),
				'TMFR' => array (
					'label' => 'Total Marital Fertility Rate',
					'description' => 'The average number of children per married woman',
					'intervals' => '<5, 5 - <6, 6 - <7, 7 - <8, 8 - <9, 9 - <10, ≥10',
					'grouping' => 'Fertility',
				),
				'LEGIT_RATE' => array (
					'label' => 'Legitimate birth rate',
					'description' => 'The number of legitimate births per 1,000 married women',
					'intervals' => '<150, 150 - <175, 175 - <200, 200 - <225, 225 - <250, 250 - <275, ≥275',
					'grouping' => 'Fertility',
				),
				'ILEG_RATE' => array (
					'label' => 'Illegitimate birth rate',
					'description' => 'The number of illegitimate births per 1,000 unmarried women',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Fertility',
				),
				'ILEG_RATIO' => array (
					'label' => 'Illegitimacy Ratio',
					'description' => 'The number of illegitimate births per 100 total births',
					'intervals' => '<3, 3 - <6, 6 - <9, 9 - <12, 12 - <15, 15 - <18, ≥18',
					'grouping' => 'Fertility',
				),
				
				'F_SMAM' => array (
					'label' => 'Age at marriage (female)',
					'description' => 'The average age at marriage for women',
					'intervals' => '<25, 25 - <26, 26 - <27, 27 - <28, 28 - <29, 29 - <30, ≥30',
					'grouping' => 'Marriage',
				),
				'M_SMAM' => array (
					'label' => 'Age at marriage (male)',
					'description' => 'The average age at marriage for men',
					'intervals' => '<25, 25 - <26, 26 - <27, 27 - <28, 28 - <29, 29 - <30, ≥30',
					'grouping' => 'Marriage',
				),
				'F_CEL_4554' => array (
					'label' => 'Celibacy (women)',
					'description' => 'Never-married women as a percentage of all women aged 45 to 54',
					'intervals' => '<5, 5 - <7, 7 - <9, 9 - <11, 11 - <13, 13 - <15, ≥15',
					'grouping' => 'Marriage',
				),
				'M_CEL_4554' => array (
					'label' => 'Celibacy (men)',
					'description' => 'Never-married men as a percentage of all men aged 45 to 54',
					'intervals' => '<5, 5 - <7, 7 - <9, 9 - <11, 11 - <13, 13 - <15, ≥15',
					'grouping' => 'Marriage',
				),
				
				'IMR' => array (
					'label' => 'Infant Mortality Rate',
					'description' => 'The number of children out of 1,000 born who died before their first birthday',
					'intervals' => '<60, 60 - <80, 80 - <110, 110 - <140, 140 - <160, 160 - <180, ≥180',
					'grouping' => 'Mortality and health',
				),
				'ECMR' => array (
					'label' => 'Early Childhood Mortality Rate',
					'description' => 'The number of children dying out of 1,000 children aged 1 to 5',
					'intervals' => '<20, 20 - <40, 40 - <60, 60 - <80, 80 - <100, 100 - <120, ≥120',
					'grouping' => 'Mortality and health',
				),
				'DOC' => array (
					'label' => 'Doctors',
					'description' => 'The number of doctors per 10,000 people',
					'intervals' => '<2, 2 - <4, 4 - <6, 6 - <8, 8 - <10, 10 - <12, ≥12',
					'grouping' => 'Mortality and health',
				),
				
				'SP_FAM' => array (
					'label' => 'Lone parent households',
					'description' => 'Households containing a lone-parent family, as a percentage of all households',
					'intervals' => '<2.5, 2.5 - <4, 4 - <5.5, 5.5 - <7.0, 7.0 - <8.5, 8.5 - <10, ≥10',
					'grouping' => 'Households',
				),
				'SINGLE_PER' => array (
					'label' => 'Single person households',
					'description' => 'Households containing just one person, as a percentage of all households',
					'intervals' => '<3, 3 - <5, 5 - <7, 7 - <9, 9 - <11, 11 - <13, ≥13',
					'grouping' => 'Households',
				),
				'BOARD' => array (
					'label' => 'Households with boarders',
					'description' => 'Households containing at least one boarder, as a percentage of all households',
					'intervals' => '<3, 3 - <6, 6 - <9, 9 - <12, 12 - <15, 15 - <18, ≥18',
					'grouping' => 'Households',
				),
				'HH_KIN' => array (
					'label' => 'Households with kin',
					'description' => 'Households containing people related to the head but not his/her immediate family, as percentage of all households',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, 30 - <35, ≥35',
					'grouping' => 'Households',
				),
				'HOUSE_SERV' => array (
					'label' => 'Households with live-in servants',
					'description' => 'Households containing at least one live-in servant, as a percentage of all households',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Households',
				),
				
				'DEPEND' => array (
					'label' => 'Dependency ratio',
					'description' => 'The number of dependents (children and elderly) per 100 working-age people',
					'intervals' => '<45, 45 - <50, 50 - <55, 55 - <60, 60 - <65, 65 - <70, ≥70',
					'grouping' => 'Age structure',
				),
				'C_WORK_AGE' => array (
					'label' => 'Child dependency ratio',
					'description' => 'The number of children per 100 working-age people',
					'intervals' => '<35, 35 - <40, 40 - <45, 45 - <50, 50 - <55, 55 - <60, ≥60',
					'grouping' => 'Age structure',
				),
				'ELD_WORK_A' => array (
					'label' => 'Old age dependency ratio',
					'description' => 'The number of elderly people per 100 working-age people',
					'intervals' => '<4, 4 - <6, 6 - <8, 8 - <10, 10 - <12, 12 - <14, ≥14',
					'grouping' => 'Age structure',
				),
				'AV_AGE' => array (
					'label' => 'Average age',
					'description' => 'Average (mean) age of the population',
					'intervals' => '<24, 24 - <26, 26 - <28, 28 - <30, 30 - <32, 32 - <34, ≥34',
					'grouping' => 'Age structure',
				),
				'AV_AGE_F' => array (
					'label' => 'Average age for women',
					'description' => 'Average (mean) age of the female population',
					'intervals' => '<24, 24 - <26, 26 - <28, 28 - <30, 30 - <32, 32 - <34, ≥34',
					'grouping' => 'Age structure',
				),
				'AV_AGE_M' => array (
					'label' => 'Average age for men',
					'description' => 'Average (mean) age of the male population',
					'intervals' => '<24, 24 - <26, 26 - <28, 28 - <30, 30 - <32, 32 - <34, ≥34',
					'grouping' => 'Age structure',
				),
				
				'SR' => array (
					'label' => 'Sex ratio',
					'description' => 'Number of working-age men per 100 working-age women',
					'intervals' => '<75, 75 - <85, 85 - <95, 95 - <105, 105 - <115, 115 - <125, ≥125',
					'grouping' => 'Migration',
				),
				
				'LTM_10_F' => array (
					'label' => 'Women born <10km away',
					'description' => 'Women born <10km away from the place they were living as a percentage of all women',
					'intervals' => '<30, 30 - <40, 40 - <50, 50 - <60, 60 - <70, 70 - <80, ≥80',
					'grouping' => 'Migration',
				),
				
				'LTM_10_M' => array (
					'label' => 'Men born <10km away',
					'description' => 'Men born <10km away from the place they were living as a percentage of all men',
					'intervals' => '<30, 30 - <40, 40 - <50, 50 - <60, 60 - <70, 70 - <80, ≥80',
					'grouping' => 'Migration',
				),
				
				'LTM_1050_F' => array (
					'label' => 'Women born 10-49km away',
					'description' => 'Women born 10-49km away from the place they were living as a percentage of all women',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, 30 - <35, ≥35',
					'grouping' => 'Migration',
				),
				
				'LTM_1050_M' => array (
					'label' => 'Men born 10-49km away',
					'description' => 'Men born 10-49km away from the place they were living as a percentage of all men',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, 30 - <35, ≥35',
					'grouping' => 'Migration',
				),
				
				'LTM_50_F' => array (
					'label' => 'Women born >50km away',
					'description' => 'Women born ≥50km away from the place they were living as a percentage of all women',
					'intervals' => '<2, 2 - <5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, ≥25',
					'grouping' => 'Migration',
				),
				
				'LTM_50_M' => array (
					'label' => 'Men born >50km away',
					'description' => 'Men born ≥50km away from the place they were living as a percentage of all men',
					'intervals' => '<2, 2 - <5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, ≥25',
					'grouping' => 'Migration',
				),
				
				'IRL_F' => array (
					'label' => 'Women born in Ireland',
					'description' => 'Women born in Ireland as a percentage of all women',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'IRL_M' => array (
					'label' => 'Men born in Ireland',
					'description' => 'Men born in Ireland as a percentage of all men',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'GB_F' => array (
					'label' => 'Women born in other parts of Great Britain (England and Wales or Scotland)',
					'description' => 'Women born in other parts of Great Britain as a percentage of all women',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'GB_M' => array (
					'label' => 'Men born in other parts of Great Britain (England and Wales or Scotland)',
					'description' => 'Men born in other parts of Great Britain as a percentage of all men',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'FOREIGN_F' => array (
					'label' => 'Women born overseas',
					'description' => 'Women born in overseas as a percentage of all women',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'FOREIGN_M' => array (
					'label' => 'Men born overseas',
					'description' => 'Men born in overseas as a percentage of all men',
					'intervals' => '<0.4, 0.4 - <0.8, 0.8 - <1.5, 1.5 - <2, 2 - <3, 3 - <5, ≥5',
					'grouping' => 'Migration',
				),
				
				'HC1' => array (
					'label' => 'SES 1: non-manual high skilled',
					'description' => 'Non-manual high skilled men as a percentage of all working-age men',
					'intervals' => '<1, 1 - <2, 2 - <3, 3 - <4, 4 - <5, 5 - <6, ≥6',
					'grouping' => 'Socio-economic status',
				),
				'HC2' => array (
					'label' => 'SES 2: non-manual low skilled',
					'description' => 'Non-manual medium or lower skilled men as a percentage of all working-age men',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Socio-economic status',
				),
				'HC3' => array (
					'label' => 'SES 3: manual high skilled',
					'description' => 'Manual high or medium skilled men as a percentage of all working-age men',
					'intervals' => '<20, 20 - <25, 25 - <30, 30 - <35, 35 - <40, 40 - <45, ≥45',
					'grouping' => 'Socio-economic status',
				),
				'HC4' => array (
					'label' => 'SES 4: manual low skilled',
					'description' => 'Manual lower skilled men as a percentage of all working-age men',
					'intervals' => '<10, 10 - <20, 20 - <30, 30 - <40, 40 - <50, 50 - <60, ≥60',
					'grouping' => 'Socio-economic status',
				),
				'HC5' => array (
					'label' => 'SES 5: manual unskilled',
					'description' => 'Manual unskilled men as a percentage of all working-age men',
					'intervals' => '<20, 20 - <30, 30 - <40, 40 - <50, 50 - <60, 60 - <70, ≥70',
					'grouping' => 'Socio-economic status',
				),
				'SC1' => array (
					'label' => "RG's class 1: professional",
					'description' => "RG's social class 1 (professional and managerial workers) as a percentage of all working-age men",
					'intervals' => '<1.5, 1.5 - <3, 3 - <4.5, 4.5 - <6, 6 - <7.5, 7.5 - <9, ≥9',
					'grouping' => 'Social class - RG',
				),
				'SC2' => array (
					'label' => "RG's class 2: non-manual skilled",
					'description' => "RG's social class 2 (skilled non-manual workers) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC3' => array (
					'label' => "RG's class 3: manual skilled",
					'description' => "RG's social class 3 (skilled workmen) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC4' => array (
					'label' => "RG's class 4: manual semi-skilled",
					'description' => "RG's social class 4 (semi-skilled workmen) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC5' => array (
					'label' => "RG's class 5: manual unskilled",
					'description' => "RG's social class 5 (unskilled workmen) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC6' => array (
					'label' => "RG's class 6: textile workers",
					'description' => "RG's social class 6 (textile workers) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC7' => array (
					'label' => "RG's class 7: miners",
					'description' => "RG's social class 7 (miners) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				'SC8' => array (
					'label' => "RG's class 8: agricultural labourers",
					'description' => "RG's social class 8 (agricultural labourers) as a percentage of all working-age men",
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => 'Social class - RG',
				),
				
				'FMAR_PRATE' => array (
					'label' => 'Married women working',
					'description' => 'Married women working as a percentage of all married women',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => "Women's work",
				),
				'FNM_PRATE' => array (
					'label' => 'Single women working',
					'description' => 'Single women working as a percentage of all single women',
					'intervals' => '<40, 40 - <50, 50 - <60, 60 - <70, 70 - <80, 80 - <90, ≥90',
					'grouping' => "Women's work",
				),
				'FWID_PRATE' => array (
					'label' => 'Widowed women working',
					'description' => 'Widowed women working as a percentage of all widowed women',
					'intervals' => '<40, 40 - <50, 50 - <60, 60 - <70, 70 - <80, 80 - <90, ≥90',
					'grouping' => "Women's work",
				),
				'F_DOM' => array (
					'label' => 'Domestic servants (women)',
					'description' => 'Domestic servants as a percentage of all employed working-age women',
					'intervals' => '<10, 10 - <20, 20 - <30, 30 - <40, 40 - <50, 50 - <60, ≥60',
					'grouping' => "Women's work",
				),
				'F_TEX' => array (
					'label' => 'Textile workers (female)',
					'description' => 'Textile workers as a percentage of all employed working-age women',
					'intervals' => '<1, 1 - <5, 5 - <10, 10 - <20, 20 - <30, 30 - <40, ≥40',
					'grouping' => "Women's work",
				),
				
				'C_TEACHER' => array (
					'label' => 'Children per teacher',
					'description' => 'Number of children per teacher',
					'intervals' => '<25, 25 - <50, 50 - <75, 75 - <100, 100 - <125, 125 - <150, ≥150',
					'grouping' => "Children's work and schooling",
				),
				'F_CL_1013' => array (
					'label' => 'Girls aged 10-13 working',
					'description' => 'Number of girls in employment as a percentage of all girls aged 10-13',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => "Children's work and schooling",
				),
				'M_CL_1013' => array (
					'label' => 'Boys aged 10-13 working',
					'description' => 'Number of boys in employment as a percentage of all boys aged 10-13',
					'intervals' => '<5, 5 - <10, 10 - <15, 15 - <20, 20 - <25, 25 - <30, ≥30',
					'grouping' => "Children's work and schooling",
				),
				'F_CL_1418' => array (
					'label' => 'Girls aged 14-18 working',
					'description' => 'Number of girls in employment as a percentage of all girls aged 14-18',
					'intervals' => '<20, 20 - <25, 25 - <30, 30 - <35, 35 - <40, 40 - <45, ≥45',
					'grouping' => "Children's work and schooling",
				),
				'M_CL_1418' => array (
					'label' => 'Boys aged 14-18 working',
					'description' => 'Number of boys in employment as a percentage of all boys aged 14-18',
					'intervals' => '<20, 20 - <25, 25 - <30, 30 - <35, 35 - <40, 40 - <45, ≥45',
					'grouping' => "Children's work and schooling",
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
		# Compile the SQL
		$sql = "
			  /* Domain-specific fields */
			  
			  `CEN` INT NULL COMMENT 'CEN (e.g. from CEN_1851)',
			  `COUNTRY` VARCHAR(255) NULL COMMENT 'Country',
			  `DIVISION` VARCHAR(255) NULL COMMENT 'Division',
			  `REGCNTY` VARCHAR(255) NULL COMMENT 'County',
			  `REGDIST` VARCHAR(255) NOT NULL COMMENT 'Registration district',
			  `SUBDIST` VARCHAR(255) NULL COMMENT 'Sub-district',
			  `POP` INT(11) NULL COMMENT 'Population',
			  `ACRES` DECIMAL(14,7) NULL COMMENT 'Acreage',
		";
		
		# Add each data field
		foreach ($this->settings['fields'] as $field => $attributes) {
			if (!isSet ($attributes['general']) && !in_array ($field, array ('TYPE', '_'))) {
				$sql .= "\n\t\t\t  `{$field}` DECIMAL(14,7) NULL COMMENT '" . str_replace ("'", "\\'", $attributes['label']) . "',";
			}
		}
		
		# Add TYPE field
		$sql .= "
			  `TYPE` VARCHAR(255) NOT NULL COMMENT 'Type of place',
		";
		
		# Return the SQL
		return $sql;
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
	public function home ($aboutPath = false, $additionalCss = false)
	{
		return parent::home ($this->extendedApplicationRoot);
	}
	
	
	# About page
	public function about ($path = false)
	{
		return parent::about ($this->extendedApplicationRoot);
	}
	
	
	# Resources page
	public function resources ($path = false)
	{
		return parent::resources ($this->extendedApplicationRoot);
	}
	
	
	# Acknowledgements page
	public function acknowledgements ($path = false)
	{
		return parent::acknowledgements ($this->extendedApplicationRoot);
	}
	
	
	# Contacts page
	public function contacts ($path = false)
	{
		return parent::contacts ($this->extendedApplicationRoot);
	}
}

?>
