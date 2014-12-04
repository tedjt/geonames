<?php

$geodate = date('Ym');

return array(

	'import' => array(

		'path' => storage_path() . '/meta/geonames',

		'files' => array(
			'countries' => 'http://www.geonames.org/premiumdump/%geodate/countryInfo.txt',
			'names'     => 'http://www.geonames.org/premiumdump/%geodate/allCountries.zip',
			'alternate' => 'http://www.geonames.org/premiumdump/%geodate/alternateNames.zip',
			'hierarchy' => 'http://www.geonames.org/premiumdump/%geodate/hierarchy.zip',
			'admin1'    => 'http://www.geonames.org/premiumdump/%geodate/admin1CodesASCII.txt',
			'admin2'    => 'http://www.geonames.org/premiumdump/%geodate/admin2Codes.txt',
			'feature'   => 'http://www.geonames.org/premiumdump/%geodate/featureCodes_en.txt',
			'timezones' => 'http://www.geonames.org/premiumdump/%geodate/timeZones.txt',
		),

		'development' => 'http://download.geonames.org/export/dump/cities15000.zip',

		'wildcard' => 'http://download.geonames.org/export/dump/%s.zip',
	),

);
