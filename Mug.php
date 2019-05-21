<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\Mug;

use Piwik\Plugin;

class Mug extends Plugin
{
    public function getListHooksRegistered()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $vars)
    {
        #$vars->fontFamilyBase = 'Arial, Verdana, sans-serif';
        #$vars->colorBrand = '#007B3C';
        #$vars->colorWidgetTitleBackground = '#007B3C';
        #$vars->colorHeaderBackground = '#4a4a4a';
        #$vars->colorHeaderText = '#ffffff';
        #$vars->colorBackgroundBase = '#4a4a4a';
        #$vars->colorMenuContrastBackground = '#f00';
        #$vars->colorBrandContrast = '#51AE32';
        $vars->colorLink = '#51AE32';
        #$vars->colorText = '#51AE32';
        #$vars->colorBaseSeries = '#51AE32';
    }
}
