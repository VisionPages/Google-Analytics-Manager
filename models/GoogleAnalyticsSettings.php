<?php namespace VisionPages\GoogleAnalyticsCode\Models;

use Model;

class GoogleAnalyticsSettings extends Model
{
	public $implement = ['System.Behaviors.SettingsModel'];
	public $settingsCode = 'visionpages_google_analytics_code';
	public $settingsFields = 'fields.yaml';
}

?>