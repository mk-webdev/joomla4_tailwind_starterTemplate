<?php 
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Mkwebdev
 *
 * @copyright   (C) 2023 Marco Kadlubski
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

$app = Factory::getApplication();
$wa = $this->getWebAssetManager();


// Add Favicon from images folder
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'icon', 'rel', ['type' => 'image/x-icon']);

$tplpath = '/templates/' . $this->template;


$logoparam = $this->params->get("logo");
//echo("This is a param-test: " .$logoparam);

//Register our web assets (Css/JS)
$wa->useStyle('styles');
$wa->useScript('script');


$this->setMetaData('viewport', 'width=device-width, initial-scale=1');

?>

<!DOCTYPE html>
<html lang="<?= $this->language ?>" dir="<?= $this->direction; ?>">

<head>
    <jdoc:include type="metas" />
    <jdoc:include type="styles" />
    <jdoc:include type="scripts" />
</head>

<body class="bg-blue-300">
    <header>

    </header>
    <main>
        <h1>TEST</h1>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?>
            <?php echo $app->get("sitename"); ?>
        </p>
        <jdoc:include type="modules" name="bottomnav" style="none" />
    </footer>

    <!-- Include any debugging info -->
    <jdoc:include type="modules" name="debug" style="none" />
</body>

</html>